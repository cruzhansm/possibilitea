<template>
  <div

    class="
      flex flex-row
      justify-between
      items-center
      absolute-bottom
      w-full
      h-[194px]
      min-h-[194px]
      pl-[30px]
      pr-[20px]
      border-t-[6px] border-divider
    "

  >
    <SelectAmount />
    <SelectSize v-show="categoryTest('size')" />
    <SelectSugar v-show="categoryTest('sugar')" />
    <SelectAddons v-show="categoryTest('addons')" />
    <SelectTemperature v-show="categoryTest('temperature')" />
    <PrimaryButton @click="addtoCart" text="Add" :height="163" :width="76" />
  </div>
</template>

<script setup>
import PrimaryButton from "../../Buttons/PrimaryButton.vue";
import SelectAmount from "./SelectAmount.vue";
import SelectSize from "./SelectSize.vue";
import SelectSugar from "./SelectSugar.vue";
import SelectAddons from "./SelectAddons.vue";
import SelectTemperature from "./SelectTemperature.vue";
import { useStore } from "vuex";
import { computed } from "vue";
import { reactive } from "@vue/reactivity";

const store = useStore();

// const cart = reactive({
//     name: "Coffee",
//     item_id: 1,
//     category: 1,
//     quantity: 2, //amount
//     size: "22oz",
//     sugar: 3,
//     price: 150.0,
//     adds: 1,
// });

function addtoCart () {
  store.dispatch("addtoCart", { 
    name: "Coffee",
    user_id: store.state.user.data.id,
    item_id: 1,
    subcategory_id: 1,
    category: 1,
    quantity: 2, //amount
    size: "22oz",
    sugar: 3,
    price: 150.0,
    adds: 1,
  });
}

const categoryTest = (menu) => {
  const item = store.state.selected; //item selected
  const categories = store.state.categories;

  const test = categories.reduce((accu, curr) => {
    const allVals = Object.values(curr.items).flat();
    const itemExist = allVals.some((el) => el.id === item.id);
    if (itemExist) return curr.name;
    return accu;
  }, "");

  switch (menu) {
    case "size":
      if (test === "Milktea & Frappe") return true;
      return false;
    case "sugar":
      if (test === "Milktea & Frappe") return true;
      return false;
    case "addons":
      return ["Lemonade & Fruitea", "Milktea & Frappe"].some(
        (el) => el === test
      );
    case "temperature":
      if (test === "Yogurt & Coffee") return true;
      return false;
  }
};

// console.log(categoryTest);
</script>
