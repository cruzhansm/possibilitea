<template>
  <div
    class="
      relative
      flex
      items-center
      gap-4
      w-full
      pl-4
      pr-6
      py-2
      hover:cursor-pointer hover:bg-divider
    "
    :class="[
      selected ? 'bg-divider' : 'bg-white',
      first ? 'rounded-t-[9px]' : last ? 'rounded-b-[9px]' : '',
    ]"
    @click="$emit('changeSelect', text)"
  >
    <font-awesome-icon
      icon="check"
      class="text-[#696969]"
      :class="selected ? '' : 'opacity-0'"
    ></font-awesome-icon>
    <span class="text-textInput text-[#696969]">{{ text }}</span>
  </div>
</template>

<script>
export default {
  name: "DropdownItem",
  props: {
    selected: Boolean,
    text: String,
    first: Boolean,
    last: Boolean,
  },
  emits: ["changeSelect"],
};
</script>

<style lang="postcss" scoped>
</style>