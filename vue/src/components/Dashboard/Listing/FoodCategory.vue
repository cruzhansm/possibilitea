<template>
  <div>
      <span class="text-2xl text-primary font-bold">Food</span>
     <div class="flex flex-wrap justify-between items-center mt-2 pr-8">
      <router-link
      :key="index"
      v-for="(fd, index) in food"
      :to="{
        name: 'list',
        params: {category: `${fd.name}`},
      }"
       @click="
          food.map((f) => {
            if (f.active == true) f.active = false;
          });
          fd.active = !fd.active;
        "
       >
      <ListingCategory :product="fd.name"/>
      </router-link>

      </div>

  </div>
</template>

<script>
  import ListingCategory from "./ListingCategory.vue";
  export default {
    name: "FoodCategory",
    data(){
      return {
        food: Array,
        active: String
      };
    },
    components: {ListingCategory},
    mounted () {
      this.food = this.$store.state.categories.filter(
        (c) => c.category == "Food"
      );
    },

    
  }
</script>

<style lang="scss" scoped>

</style>