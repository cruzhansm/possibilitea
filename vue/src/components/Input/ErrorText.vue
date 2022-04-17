<template>
  <div class="absolute w-full -bottom-4 text-error text-xs">
    <div class="w-fit" :class="alignError">{{ text }}</div>
  </div>
</template>

<script>
export default {
  name: "ErrorText",
  computed: {
    alignError() {
      return this.align == "left" ? "ml-4" : "mx-auto";
    },
  },
  props: {
    text: String,
    align: String,
  },
};
</script>

<style lang="postcss" scoped>
</style>