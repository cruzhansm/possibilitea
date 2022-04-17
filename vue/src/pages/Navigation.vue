<template>
  <div class="flex flex-col justify-center items-center h-max pt-[80px]">
    <div
      class="
        h-[274px]
        w-[423px]
        border border-black
        flex
        justify-center
        items-center
      "
    >
      Logo Here
    </div>
    <div class="text-primary text-2xl font-bold mb-[75px]">{{ userType }}</div>
    <div class="flex flex-col gap-8">
      <router-link :to="{ name: 'pos' }">
        <PrimaryButton text="POS System" :height="97" :width="680" />
      </router-link>
      <PrimaryButton text="Dashboard" :height="97" :width="680" />
      <router-link :to="{ name: 'account-creation' }">
        <PrimaryButton
          text="Account Creation"
          :height="97"
          :width="680"
          v-if="userType == 'ADMIN'"
          router-link
        />
      </router-link>
      <router-link :to="{ name: 'login' }">
        <SecondaryButton text="Log Out" :height="97" :width="680" />
      </router-link>
    </div>
  </div>
</template>

<script>
import PrimaryButton from "../components/Buttons/PrimaryButton.vue";
import SecondaryButton from "../components/Buttons/SecondaryButton.vue";

export default {
  name: "Navigation",
  components: {
    PrimaryButton,
    SecondaryButton,
  },
  computed: {
    userType() {
      /* get the user type from the state once backend is a-ok */
      return "ADMIN";
    },
  },
};
</script>

<style scoped>
</style>