<template>
  <div class="flex flex-col w-fit h-fit">
    <span class="text-2xl text-primary font-bold">Hot/Cold</span>
    <div
      class="p flex flex-row justify-center items-center gap-[15px] border-2 border-divider w-fit h-fit p-[20px] rounded-xl"
    >
      <RoundButton @click="$emit('temp','Hot')" text="Hot" />
      <RoundButton @click="$emit('temp','Cold')" text="Cold" />
    </div>
  </div>
</template>

<script>
import RoundButton from "../../Buttons/RoundButton.vue";

export default {
  name: "SelectTemperature",
  components: {
    RoundButton,
  },
};
</script>
