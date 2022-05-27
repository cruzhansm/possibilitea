<template>
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
</template>

<script setup>
defineProps({
  category: String,
  subcategory: String,
  item: Object,
});
</script>
