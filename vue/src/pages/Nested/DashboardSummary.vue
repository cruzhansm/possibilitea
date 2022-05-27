<template>
  <div>
    <div class="flex items-center gap-7 mb-[56px]">
      <MiniStats title="Today's Orders" :stat="stat_x" />
      <MiniStats title="Today's Revenue" :type="'currency'" :stat="stat_y" />
      <MiniStats title="Monthly Total Orders" :stat="stat_z" />
      <MiniStats
        title="Monthly Total Revenue"
        type="currency"
        :stat="stat_w"
      />
    </div>
    <TransactionHistory />
  </div>
</template>

<script>
import TransactionHistory from "../../components/Dashboard/Summary/TransactionHistory.vue";
import MiniStats from "../../components/Dashboard/Summary/MiniStats.vue";
export default {
  name: "DashboardSummary",
  data() {
    return {
      stat_one: 0,
      stat_two: 0.00,
      stat_three: 1,
      stat_four: 1200.00,
      stat_w: 0,
      stat_x: 0,
      stat_y: 0,
      stat_z: 0,
    };
  },
  components: { MiniStats, TransactionHistory },
  computed: {
   
  },
  mounted () {
    while (this.stat_x < this.stat_one) {
      this.stat_x += 1;
    }
    while (this.stat_y < this.stat_two) {
      this.stat_y += 1;
    }
    while (this.stat_z < this.stat_three) {
      this.stat_z += 1;
    }
      while (this.stat_w < this.stat_four) {
        this.stat_w += 1.00;
      }
  },
};
</script>

<style lang="postcss" scoped>
</style>