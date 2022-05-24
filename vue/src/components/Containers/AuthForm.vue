<template>
  <div
    class="
      flex flex-col
      justify-center
      items-center
      border-2 border-divider-400
      rounded-xl
      px-[45px]
      py-14
      gap-[50px]
    "
  >
    <div class="text-primary text-textButtons font-semibold">
      {{ title }}
    </div>
    <form @submit="login" class="flex flex-col gap-5">
      
      <div v-if="errorMsg" class="animate-bounce flex flex-row justify-between border-2 border-error rounded-[9px] p-2 m-2">
      <div class=" text-error">{{ errorMsg }}</div>
      
      <div @click="errorMsg = ''">
      <font-awesome-icon
        size="xs"
        class="hover:cursor-pointer stroke-2 pr-4 w-[14px] h-[14px] align-middle"
        :icon="'xmark'"
        :class="'text-error'"
      />
      </div>
      
      </div>
      

      <TextInput
        @update="updateUsername"
        title="Username"
        :focus="true"
        errorAlign="left"
        :errorText="errorMsg"
      ></TextInput>

       <PasswordInput
            name="Password"
            title="Password"
            errorAlign="left"
            errorText="Empty field."
            @update="updatePassword"
        />

    </form>
      <PrimaryButton @click="login" text="Enter" :height="47" :width="374"></PrimaryButton>
  </div>
</template>


<script setup>
import TextInput from "../Input/TextInput.vue";
import PasswordInput from "../Input/PasswordInput.vue";
import PrimaryButton from "../Buttons/PrimaryButton.vue";
import store from '../../store';
import router from '../../router';
import { reactive, computed } from 'vue';
import { ref } from "@vue/reactivity";

const user = reactive({
  username: '',
  password: '',
});

let errorMsg = ref('');
let errorState = ref(false);

const props = defineProps({
  formTitle: String
})

const title = computed(() => {
  return props.formTitle.toUpperCase();
})

function updateUsername(value){
  user.username = value;
}

function updatePassword(value){
  user.password = value;
}

function login(ev) {
  ev.preventDefault();
  if(user.username === '' || user.password === ''){
    errorMsg.value = 'Empty Field. Please fill in all fields';
    return;
  }else{
    store.dispatch('login', user)
      .then(() => {
        router.push({ name: 'navigation' });
      })
      .catch(err => {
            errorMsg.value = 'Invalid Credentials. Please try again';
      });
  }
}


</script>


<style scoped>

.errMsg{
  animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both infinite;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}

@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}
</style>