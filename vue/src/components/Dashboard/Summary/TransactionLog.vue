<template>
  <div class="flex w-full py-4 pl-8 bg-white border-t border-divider">
    <span class="w-1/4 text-[#696969] text-textInput">{{id}}</span>
    <span class="w-1/4 text-[#696969] text-textInput">{{name}}</span>
    <span class="w-1/4 text-[#696969] text-textInput">{{amount}}</span>
    <span class="w-1/4 text-[#696969] text-textInput">{{date}}</span>
  </div>
</template>

<script>
export default {
  name: "TransactionLog",
  props: ['id','name','amount','date']
};
</script>

<style lang="postcss" scoped>
</style>