<template>
  <div
    class="p flex flex-col h-[500px] max-h-[500px] gap-4 w-full overflow-scroll overflow-x-hidden"
  >
    <BillingItem :key="index" v-for="(item, index) in items" :item="item" @deleteCart="isDelete"/>
  </div>
</template>

<script setup>
import BillingItem from "./BillingItem.vue";
import {useStore} from "vuex";

const store = useStore();

defineProps({
  items: Array,
});

function isDelete(id) {
  store.dispatch("deleteCartItem", id);
}

</script>

<style lang="postcss" scoped>
::-webkit-scrollbar {
  @apply w-[5px];
}

::-webkit-scrollbar-thumb {
  @apply bg-primary rounded-[9px];
}

::-webkit-scrollbar-thumb:hover {
  @apply hover:cursor-pointer bg-primaryHovered;
}
</style>
