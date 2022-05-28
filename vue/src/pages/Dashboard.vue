<template>
  <div class="flex flex-col justify-center items-center px-8">
    <Navbar />
    <div
      class="flex h-[886px] w-screen pl-8 bg-red border-t-[6px] border-[#f5f5f5]"
    >
      <Sidenav />

      <div class="w-screen h-[886px]  bg-[#ffffff] pt-[50px] pb-[40px] pl-[76px]">
        <router-view></router-view>
      </div>
      
    </div>
  </div>
</template>

<script>
import Sidenav from "../components/Dashboard/Sidenav.vue";
import Navbar from "../components/Navigation/Navbar.vue";
export default {
  name: "Dashboard",
  components: {
    Navbar,
    Sidenav,
  },
  mounted() {
    this.$router.push({ name: "dashboard-summary" });
  },
};
</script>

<style lang="postcss" scoped>
</style>