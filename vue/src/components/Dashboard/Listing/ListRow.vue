<template>
  <div class="flex flex-col w-full h-fit gap-1">
    <span class="text-2xl text-primary font-bold">{{ subcategory }}</span>
    <div class="flex flex-row flex-wrap w-full h-fit gap-4 pt-2">
      <ListItem 
      class="  animate-fade-in-down
     :style='{ animationDelay: `${ind * 0.1}s`}'  "
      :key="item.id" v-for="item in items" :item="item" :subcat_id="subcat_id" :subcategory="subcategory"/>
    </div>
  </div>
</template>

<script>
import ListItem from "./ListItem.vue";

export default {
  name: "ListRow",
  components: {
    ListItem,
  },
  props: {
    // category: String,
    items: Object,
    subcategory: String,
    subcat_id: String,
  },


};
</script>

<style scoped>
</style>