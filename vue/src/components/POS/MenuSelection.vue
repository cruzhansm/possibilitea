<template>
  <div
    class="h-[886px] w-fit pt-[25px] pb-[30px] pr-8 border-r-[6px] border-divider"
  >
    <div class="flex flex-col gap-2 mb-4">
      <span class="text-2xl text-primary font-bold">Food</span>
      <router-link
        :key="index"
        v-for="(fd, index) in food"
        :to="{
          name: 'menu',
          params: { category: `${fd.name}`.toLowerCase() },
        }"
        @click="
          food.map((f) => {
            if (f.active == true) f.active = false;
          });
          fd.active = !fd.active;
        "
      >
        <SecondaryButton
          :text="fd.name"
          :height="68"
          :width="286"
          :hover="'primary'"
          :active="fd.active"
        />
      </router-link>
    </div>

    <div class="flex flex-col gap-2">
      <span class="text-2xl text-primary font-bold">Drinks</span>
      <router-link
        :key="index"
        v-for="(drink, index) in drinks"
        :to="{
          name: 'menu',
          params: { category: `${drink.name}`.toLowerCase() },
        }"
        @click="
          drinks.map((d) => {
            if (d.active == true) d.active = false;
          });
          drink.active = !drink.active;
        "
      >
        <SecondaryButton
          :text="drink.name"
          :height="68"
          :width="286"
          :hover="'primary'"
          :active="drink.active"
        />
      </router-link>
    </div>
  </div>
</template>

<script>
/* PLAN FOR ACTIVE MENU SELECTION STATE MGMT
 * ADD MUTATION AND ACTION METHODS TO STORE
 * FOR @CLICK, CALL A METHOD
 * IN THAT METHOD, CALL THE ACTION THAT WILL CALL THE MUTATION
 */


import SecondaryButton from "../Buttons/SecondaryButton.vue";

export default {
  name: "MenuSelection",
  data() {
    return {
      food: Array,
      drinks: Array,
      active: String,
    };
  },
  components: {
    SecondaryButton,
  },
  mounted() {
    this.food = this.$store.state.categories.filter(
      (c) => c.category == "Food"
    );
    this.drinks = this.$store.state.categories.filter(
      (c) => c.category == "Drinks"
    );
  },
};
</script>

<style scoped>
</style>