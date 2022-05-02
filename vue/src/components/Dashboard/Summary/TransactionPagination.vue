<template>
  <div class="w-full">
    <div class="flex justify-between py-4 pl-8 bg-white">
      <span class="w-1/4 font-bold text-textInput">Transaction ID</span>
      <span class="w-1/4 font-bold text-textInput">Staff</span>
      <span class="w-1/4 font-bold text-textInput">Total</span>
      <span class="w-1/4 font-bold text-textInput">Date & Time</span>
    </div>
    <TransactionLog :key="n" v-for="n in 8" />
    <div class="flex justify-center w-full mt-6">
      <PaginationController :pages="3" />
    </div>
  </div>
</template>

<script>
import PaginationController from "../../Pagination/PaginationController.vue";
import TransactionLog from "./TransactionLog.vue";
export default {
  name: "TransactionPagination",
  components: { TransactionLog, PaginationController },
};
</script>

<style lang="postcss" scoped>
</style>