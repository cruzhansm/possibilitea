<template>
  <div class="h-ful w-fit pt-[36px] pb-[30px] pr-8">
    <div class="flex flex-col gap-4">
      <router-link :to="{ name: 'dashboard-summary' }">
        <SecondaryButton
          text="Summary"
          :height="78"
          :width="270"
          :hover="'primary'"
          :active="false"
        />
      </router-link>
      <router-link :to="{ name: 'listing-management' }">
        <SecondaryButton
          text="Listing Management"
          :height="78"
          :width="270"
          :hover="'primary'"
          :active="false"
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
  name: "Sidenav",
  data() {
    return {
      active: String,
    };
  },
  components: {
    SecondaryButton,
  },
};
</script>

<style scoped>
</style>