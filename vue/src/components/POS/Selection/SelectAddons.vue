<template>
  <div class="flex flex-col w-fit h-fit">
    <span class="text-2xl text-primary font-bold">Size</span>
    <div
      class="
        flex flex-row flex-wrap
        gap-2
        border-2 border-divider
        w-[376px]
        h-fit
        p-[10px]
        rounded-xl
      "
    >
      <SecondaryButton
        :key="index"
        v-for="(addon, index) in addons"
        :text="addon"
        :height="50"
        :width="82"
        :fontSize="16"
        :color="'black'"
        :hover="'primary'"
      ></SecondaryButton>
    </div>
  </div>
</template>

<script>
import SecondaryButton from "../../Buttons/SecondaryButton.vue";

export default {
  name: "SelectAddons",
  components: {
    SecondaryButton,
  },
  computed: {
    addons() {
      return this.$store.state.addons;
    },
  },
};
</script>

<style scoped>
</style>