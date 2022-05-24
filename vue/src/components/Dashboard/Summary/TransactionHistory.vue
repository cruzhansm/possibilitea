<template>
  <div class="w-[1380px] flex flex-col gap-2">
    <div class="flex justify-between items-center ">
      <span class="text-2xl text-primary font-bold">Transaction History</span>
      <div class="flex items-center gap-5">
        <CustomDropdown
          :default="'Date & Time'"
          :options="['Date & Time', 'Total']"
          width=200
          :disabled="false"
        />
        <Search :height="47" :width="270" />
      </div>
    </div>
    <TransactionPagination />
  </div>
</template>

<script>
import TransactionPagination from "./TransactionPagination.vue";
import CustomDropdown from "../../Input/CustomDropdown.vue";
import Search from "../../Input/Search.vue";
export default {
  name: "TransactionHistory",
  components: { Search, CustomDropdown, TransactionPagination },
};
</script>

<style lang="postcss" scoped>
</style>