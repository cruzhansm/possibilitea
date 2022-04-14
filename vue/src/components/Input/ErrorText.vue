<template>
  <div class="absolute bottom-[-2] left-3 text-[10px] text-error">
    {{ text }}
  </div>
</template>

<script>
export default {
  name: "ErrorText",
  props: {
    text: String,
  },
};
</script>

<style scoped>
</style>