<template>
  <div
    class="
      flex
      justify-center
      text-center
      items-end
      bg-secondary
      rounded-[9px]
      hover:outline hover:outline-4 hover:outline-primary hover:cursor-pointer
    "
    :style="{
      height: height + 'px',
      width: width + 'px',
    }"
  >
    <span class="text-[16px] uppercase font-bold">{{ item.name }}</span>
  </div>
</template>

<script>
export default {
  name: "Item",
  props: {
    item: Object,
    height: Number,
    width: Number
  },
};
</script>

<style scoped>
</style>