<template>
  <div class="flex flex-col w-fit h-fit">
    <span class="text-2xl text-primary font-bold">Size</span>
    <div
      class="
        p
        flex flex-row
        justify-center
        items-center
        gap-[15px]
        border-2 border-divider
        w-fit
        h-fit
        p-[20px]
        rounded-xl
      "
    >
      <RoundButton text="16oz" />
      <RoundButton text="22oz" />
    </div>
  </div>
</template>

<script>
import RoundButton from "../../Buttons/RoundButton.vue";

export default {
  name: "SelectAmount",
  components: {
    RoundButton,
  },
};
</script>

<style scoped>
</style>