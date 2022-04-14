<template>
  <div
    class="
      flex flex-col
      h-full
      w-fit
      pl-8
      pt-5
      pb-[30px]
      gap-y-[10px]
      border-l-[6px] border-divider
    "
  >
    <span class="text-2xl text-primary font-bold">Bill</span>
    <Divider />
    <BillingItems :items="items" />
    <Divider />
    <BillingTotal />
    <PrimaryButton text="Apply Discount" :height="60" :width="332" />
    <BillingAmount />
    <PrimaryButton text="Confirm" :height="60" :width="332" />
  </div>
</template>

<script>
import PrimaryButton from "../Buttons/PrimaryButton.vue";
import Divider from "../Utilities/Divider.vue";
import BillingItems from "./Billing/BillingItems.vue";
import BillingTotal from "./Billing/BillingTotal.vue";
import BillingAmount from "./Billing/BillingAmount.vue";

export default {
  name: "BillingArea",
  components: {
    PrimaryButton,
    Divider,
    BillingItems,
    BillingTotal,
    BillingAmount,
  },
  computed: {
    items() {
      return this.$store.state.cart;
    },
  },
};
</script>

<style scoped>
</style>