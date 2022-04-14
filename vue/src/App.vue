<template>
  <div class="h-screen w-screen font-inter">
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: "App",
  mounted() {
    this.$router.push({ name: "login" });
  },
};
</script>

<style scoped>
</style>