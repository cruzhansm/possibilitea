<template>
  <div
    class="flex flex-row h-fit w-[460px] pt-2 pb-4 border-divider"
    :class="first == false ? 'border-b-2' : 'border-t-2 border-b-2'"
  >
    <span class="w-[15%] text-sm text-center font-bold">1</span>
    <div class="flex flex-col w-[50%]">
      <span class="leading-tight text-sm font-bold"
        >MILKTEA Dark Chocolate</span
      >
      <span class="leading-tight text-[#696969] text-xs font-bold">
        22oz, 50% sugar
      </span>
      <span class="leading-tight text-[#696969] text-xs font-bold">
        Tapioca, Red Bean, Cream Cheese
      </span>
    </div>
    <span class="w-[17.5%] text-sm text-center font-bold">149.00</span>
    <span class="w-[17.5%] text-sm text-center font-bold">149.00</span>
  </div>
</template>

<script>
export default {
  name: "TransactionItem",
  props: {
    first: Boolean,
  },
};
</script>

<style scoped>
</style>