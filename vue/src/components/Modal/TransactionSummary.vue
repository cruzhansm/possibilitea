<template>
  <div class="flex justify-between w-[190px] h-fit mt-4 ml-auto mr-2">
    <div class="flex flex-col">
      <span class="font-bold text-[16px]">Subtotal</span>
      <span class="font-bold text-[16px]">12% VAT</span>
      <span class="font-bold text-[16px]">Total</span>
      <span class="font-bold text-[16px]">Amount</span>
      <span class="font-bold text-[16px]">Change</span>
    </div>
    <div class="flex flex-col">
      <span class="font-bold text-[16px] text-right">133.04</span>
      <span class="font-bold text-[16px] text-right">15.96</span>
      <span class="font-bold text-[16px] text-right">149.00</span>
      <span class="font-bold text-[16px] text-right">200.00</span>
      <span class="font-bold text-[16px] text-right">51.00</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "TransactionSummary",
};
</script>

<style scoped>
</style>