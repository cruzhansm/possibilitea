<template>
  <div class="flex gap-4">
    <PaginationButton text="Prev" @prev="goBack" />
    <PaginationPage
      :key="n"
      v-for="n in pages"
      :page="n"
      :selected="n == currentPage ? true : false"
      @updatePage="updateCurrent"
    />
    <PaginationButton text="Next" @next="goForward" />
  </div>
</template>

<script>
import PaginationPage from "./PaginationPage.vue";
import PaginationButton from "./PaginationButton.vue";
export default {
  name: "PaginationController",
  components: { PaginationButton, PaginationPage },
  props: {
    pages: Number,
  },
  data() {
    return {
      currentPage: 1,
    };
  },
  methods: {
    updateCurrent(newPage) {
      this.currentPage = newPage;
    },
    goBack() {
      if (this.currentPage > 1 && this.currentPage <= this.pages) {
        --this.currentPage;
      }
    },
    goForward() {
      if (this.currentPage >= 1 && this.currentPage < this.pages) {
        ++this.currentPage;
      }
    },
  },
};
</script>

<style lang="postcss" scoped>
</style>