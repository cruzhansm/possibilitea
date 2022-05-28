<template>
  <div
    class="flex flex-row h-fit w-[460px] pt-2 pb-4 border-divider"
    :class="first == false ? 'border-b-2' : 'border-t-2 border-b-2'"
  >
    <span class="w-[15%] text-sm text-center font-bold">{{item.quantity}}</span>
    <div class="flex flex-col w-[50%]">
      <span class="leading-tight text-sm font-bold"
        >{{ item.subcategory }} {{item.item_name}}</span
      >
      <span class="leading-tight text-[#696969] text-xs font-bold">
        <p v-if="item.size">{{ item.size }}</p> 
        <p v-if="item.sugar">{{ item.sugar }} sugar</p>  
      </span>
      <span class="leading-tight text-[#696969] text-xs font-bold">
        <!-- Tapioca, Red Bean, Cream Cheese -->
        {{ item.category }}
        {{ item.item_cat }}
      </span>
    </div>
    <span class="w-[17.5%] text-sm text-center font-bold">₱ {{item.price}}.00</span>
    <span class="w-[17.5%] text-sm text-center font-bold">₱ {{ item.price * item.quantity }}.00</span>
  </div>
</template>

<script>
export default {
  name: "TransactionItem",
  props: {
    first: Boolean,
    item: Object,
  },
};
</script>

<style scoped>
</style>