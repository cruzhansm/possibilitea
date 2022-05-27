<template>
  <div class="absolute-top flex justify-between items-center h-[77px] min-h-[77px] w-full">
    <Navback />
    <DateTime />
    <span class="text-2xl text-primary font-bold">{{user.username}}</span>
  </div>
</template>

<script>
import { computed, reactive, toRefs } from 'vue'
import { useStore } from 'vuex'
import Navback from "./Navback.vue"
import DateTime from "./DateTime.vue"

export default {
  name: "Navbar",
  components: {
    Navback,
    DateTime,
  },
  setup () {
    const store = useStore();

    return {
      user: computed(() => store.state.user.data),
    }
  }
}
</script>

<style scoped>

</style>