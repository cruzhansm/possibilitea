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
      <span class="font-bold text-[16px] text-right">₱{{ subtotal }}</span>
      <span class="font-bold text-[16px] text-right">{{ vat }}</span>
      <span class="font-bold text-[16px] text-right">₱{{ total }}</span>
      <span class="font-bold text-[16px] text-right">₱{{ amount }}</span>
      <span class="font-bold text-[16px] text-right">₱{{amount - total}}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "TransactionSummary",
  props: {
    amount: Number,
  },
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
    }
  },

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
    }
}
</script>

<style scoped>
</style>