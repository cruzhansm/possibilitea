<template>
  <div
    class="flex flex-row justify-between items-center w-full h-fit my-[15px]"
  >
    <span class="text-[20px] text-black font-bold">Amount</span>
    <NumberInput @changeNumber="returnAmount" color="primary" :height="47" :width="147" align="right" />
  </div>
</template>

<script>
import NumberInput from "../../Input/NumberInput.vue";

export default {
  name: "BillingAmount",
  components: {
    NumberInput,
  },
  methods: {
    returnAmount(value) {
      this.$emit("changeAmount", value);
    },
  },
};
</script>

<style scoped>
</style>