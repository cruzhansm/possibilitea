<template>
  <div class="w-full">
    <div class="flex justify-between py-4 pl-8 bg-white">
      <span class="w-1/4 font-bold text-textInput">Transaction ID</span>
      <span class="w-1/4 font-bold text-textInput">Staff</span>
      <span class="w-1/4 font-bold text-textInput">Total</span>
      <span class="w-1/4 font-bold text-textInput">Date & Time</span>
    </div>

    <TransactionLog :key="transaction.id" v-for="transaction in transactions"
      :id="transaction.id"
      :name="transaction.name.username"
      :amount="transaction.amount"
      :date="transaction.date"
    />
    <div class="flex justify-center w-full mt-6">
      <PaginationController :pages="3" />
    </div>
  </div>
</template>

<script>
import axiosClient from "../../../axios";
import PaginationController from "../../Pagination/PaginationController.vue";
import TransactionLog from "./TransactionLog.vue";
export default {
  name: "TransactionPagination",
  components: { TransactionLog, PaginationController },
  data() {
    return {
      transactions:{},
    }
  },
  methods: {
    loadTransactions(){
        axiosClient.get("/transaction").then(({ data }) => (this.transactions = data.data));
    }
},
created() {
  this.loadTransactions();
}
};

</script>

<style lang="postcss" scoped>
</style>