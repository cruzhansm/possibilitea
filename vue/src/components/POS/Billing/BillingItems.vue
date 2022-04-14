<template>
  <div
    class="
      p
      flex flex-col
      h-[500px]
      max-h-[500px]
      gap-4
      w-full
      overflow-scroll overflow-x-hidden
    "
  >
    <BillingItem :key="index" v-for="(item, index) in items" :item="item" />
  </div>
</template>

<script>
import BillingItem from "./BillingItem.vue";

export default {
  name: "BillingItems",
  components: {
    BillingItem,
  },
  props: {
    items: Array,
  },
};
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
