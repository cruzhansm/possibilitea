<template>
  <div class="relative">
    <div
      class="
        flex
        gap-4
        items-center
        text-[#696969] text-[20px]
        hover:cursor-pointer
      "
      @click="dropdown"
    >
      <span>{{ selected }}</span>
      <font-awesome-icon
        icon="angle-down"
        class="transition-transform"
        :class="{ flip: isSelecting }"
      ></font-awesome-icon>
    </div>
    <div class="absolute right-0 w-max h-fit z-50" v-show="isSelecting">
      <DropdownItem
        :key="option"
        v-for="option in options"
        :text="option"
        :selected="selected == option"
        :first="option == options[0] ? true : false"
        :last="option == options[options.length - 1] ? true : false"
        @changeSelect="updateSelection"
      />
    </div>
  </div>
</template>

<script>
import DropdownItem from "./CustomDropdown/DropdownItem.vue";
export default {
  name: "CustomDropdown",
  props: {
    default: String,
    options: Array,
  },
  data() {
    return {
      selected: String,
      isSelecting: false,
    };
  },
  methods: {
    dropdown() {
      this.isSelecting = !this.isSelecting;
    },
    updateSelection(newSelect) {
      this.selected = newSelect;
      this.dropdown();
    },
  },
  components: { DropdownItem },
  mounted() {
    this.selected = this.default;
  },
};
</script>

<style lang="postcss" scoped>
.flip {
  @apply rotate-180 transition-transform;
}
</style>