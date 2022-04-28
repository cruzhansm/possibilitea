<template>
  <div class="flex flex-col w-full h-fit gap-1">
    <span class="text-2xl text-primary font-bold">{{ subcategory }}</span>
    <div class="flex flex-row flex-wrap w-full h-fit gap-4">
      <Item :key="item.name" v-for="item in items" :item="item" :width="width" :height="height" />
    </div>
  </div>
</template>

<script>
import Item from "./Item.vue";

export default {
  name: "ItemRow",
  components: {
    Item,
  },
  props: {
    subcategory: String,
    items: Array,
    width: Number,
    height: Number
  },
};
</script>

<style scoped>
</style>