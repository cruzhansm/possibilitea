<template>
  <label class="text-primary text-textInput font-semibold">
    {{ title }}
    <br />
    <input
      type="text"
      :maxlength="limit"
      class="
        pl-5
        py-[14px]
        h-[47px]
        w-[374px]
        bg-inputField
        rounded-[9px]
        text-inputText
      "
      :autofocus="focus"
    />
  </label>
</template>

<script>
export default {
  name: "TextInput",
  props: {
    title: String,
    limit: Number,
    focus: Boolean,
  },
};
</script>

<style scoped>
</style>