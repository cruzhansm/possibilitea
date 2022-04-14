<template>
  <div class="flex flex-col w-fit h-fit">
    <span class="text-2xl text-primary font-bold">Amount</span>
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
      <RoundButton icon="minus" />
      <span class="text-2xl font-bold text-textInput">1</span>
      <RoundButton icon="plus" />
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