<template>
  <div
    class="flex flex-row justify-between items-center w-full h-fit my-[25px]"
  >
    <span class="text-[20px] text-black font-bold">Amount</span>
    <NumberInput color="primary" :height="47" :width="147" align="right" />
  </div>
</template>

<script>
import NumberInput from "../../Input/NumberInput.vue";

export default {
  name: "BillingAmount",
  components: {
    NumberInput,
  },
};
</script>

<style scoped>
</style>