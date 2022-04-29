<template>
  <div class="flex flex-col w-full h-fit gap-1">
    <span class="text-2xl text-primary font-bold">{{ subcategory }}</span>
    <div class="flex flex-row flex-wrap w-full h-fit gap-4">
      <ListItem :key="item.name" v-for="item in items" :item="item" :category="category" :subcategory="subcategory"/>
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
    category: String,
    subcategory: String,
    items: Array,
  },
};
</script>

<style scoped>
</style>