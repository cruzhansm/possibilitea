<template>
  <div>
      <span class="text-2xl text-primary font-bold">Food</span>
     <div class="flex flex-wrap justify-between items-center mt-2 pr-8">
     
      <router-link
      :key="index"
      v-for="(fd, index) in data.food"
      :to="{
        name: 'list',
        params: {category: `${fd.id}`},
      }"
       @click="setItemCategory(fd)"
       >
      <ListingCategory :product="fd.name"/>
      </router-link>
      
      </div>
  </div>
</template>

<script setup>
import { ref } from '@vue/reactivity';
import { useStore } from 'vuex';
import { onMounted, computed } from 'vue';
import { reactive } from '@vue/reactivity';
import ListingCategory from "./ListingCategory.vue";

  const store = useStore();

  const data = reactive({
    food : Array,
    active:  String
  });

  onMounted(() => {
    data.food = store.state.food;
    console.log(data.food);
  });

  function setItemCategory(fd){
    store.dispatch("loadItemcategory", fd.id);
    data.food.map((f) => {
            if (f.active == true) f.active = false;
          });
    fd.active = !fd.active;
  }
  
</script>

<style lang="scss" scoped>

</style>