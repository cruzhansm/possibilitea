<template>
  <div>
      <span class="text-2xl text-primary font-bold">Drinks</span>
     <div class="flex flex-wrap justify-between items-center mt-2 pr-8">
      <!-- <router-link
      :key="index"
      v-for="(dr, index) in drinks"
      :to="{
        name: 'list',
        params: {category: `${dr.name}`},
      }"
       @click="
          drinks.map((f) => {
            if (f.active == true) f.active = false;
          });
          dr.active = !dr.active;
        "
       >
      <ListingCategory :product="dr.name"/>
      </router-link> -->
      </div>
  </div>
</template>

<script>
  import ListingCategory from "./ListingCategory.vue";
  export default {
    name: "DrinkCategory",
    data(){
      return {
        categories: Object,
        drinks : Array,
        active: String
      };
    },
    components: {ListingCategory},
    mounted () {
      this.categories = this.$store.state.categories;
      // this.drinks = this.$store.state.categories.filter(
      //   (c) => c.category == "Drinks"
      // );
    },
  }
</script>

<style lang="scss" scoped>

</style>