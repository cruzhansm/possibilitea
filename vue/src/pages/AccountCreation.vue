<template>
  <div class="flex flex-col justify-center items-center">
    <div class="w-full h-fit px-6"><Navbar /></div>
    <div
      class="
        flex
        justify-center
        items-center
        w-full
        h-full
        border-t-[6px] border-divider
        pt-10
      "
    >
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
          w-fit
        "
      >
        <span class="text-[32px] text-primary font-bold">Account Creation</span>
        <form action="" @submit="register" id="registerUser" class="flex flex-col gap-7">
          <TextInput
            title="Username"
            errorAlign="left"
            errorText="Empty field."
            @update="updateUsername"
          />
          <TextInput
            title="First Name"
            errorAlign="left"
            errorText="Empty field."
            @update="updateFname"
          />
          <TextInput
            title="Last Name"
            errorAlign="left"
            errorText="Empty field."
            @update="updateLname"
          />
          <PasswordInput
            title="Password"
            errorAlign="left"
            errorText="Empty field."
            @update="updatePassword"
          />
          <PasswordInput
            title="Confirm Password"
            errorAlign="left"
            errorText="Empty field."
            @update="updateCpassword"
          />
          <div class="mt-4">
            <PrimaryButton
              type="submit"
              text="Proceed"
              :width="374"
              :height="47"
              @click="toggleCreation"
            />
          </div>
        </form>
      </div>
    </div>
    <!-- Modal area -->
    <Modal v-show="toggle.isConfirmingCreation" @close="toggleCreation">
      <template v-slot:body>
        <div class="flex flex-col items-center w-full gap-2">
          <span
            class="text-xl text-primary font-bold w-full text-center uppercase"
            >Account Details</span
          >
          <div class="flex justify-between w-[200px]">
            <div class="flex flex-col gap-2">
              <span class="text-sm text-[#696969] font-bold">Username</span>
              <span class="text-sm text-[#696969] font-bold">First Name</span>
              <span class="text-sm text-[#696969] font-bold">Last Name</span>
            </div>
            <div class="flex flex-col gap-2">
              <span class="text-sm font-bold text-right">{{ user.username }}</span>
              <span class="text-sm font-bold text-right">{{ user.firstname }}</span>
              <span class="text-sm font-bold text-right">{{ user.lastname }}</span>
            </div>
          </div>
        </div>
      </template>
      <template v-slot:button-area>

        <PrimaryButton
          text="Create Account"
          :height="47"
          :width="295"
          @click="register"
        />
      </template>
    </Modal>

    <MessageModal
      v-show="toggle.isConfirmed"
      message="Account Created"
      @close="toggleCreation"
    />
  </div>
</template>

<script>
import MessageModal from "../components/Modal/MessageModal.vue";
import Modal from "../components/Modal/Modal.vue";
import PasswordInput from "../components/Input/PasswordInput.vue";
import PrimaryButton from "../components/Buttons/PrimaryButton.vue";
import TextInput from "../components/Input/TextInput.vue";
import Navbar from "../components/Navigation/Navbar.vue";
import { computed, reactive, toRefs } from "vue";
import { useStore } from "vuex";
import { useRouter } from "vue-router";

export default {
  name: "AccountCreation",
  components: {
    Navbar,
    TextInput,
    PrimaryButton,
    PasswordInput,
    Modal,
    MessageModal,
  },
  setup(){
    const store = useStore();
    const router = useRouter();
    const toggle = reactive({
      isConfirmed: false,
      isConfirmingCreation: false,
    });
    
    const user = reactive({
      username: String,
      firstname: String,
      lastname: String,
      password: String,
      cpassword: String,
    });


    function register(ev) {

      toggle.isConfirmingCreation = !toggle.isConfirmingCreation;
      setTimeout(() => {
        toggle.isConfirmed = !toggle.isConfirmed;
      }, 300);
      setTimeout(() => {
        toggle.isConfirmed = !toggle.isConfirmed;
      }, 1600);

      ev.preventDefault();
      store.dispatch("register", user )
           .then((res) => {
             router.push({
                name: "navigation",
              })
             })
    }

        const updateUsername = (val) => {
          user.username = val;
        };
    
        const updateFname = (val) => {
          user.firstname = val;
        };
    
        const updateLname = (val) => {
          user.lastname = val;
        };
    
        const updatePassword = (val) => {
          user.password = val;
        };
    
        const updateCpassword = (val) => {
          user.cpassword = val;
        };

        const toggleCreation = () => {
          toggle.isConfirmingCreation = !toggle.isConfirmingCreation;
        };

    return {
      user,
      updateUsername,
      updateFname,
      updateLname,
      updatePassword,
      updateCpassword,
      register,
      toggleCreation,
      toggle,

    }
  },
};
</script>

<style scoped>
</style>