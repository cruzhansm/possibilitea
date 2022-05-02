<template>
  <div class="flex flex-col gap-5 pl-[30px] pr-5 pt-5">
    <ItemRow
      :key="name"
      v-for="(row, name) in category"
      :items="row"
      :subcategory="name"
      :width="width"
      :height="height"
    />
  </div>
</template>

<script>
import ItemRow from "../../components/POS/Selection/ItemRow.vue";

export default {
  name: "ItemMenu",
  data(){
    return{
      width: 130,
      height: 138
    }
  },
  components: {
    ItemRow,
  },
  computed: {
    category() {
      /* get all items that are in this category */
      const menu = this.$store.state.categories.filter(
        (c) => c.name.toUpperCase() == this.$route.params.category.toUpperCase()
      )[0].items;

      return menu;
    },
  },
};
</script>

<style scoped>
</style>