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
    <div class="flex flex-col gap-5">
      <TextInput
        title="Username"
        :focus="true"
        errorAlign="left"
        :errorText="'Empty field'"
      ></TextInput>
      <TextInput
        title="Password"
        :errorText="'Empty field'"
        errorAlign="left"
      ></TextInput>
    </div>
    <router-link :to="{ name: 'navigation' }">
      <PrimaryButton text="Enter" :height="47" :width="374"></PrimaryButton>
    </router-link>
  </div>
</template>

<script>
import TextInput from "../Input/TextInput.vue";
import PrimaryButton from "../Buttons/PrimaryButton.vue";

export default {
  name: "AuthForm",
  components: {
    TextInput,
    PrimaryButton,
  },
  props: {
    formTitle: String,
  },
  computed: {
    title() {
      return this.formTitle.toUpperCase();
    },
  },
};
</script>

<style scoped>
</style>