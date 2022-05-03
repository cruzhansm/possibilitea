<template>
  <div>
      <button
      @click="$router.push({name: 'add'})"
      class="
          w-[212px]
          h-[47px] 
          text-[24px] 
          bg-primary 
          text-buttonText 
          rounded-[9px] 
          hover:bg-primaryHovered 
          transition 
          ease-in-out 
          delay-[65]
      ">
        + ADD LISTING 
      </button>
  </div>
</template>

<script>
  export default {
    name: "AddListingButton",
    
  }
</script>

<style lang="scss" scoped>

</style>