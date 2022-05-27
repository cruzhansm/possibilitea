<template>
  <div
    class="flex flex-col gap-[38px] justify-center items-center h-max pt-[80px]"
  >
    <img src="../assets/logo.jpg"
      class="
        h-[274px]
        w-[423px]
        flex
        justify-center
        items-center
      "
    >
      
    <AuthForm formTitle="Log In"></AuthForm>
  </div>
</template>

<script>
import AuthForm from "../components/Containers/AuthForm.vue";

export default {
  name: "Login",
  components: {
    AuthForm,
  },
};
</script>

<style scoped>
</style>