<template>
  <div class="flex flex-col gap-5 h-fit w-full">
    <div class="flex flex-row justify-between items-center w-full">
      <span class="text-[16px] text-inputText font-bold">Subtotal</span>
      <span class="text-[16px] text-inputText font-bold">₱{{subtotal}}</span>
    </div>
    <div class="flex flex-row justify-between items-center w-full">
      <span class="text-[16px] text-inputText font-bold">12% VAT</span>
      <span class="text-[16px] text-inputText font-bold">₱{{vat}}</span>
    </div>
    <div class="flex flex-row justify-between items-center w-full">
      <span class="text-[20px] text-inputText font-bold">Total</span>
      <span class="text-[20px] text-primary font-bold">₱{{total}}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "BillingTotal",
  computed: {
    subtotal() {
      let subtotal = 0;
      this.$store.state.cart.forEach((item) => {
        subtotal += item.price*item.quantity;
      });
      return subtotal;
    },
    vat() {
      return (this.subtotal * 0.12);
    },
    total() {
      return this.subtotal + this.vat;
    },
  },
  
};
</script>

<style scoped>
</style>