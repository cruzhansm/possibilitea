<template>
  <div>
  <label class="text-primary text-textInput font-semibold">
    {{ title }}
  </label>
  <br>
  <input
    @change="$emit('changeNumber', $event.target.value)"
    v-model="num"
    type="number"
    class="
      bg-inputField
      h-[47px]
      w-[146px]
      rounded-[9px]
      outline-none
      text-textInput
      pr-6
      pl-4
    "
    :class="['text-' + color]"
    :style="{ height: height + 'px', width: width + 'px', textAlign: align }"
    :disabled="disable"
  />
  </div>
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
    default:Number,
    title: String,
    color: String,
    height: Number,
    width: Number,
    align: String,
    disabled: Boolean,
  },
  mounted() {
    this.num = this.default;
  },
};
</script>

<style scoped>
</style>