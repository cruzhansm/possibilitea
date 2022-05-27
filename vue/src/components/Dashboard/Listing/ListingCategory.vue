<template>
  <div >
     <div
      class="
        transition ease-in-out
        delay-[50]
        flex flex-col
        relative
        justify-center
        items-center
        w-[265px]
        h-[290px]
        m-1
        bg-secondary
        rounded-[9px]
        text-white
        border-[5px]
        border-[#fff]
        cursor-pointer 
        hover:border-primary
      "
      ><img :src=img alt="" class=" absolute inset-0 h-full w-full object-cover rounded-[9px]">

    <div class="flex flex-wrap flex-col h-full relative justify-end w-full">
      <span class="text-center bg-black bg-opacity-50 text-[24px] font-extrabold text-white">{{ product.toUpperCase() }}</span></div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "ListingCategory",
    props: {
      product: String,
      img: String
    },
  }
</script>

<style lang="scss" scoped>

</style>