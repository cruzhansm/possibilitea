<template>
  <div >
     <div
      class="
        transition ease-in-out
        delay-[50]
        flex flex-col
        justify-center
        items-center
        w-[265px]
        h-[290px]
        m-2
        bg-secondary
        rounded-[9px]
        text-white
        border-[5px]
        border-[#fff]
        cursor-pointer 
        hover:border-primary
      "
      >
      <span class="text-[24px] bg-black bg-opacity-50 w-full font-bold text-center">{{ product.toUpperCase() }}</span>
    </div>
  </div>
</template>

<script>
  export default {
    name: "ListingCategory",
    props: {
      product: String
    },
  }
</script>

<style lang="scss" scoped>

</style>