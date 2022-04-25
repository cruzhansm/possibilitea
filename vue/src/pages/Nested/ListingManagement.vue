<template>
  <div>

    <FoodCategory/>
    <br>
    <DrinkCategory/>
  </div>
</template>

<script>
import FoodCategory from "../../components/Dashboard/Listing/FoodCategory.vue";
import DrinkCategory from "../../components/Dashboard/Listing/DrinkCategory.vue";
export default {
  name: "ListingManagement",
  components: {FoodCategory,DrinkCategory}
};
</script>

<style lang="postcss" scoped>
</style>