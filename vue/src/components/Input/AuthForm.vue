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
    <div class="text-primary text-textButtons font-semibold text-[32px]">
      {{ title }}
    </div>
    <div class="flex flex-col gap-5">
      <TextInput title="Username" :focus="true"></TextInput>
      <TextInput title="Password"></TextInput>
    </div>
    <PrimaryButton text="Enter" :height="47" :width="374"></PrimaryButton>
  </div>
</template>

<script>
import TextInput from "./TextInput.vue";
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