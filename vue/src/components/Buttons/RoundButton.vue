<template>
  <div
    class="
      flex
      justify-center
      items-center
      rounded-full
      bg-secondary
      h-11
      w-11
      hover:bg-primary hover:cursor-pointer
    "
  >
    <font-awesome-icon
      v-if="icon != undefined"
      :icon="icon"
      class="text-white"
    ></font-awesome-icon>
    <span
      v-if="text != undefined"
      class="text-[16px] text-buttonText font-bold"
    >
      {{ text }}
    </span>
  </div>
</template>

<script>
export default {
  name: "RoundButton",
  props: {
    icon: String,
    text: String,
  },
};
</script>

<style scoped>
</style>