<template>
  <div class="flex flex-col w-full h-fit gap-1">
    <span class="text-2xl text-primary font-bold">{{ subcategory }}</span>
    <div class="flex flex-row flex-wrap w-full h-fit gap-4">
      <Item
        @click="selectItem(item)"
        :key="item.name"
        v-for="item in items"
        :item="item"
        :category="category"
        :subcategory="subcategory"
        class="itemContainer flex justify-center text-center items-end bg-secondary rounded-[9px] w-[138.3px] h-[130px] hover:outline hover:outline-4 hover:outline-primary hover:cursor-pointer"
      />
    </div>
  </div>
</template>

<script setup>
import Item from "./Item.vue";
import { useStore } from "vuex";

const store = useStore();

defineProps({
  category: String,
  subcategory: String,
  items: Array,
});

// console.log(itemContainers);

const selectItem = (tag) => {
  const itemContainers = [...document.querySelectorAll(".itemContainer")];
  const el = event.target.closest(".itemContainer");
  if (itemContainers.some((e) => e.classList.contains("selected"))) {
    itemContainers.forEach((e) => {
      e.classList.remove("selected");
      e.classList.remove("outline");
      e.classList.remove("outline-4");
      e.classList.remove("outline-primary");
      e.classList.remove("cursor-pointer");
    });
    // console.log("removed");
  } else {
    el.classList.add("selected");
    el.classList.add("outline");
    el.classList.add("outline-4");
    el.classList.add("outline-primary");
    el.classList.add("cursor-pointer");
    store.commit("chooseSelect", tag);

    // console.log(store.state);
  }
};
</script>
