<template>
  <div
    class="
      bg-primary
      text-[20px]
      px-3
      py-1
      uppercase
      text-white
      font-bold
      hover:cursor-pointer
    "
    @click="movePage"
  >
    {{ text }}
  </div>
</template>

<script>
export default {
  name: "PaginationButton",
  props: {
    text: String,
  },
  methods: {
    movePage() {
      this.text == "Prev" ? this.$emit("prev") : this.$emit("next");
    },
  },
  emits: ["prev", "next"],
};
</script>

<style lang="postcss" scoped>
</style>