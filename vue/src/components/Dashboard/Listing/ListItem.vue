<template>
  <div>

  <router-link 
  :to="{
    name: 'info',
    params: {category: category, subcategory: subcategory, name:item.name, price:item.price, id:item.id}
  }"
  >
  
  <div
    class="
      flex
      relative
      justify-center
      text-center
      items-end
      bg-secondary
      rounded-[9px]
      w-[212px]
      h-[148px]
      hover:outline 
      hover:outline-4 
      hover:outline-primary 
      hover:cursor-pointer
      transform hover:-translate-y-1
      transition delay-75 ease-out hover:ease-in
    "
  >
    <!-- <img :src="item.img_path" alt="" class="absolute inset-0 h-full w-full object-cover rounded-[9px]"> -->
    <div class="absolute inset-0 h-full w-full object-cover rounded-[9px]"></div>
    <div class="flex h-full items-center justify-center relative">
      <span class="text-[16px] uppercase font-bold tracking-wider ">{{ item.name }}</span>
    </div>
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