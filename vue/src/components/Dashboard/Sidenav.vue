<template>
  <div class="h-ful w-fit pt-[36px] pb-[30px] pr-8">
    <div class="flex flex-col gap-4">
      <router-link 
        class="flex
              justify-center
              items-center
              bg-secondary
              rounded-[9px]
              text-textButtons text-buttonText
              font-bold
              hover:cursor-pointer
              hover:bg-primary
              h-[78px]
              w-[270px]
              text-center"
       active-class="active"
       :to="{ name: 'dashboard-summary' }"> SUMMARY
      </router-link>

      <router-link 
        class="flex
              justify-center
              items-center
              bg-secondary
              rounded-[9px]
              text-textButtons text-buttonText
              font-bold
              hover:cursor-pointer
              hover:bg-primary
              h-[78px]
              w-[270px]
              text-center"
       active-class="active"
       :to="{ name: 'listing-management' }"> LISTING MANAGEMENT
      </router-link>

        <SecondaryButton
          text=" "
          :height="0"
          :width="0"
          :hover="'primary'"
          :active="false"
        />

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
.active{
  background-color: #2E7701;
}
</style>