<template>
  <div
    class="
      flex
      justify-center
      items-center
      bg-secondary
      rounded-[9px]
      text-textButtons text-buttonText
      font-bold
      hover:cursor-pointer hover:bg-secondaryHovered
    "
    :style="{ height: height + 'px', width: width + 'px' }"
  >
    {{ finalText }}
  </div>
</template>

<script>
export default {
  name: "PrimaryButton",
  props: {
    text: String,
    height: Number,
    width: Number,
  },
  computed: {
    finalText() {
      return this.text.toUpperCase();
    },
  },
};
</script>

<style scoped>
</style>