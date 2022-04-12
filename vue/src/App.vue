<template>
  <div
    class="
      text-7xl
      flex
      h-screen
      justify-center
      items-center
      align
      font-bold
      text-white
      bg-black
    "
  >
    {{ user }}
  </div>
</template>

<script>
import store from "./store/index";

export default {
  name: "App",
  computed: {
    user() {
      return store.state.user.data.name;
    },
  },
};
</script>

<style scoped>
</style>