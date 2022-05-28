<template>
  <div class="flex flex-col justify-center items-center w-screen px-8">
    <Navbar />
    <div
      class="
        flex
        justify-between
        w-screen
        px-8
        border-t-[6px] border-divider
      "
    >
      <MenuSelection />
      <ItemSelection />
      <BillingArea />
    </div>
  </div>
</template>

<script>
import Navbar from "../components/Navigation/Navbar.vue";
import MenuSelection from "../components/POS/MenuSelection.vue";
import ItemSelection from "../components/POS/ItemSelection.vue";
import BillingArea from "../components/POS/BillingArea.vue";

export default {
  name: "POS",
  components: {
    Navbar,
    MenuSelection,
    ItemSelection,
    BillingArea,
  },
};
</script>

<style scoped>
</style>