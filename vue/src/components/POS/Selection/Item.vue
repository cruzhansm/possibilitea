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
      w-[170px]
      h-[130px]
      hover:outline 
      hover:outline-4 
      hover:outline-primary 
      hover:cursor-pointer
      transform hover:-translate-y-1
      transition delay-75 ease-out hover:ease-in
    "
  >

    <img :src="item.img_path" alt="" class=" absolute inset-0 h-full w-full object-cover rounded-[9px]">

    <div class="flex flex-wrap flex-col h-full w-full relative justify-end">
      <span class="text-[18px] font-extrabold leading-[22px] uppercase tracking-wider p-[5px] text-white outline-4 bg-black bg-opacity-50 rounded-b-lg border-black">{{ item.name }}</span>

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
