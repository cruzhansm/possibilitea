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
      <RoundButton icon="minus" @click='decreaseAmount()'/>
      <span class="text-2xl font-bold text-textInput">{{ amount }}</span>
      <RoundButton icon="plus" @click='increaseAmount()' />
    </div>
  </div>
</template>

<script>
import RoundButton from "../../Buttons/RoundButton.vue";

export default {
  name: "SelectAmount",
  data() {
    return {
      amount: 1,
    };
  },
  components: {
    RoundButton,
  },
  methods: {
    increaseAmount() {
      this.amount++;
    },
    decreaseAmount() {
      if (this.amount > 1) {
        this.amount--;
      }
    },
  },
};
</script>

<style scoped>
</style>