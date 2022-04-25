<template>
  <div>
     <div
      class="
        flex flex-col
        justify-center
        items-center
        w-[282.75px]
        h-[290px]
        m-2
        bg-secondary
        rounded-[9px]
        text-white
        border-[5px]
        border-secondary
        cursor-pointer 
        hover:border-primary 
        
      "
      >
      <span class="text-[24px] font-bold text-center">{{ product }}</span>
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