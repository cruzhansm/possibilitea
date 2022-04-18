<template>
  <input
    type="search"
    class="rounded-[9px] bg-white text-textInput px-5 py-3"
    :style="{ height: height + 'px', width: width + 'px' }"
    placeholder="Search"
  />
</template>

<script>
export default {
  name: "Search",
  props: {
    height: Number,
    width: Number,
  },
};
</script>

<style lang="postcss" scoped>
input {
  @apply outline-none;
}
</style>