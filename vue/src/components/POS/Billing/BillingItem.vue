<template>
  <div class="flex flex-row w-full h-fit max-w-fit justify-between items-start">
    <font-awesome-icon
      icon="x"
      class="text-primary text-[16px] hover:cursor-pointer"
    ></font-awesome-icon>
    <div class="flex flex-col h-fit w-full ml-5 mr-3">
      <span class="text-[16px] leading-tight mb-1 text-inputText font-bold">
        {{ `${item.quantity}x ${item.category.toUpperCase()} ${item.name}` }}
      </span>
      <span class="text-[14px] leading-tight text-[#696969] font-bold">{{
        `${item.size}, ${item.sugar} sugar`
      }}</span>
      <span class="text-[14px] leading-tight text-[#696969] font-bold">
        {{ `${item.adds.join(", ")}` }}
      </span>
    </div>
    <span class="text-primary text-[16px] font-bold leading-tight">149.00</span>
  </div>
</template>

<script>
export default {
  name: "BillingItem",
  props: {
    item: Object,
  },
};
</script>

<style scoped>
</style>