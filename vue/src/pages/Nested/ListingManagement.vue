<template>
  <div class="flex flex-col space-y-4">

    <!-- display add listing button if user is admin otherwise hidden -->
    <div  v-if="user === 'admin'" class="flex flex-row justify-end pr-[40px]">
      <button 
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


    <FoodCategory/>
    <DrinkCategory/>
  </div>
</template>

<script>
import FoodCategory from "../../components/Dashboard/Listing/FoodCategory.vue";
import DrinkCategory from "../../components/Dashboard/Listing/DrinkCategory.vue";
export default {
  name: "ListingManagement",
  data() {
    return {
      user: 'admin'
    }
  },
  components: {FoodCategory,DrinkCategory}
};
</script>

<style lang="postcss" scoped>
</style>