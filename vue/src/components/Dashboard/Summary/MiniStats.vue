<template>
  <div
    class="
      flex flex-col
      justify-center
      items-center
      gap-4
      w-[324px]
      h-[155px]
      bg-verylightgray
      rounded-[9px]
    "
  >
    <span class="text-xl font-bold">{{ title }}</span
    >
    
    <span class="text-5xl text-primary font-bold">
       <span class="flex flex-row"><span v-if="type == 'currency'" class="text-[40px] mr-1">₱ </span> <number :number="stat"></number></span>
       
    </span>
    
  </div>
</template>

<script>
import number from "./AnimatedNumber.vue"
export default {
  name: "MiniStats",
  components: {
    number
  },
  props: {
    stat: Number,
    title: String,
    type: String,
  },
};
</script>

<style lang="postcss" scoped>
</style>