<template>
  <div class="flex items-center gap-7">
    <MiniStats title="Today's Orders" stat="84" />
    <MiniStats title="Today's Revenue" type="currency" stat="2,560.00" />
    <MiniStats title="Monthly Total Orders" stat="457" />
    <MiniStats title="Monthly Total Revenue" type="currency" stat="10,203.00" />
  </div>
</template>

<script>
import MiniStats from "../../components/Dashboard/Summary/MiniStats.vue";
export default {
  name: "DashboardSummary",
  components: { MiniStats },
};
</script>

<style lang="postcss" scoped>
</style>