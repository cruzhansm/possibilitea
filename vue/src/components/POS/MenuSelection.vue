<template>
  <div
    class="h-ful w-fit pt-[20px] pb-[30px] pr-8 border-r-[6px] border-divider"
  >
    <div class="flex flex-col gap-2 mb-4">
      <span class="text-2xl text-primary font-bold">Food</span>
      <SecondaryButton
        v-for="(category, index) in food"
        :key="index"
        :text="category"
        :height="78"
        :width="286"
        :hover="'primary'"
      />
    </div>

    <div class="flex flex-col gap-2">
      <span class="text-2xl text-primary font-bold">Drinks</span>
      <SecondaryButton
        v-for="(category, index) in drinks"
        :key="index"
        :text="category"
        :height="78"
        :width="286"
        :hover="'primary'"
      />
    </div>
  </div>
</template>

<script>
import SecondaryButton from "../Buttons/SecondaryButton.vue";

export default {
  name: "MenuSelection",
  data() {
    return {
      food: Array,
      drinks: Array,
    };
  },
  components: {
    SecondaryButton,
  },
  mounted() {
    this.food = this.$store.state.categories.food;
    this.drinks = this.$store.state.categories.drinks;
  },
};
</script>

<style scoped>
</style>