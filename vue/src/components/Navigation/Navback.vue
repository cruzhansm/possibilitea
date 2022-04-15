<template>
  <div
    class="
      p
      flex
      gap-6
      px-2
      py-1
      rounded-[9px]
      hover:cursor-pointer hover:bg-[#ECECEC] hover:text-primaryHovered
    "
    @click="redirectBack"
  >
    <font-awesome-icon icon="angle-left" size="2x" class="fai text-primary" />
    <span class="text-2xl text-primary font-bold">Tea Paradise</span>
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

<style lang="postcss" scoped>
.p:hover > span,
.p:hover > .fai {
  @apply text-primaryHovered;
}
</style>