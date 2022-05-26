<template>
  <div class="flex flex-col h-full w-full">
    <div class="h-full w-full">
      <router-view></router-view>
    </div>
    <Selects />
  </div>
</template>

<script>
import Selects from "./Selection/Selects.vue";

export default {
  name: "ItemSelection",
  data() {
    return {
      item: {},
    };
  },
  components: {
    Selects,
  },
};
</script>
