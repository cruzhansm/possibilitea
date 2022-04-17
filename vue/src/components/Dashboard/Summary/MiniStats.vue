<template>
  <div
    class="
      flex flex-col
      justify-center
      items-center
      gap-4
      w-[324px]
      h-[165px]
      bg-white
      rounded-[9px]
    "
  >
    <span class="text-xl font-bold">{{ title }}</span
    ><span class="text-5xl text-primary font-bold">{{
      type == "currency" ? "P" + stat : stat
    }}</span>
  </div>
</template>

<script>
export default {
  name: "MiniStats",
  props: {
    stat: String,
    title: String,
    type: String,
  },
};
</script>

<style lang="postcss" scoped>
</style>