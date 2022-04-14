<template>
  <div
    class="flex flex-col gap-[38px] justify-center items-center h-max pt-[80px]"
  >
    <div
      class="
        h-[274px]
        w-[423px]
        border border-black
        flex
        justify-center
        items-center
      "
    >
      Logo Here
    </div>
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