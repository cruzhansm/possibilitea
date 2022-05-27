<template>
  <div class="h-full w-fit pt-[36px] pb-[30px] pr-8 border-r-[14px] border-[#F5F5F5]">
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
                w-[286px]
                text-center" 
        v-for="item in dashnav"
        :key="item.name"
        :to="item.to"
        active-class="active"
        :class="this.$route.name === item.name ? 'bg-primary text-white' : 'bg-secondary text-textButtons'"
      >
        {{item.name}}
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
import { useStore } from "vuex";
import {computed, reactive, toRefs} from "vue";



export default {
  name: "Sidenav",
  data() {
    return {
      active: String,
      dashnav: [
        {name: "DASHBOARD",to: { name: "dashboard-summary"}},
        {name: "LISTING MANAGEMENT",to: { name: "listing-management" }}
      ]
    };
  },
  components: {
    SecondaryButton,
  },
    setup () {
      const store = useStore();    
      return {
         user: computed(() => store.state.user.data),
      }
    }
   
};
</script>



<style scoped>
.active{
  background-color: #2E7701;
}
</style>