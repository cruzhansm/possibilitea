<template>
  <div class="flex flex-col w-full">
    <div class="h-[683px] overflow-scroll overflow-x-hidden w-full">
      <router-view></router-view>
    </div>
    <Selects />
  </div>
</template>

<script>
import Selects from "./Selection/Selects.vue";

export default {
  name: "ItemSelection",
  components: {
    Selects,
  },
};
</script>

<style lang="postcss" scoped>
::-webkit-scrollbar {
  @apply w-[9px];
}

::-webkit-scrollbar-thumb {
  @apply bg-primary;
}

::-webkit-scrollbar-thumb:hover {
  @apply hover:cursor-pointer bg-primaryHovered;
}

</style>
