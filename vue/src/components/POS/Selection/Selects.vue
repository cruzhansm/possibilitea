<template>
  <div
    class="
      flex flex-row
      justify-around
      items-center
      w-full
      h-[194px]
      min-h-[194px]
      pl-[30px]
      pr-[20px]
      border-t-[6px] border-divider
    "
  >
    <SelectAmount />
    <SelectSize />
    <SelectSugar />
    <SelectAddons />
    <PrimaryButton text="Add" :height="163" :width="76" />
  </div>
</template>

<script>
import PrimaryButton from "../../Buttons/PrimaryButton.vue";
import SelectAmount from "./SelectAmount.vue";
import SelectSize from "./SelectSize.vue";
import SelectSugar from "./SelectSugar.vue";
import SelectAddons from "./SelectAddons.vue";

export default {
  name: "Addons.vue",
  components: {
    PrimaryButton,
    SelectAmount,
    SelectSize,
    SelectSugar,
    SelectAddons,
  },
};
</script>

<style scoped>
</style>