<template>
  <div class="flex justify-between items-center h-[77px] min-h-[77px] w-full">
    <Navback />
    <DateTime />
    <span class="text-2xl text-primary font-bold">staffUsername</span>
  </div>
</template>

<script>
import Navback from "./Navback.vue";
import DateTime from "./DateTime.vue";

export default {
  name: "Navbar",
  components: {
    Navback,
    DateTime,
  },
};
</script>

<style scoped>
</style>