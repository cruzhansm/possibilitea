<template>
  <div>

  <router-link 
  :to="{
    name: 'info',
    params: {category: category, subcategory: subcategory, name:item.name, price:item.price}
  }"
  >
  
  <div
    class="
      flex
      justify-center
      text-center
      items-end
      bg-secondary
      rounded-[9px]
      w-[212px]
      h-[148px]
      hover:outline hover:outline-4 hover:outline-primary hover:cursor-pointer
    "
  >
    <span class="text-[16px] uppercase font-bold">{{ item.name }}</span>
  </div>
  </router-link>

  </div>
</template>

<script>
export default {
  name: "ListItem",
  props: {
    category:String,
    subcategory:String,
    item: Object,
  },
};
</script>

<style scoped>
</style>