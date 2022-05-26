<template>
  <div
    class="flex flex-row justify-around items-center w-full h-[194px] min-h-[194px] pl-[30px] pr-[20px] border-t-[6px] border-divider"
  >
    <SelectAmount />
    <SelectSize />
    <SelectSugar />
    <SelectAddons />
    <SelectTemperature />
    <PrimaryButton text="Add" :height="163" :width="76" />
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
const store = useStore();
console.log(store.state);
</script>
