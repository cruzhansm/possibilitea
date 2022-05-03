<template>
  <div class="flex flex-col space-y-4">

    <!-- display add listing button if user is admin otherwise hidden -->
    <div  v-if="user === 'admin'" class="flex flex-row justify-end pr-[40px]">
      <AddListButton></AddListButton>
    </div>


    <FoodCategory/>
    <DrinkCategory/>
  </div>
</template>

<script>
import AddListButton from "../../components/Buttons/AddListingButton.vue" 
import FoodCategory from "../../components/Dashboard/Listing/FoodCategory.vue";
import DrinkCategory from "../../components/Dashboard/Listing/DrinkCategory.vue";
export default {
  name: "ListingManagement",
  data() {
    return {
      user: 'admin'
    }
  },
  components: {FoodCategory,DrinkCategory,AddListButton}
};
</script>

<style lang="postcss" scoped>
</style>