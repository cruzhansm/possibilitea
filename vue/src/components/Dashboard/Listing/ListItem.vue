<template>
  <div>

  <router-link 
  :to="{
    name: 'info',
    params: {category: category, subcategory: subcategory, name:item.name, price:item.price, id:item.id, img_path:item.img_path}
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

    <img :src="item.img_path" alt="" class=" absolute inset-0 h-full w-full object-cover rounded-[9px]">

    <div class="flex flex-wrap flex-col h-full relative justify-end">
      <span class="text-[20px] font-extrabold uppercase tracking-wider text-white w-[117px] ">{{ item.name }}</span>

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

.text-stroke{
  /* add text-stroke */
  font-weight:900;
}
</style>