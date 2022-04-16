<template>
  <div class="w-100 text-[10px] text-error" :class="alignError">
    {{ text }}
  </div>
</template>

<script>
export default {
  name: "ErrorText",
  computed: {
    alignError() {
      return this.align == "left" ? "ml-6" : "mx-auto";
    },
  },
  props: {
    text: String,
    align: String,
  },
};
</script>

<style scoped>
</style>