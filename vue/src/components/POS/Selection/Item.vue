<template>
  <div>
  
  <img v-if="item.img_path" :src="item.img_path" :alt="item.name" class="
      flex
      justify-center
      text-center
      items-end
      rounded-[9px]
      w-[138.3px]
      h-[130px]
      hover:outline hover:outline-4 hover:outline-primary hover:cursor-pointer
    ">

  <div
    v-else
    class="
      flex
      justify-center
      text-center
      items-end
      bg-secondary
      rounded-[9px]
      w-[138.3px]
      h-[130px]
      hover:outline hover:outline-4 hover:outline-primary hover:cursor-pointer
    "
  >
    <span class="text-[16px] uppercase font-bold">{{ item.name }}</span>
  </div>

  </div>
</template>

<script>
export default {
  name: "Item",
  props: {
    category:String,
    subcategory:String,
    item: Array,
  },
};
</script>

<style scoped>
</style>