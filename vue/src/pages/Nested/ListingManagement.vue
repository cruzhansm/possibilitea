<template>
  <div class="flex flex-col space-y-4">

    <!-- display add listing button if user is admin otherwise hidden -->
    <div  v-if="user === 'ADMIN'" class="flex flex-row justify-end pr-[40px]">
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
      user: ''
    }
  },
  components: {FoodCategory,DrinkCategory,AddListButton},
  mounted () {
    this.user = this.$store.state.user.data.role;
    this.$store.dispatch('getSubcategories');
  },
};
</script>

<style lang="postcss" scoped>
</style>