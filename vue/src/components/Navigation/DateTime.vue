<template>
  <div class="flex flex-row gap-2">
    <span class="font-bold text-2xl">{{ date }}</span>
    <span class="font-bold text-2xl"> {{ time }} </span>
  </div>
</template>

<script>
export default {
  name: "DateTime",
  data() {
    return {
      time: String,
    };
  },
  computed: {
    date() {
      const day = new Date(Date.now()).toLocaleDateString("en-us", {
        day: "numeric",
        month: "numeric",
        year: "numeric",
      });
      return day;
    },
  },
  methods: {
    updateTime() {
      this.time = new Date(Date.now()).toLocaleTimeString();
    },
  },
  mounted() {
    this.time = new Date(Date.now()).toLocaleTimeString();
    setInterval(() => {
      this.updateTime();
    }, 1000);
  },
};
</script>

<style scoped>
</style>