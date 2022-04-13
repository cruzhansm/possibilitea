<template>
  <div
    class="
      flex
      justify-center
      items-center
      bg-primary
      rounded-[9px]
      text-textButtons text-buttonText
      hover:cursor-pointer hover:bg-primaryHovered
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