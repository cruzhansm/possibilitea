<template>
  <div
    class="
      flex
      justify-center
      items-center
      border-1 border-divider
      h-[77px]
      w-11/12
    "
  >
    <Navback />
  </div>
</template>

<script>
import Navback from "./Navback.vue";

export default {
  name: "Navbar",
  components: {
    Navback,
  },
};
</script>

<style scoped>
</style>