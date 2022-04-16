<template>
  <input
    v-model="num"
    type="number"
    class="
      bg-inputField
      h-[47px]
      w-[146px]
      rounded-[9px]
      outline-none
      text-textInput
      font-bold
      pr-6
      pl-4
    "
    :class="['text-' + color]"
    :style="{ height: height + 'px', width: width + 'px', textAlign: align }"
    :disabled="disable"
  />
</template>

<script>
export default {
  name: "NumberInput",
  data() {
    return {
      num: Number,
    };
  },
  computed: {
    disable() {
      if (this.disabled == true) {
        this.num = "";
      }

      return this.disabled;
    },
  },
  props: {
    color: String,
    height: Number,
    width: Number,
    align: String,
    disabled: Boolean,
  },
};
</script>

<style scoped>
</style>