<template>
  <div
    class="
      group
      flex
      gap-6
      px-2
      py-1
      rounded-[9px]
      hover:cursor-pointer hover:bg-[#ECECEC] hover:text-primaryHovered
    "
    @click="redirectBack"
  >
    <font-awesome-icon
      icon="angle-left"
      size="2x"
      class="group-hover:text-primaryHovered text-primary"
    />
    <span
      class="group-hover:text-primaryHovered text-2xl text-primary font-bold"
      >Tea Paradise</span
    >
  </div>
</template>

<script>
export default {
  name: "Navback",
  methods: {
    redirectBack() {
      this.$router.push({ name: "navigation" });
    },
  },
};
</script>

<style scoped>
</style>