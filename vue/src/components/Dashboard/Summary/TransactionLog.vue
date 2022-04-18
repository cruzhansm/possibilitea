<template>
  <div class="flex w-full py-4 pl-8 bg-white border-t border-divider">
    <span class="w-1/4 text-[#696969] text-textInput">04162022000001</span>
    <span class="w-1/4 text-[#696969] text-textInput">staffUserName</span>
    <span class="w-1/4 text-[#696969] text-textInput">P000.00</span>
    <span class="w-1/4 text-[#696969] text-textInput">{{
      new Date(Date.now()).toLocaleString()
    }}</span>
  </div>
</template>

<script>
export default {
  name: "TransactionLog",
};
</script>

<style lang="postcss" scoped>
</style>