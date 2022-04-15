<template>
  <div class="flex flex-col gap-5 pl-[30px] pr-5 pt-5">
    <ItemRow
      :key="name"
      v-for="(row, name) in category"
      :items="row"
      :subcategory="name"
    />
  </div>
</template>

<script>
import ItemRow from "../../components/POS/Selection/ItemRow.vue";

export default {
  name: "ItemMenu",
  components: {
    ItemRow,
  },
  computed: {
    category() {
      /* get all items that are in this category */
      const menu = this.$store.state.categories.filter(
        (c) => c.name.toUpperCase() == this.$route.params.category.toUpperCase()
      )[0].items;

      /* separate the items based on their subcategories */
      // let subcategories = [...new Set(menu.map((i) => i.subcategory))];
      // subcategories.forEach((s, i) => {
      //   subcategories[i] = JSON.parse(
      //     `{"${s}": ${JSON.stringify(menu.filter((i) => i.subcategory == s))}}`
      //   );
      // });

      // return subcategories;
      return menu;
    },
  },
};
</script>

<style scoped>
</style>