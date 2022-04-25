<template>
  <div>
      <span class="text-2xl text-primary font-bold">Food</span>
     <div class="flex flex-wrap justify-between items-center mt-2 pr-8">
        <ListingCategory product="99 MEALS & SINGLE ORDERS"/>
        <ListingCategory product="SOUP"/>
        <ListingCategory product="PIZZA & PASTA"/>
        <ListingCategory product="SANDWICHES"/>
        <ListingCategory product="SIDES & ADD ONS"/>
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