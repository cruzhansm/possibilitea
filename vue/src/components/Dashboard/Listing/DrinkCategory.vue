<template>
  <div>
      <span class="text-2xl text-primary font-bold">Drinks</span>
     <div class="flex flex-wrap justify-between items-center mt-2 pr-8">
        <ListingCategory product="MILKTEA & FRAPPE"/>
        <ListingCategory product="SMOOTHIES & MILKSHAKE"/>
        <ListingCategory product="YOGURT & COFFEE"/>
        <ListingCategory product="LEMONADE & FRUITEA"/>
        <ListingCategory product="OTHERS"/>
      </div>
  </div>
</template>

<script>
  import ListingCategory from "./ListingCategory.vue";
  export default {
    name: "FoodCategory",
    components: {ListingCategory}
  }
</script>

<style lang="scss" scoped>

</style>