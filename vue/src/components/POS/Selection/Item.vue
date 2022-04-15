<template>
  <div
    class="
      flex
      justify-center
      text-center
      items-end
      h-[138px]
      w-[130px]
      bg-secondary
      rounded-[9px]
      hover:outline hover:outline-4 hover:outline-primary hover:cursor-pointer
    "
  >
    <span class="text-[16px] uppercase font-bold">{{ item.name }}</span>
  </div>
</template>

<script>
export default {
  name: "Item",
  props: {
    item: Object,
  },
};
</script>

<style scoped>
</style>