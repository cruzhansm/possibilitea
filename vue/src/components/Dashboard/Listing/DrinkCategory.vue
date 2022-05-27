<template>
  <div>
      <span class="text-2xl text-primary font-bold">Drinks</span>
     <div class="flex flex-wrap items-center mt-2">
      <router-link
      :key="index"
      v-for="(dr, index) in data.drinks"
      :to="{
        name: 'list',
        params: {category: `${dr.id}`},
      }"
       @click="setItemCategory(dr)"
       >
      <ListingCategory 
      :img="dr.img_path"
      :product="dr.name"/>
      </router-link>
      </div>
  </div>
</template>

<script setup>
import { useStore } from 'vuex';
import { onMounted, computed } from 'vue';
import { reactive } from '@vue/reactivity';
import ListingCategory from "./ListingCategory.vue";

  const store = useStore();

  const data = reactive({
    drinks : Array,
    active:  String
  });

  onMounted(() => {
    data.drinks = store.state.drinks;
    console.log(data.drinks);
  });

   function setItemCategory(dr){
    store.dispatch("loadItemcategory", dr.id);
    data.drinks.map((f) => {
            if (f.active == true) f.active = false;
          });
    dr.active = !dr.active;
  }


  

  
</script>

<style lang="scss" scoped>

</style>