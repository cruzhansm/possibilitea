<template>
  <div class="flex flex-col gap-5 h-fit w-full">
    <div class="flex flex-row justify-between items-center w-full">
      <span class="text-[16px] text-inputText font-bold">Subtotal</span>
      <span class="text-[16px] text-inputText font-bold">133.04</span>
    </div>
    <div class="flex flex-row justify-between items-center w-full">
      <span class="text-[16px] text-inputText font-bold">12% VAT</span>
      <span class="text-[16px] text-inputText font-bold">15.96</span>
    </div>
    <div class="flex flex-row justify-between items-center w-full">
      <span class="text-[20px] text-inputText font-bold">Total</span>
      <span class="text-[20px] text-primary font-bold">149.00</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "BillingTotal",
  data() {
    return {
      subtotal: Number,
      vat: Number,
      total: Number,
    };
  },
};
</script>

<style scoped>
</style>