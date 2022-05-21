<template>
  <div>
  <label class="text-primary text-textInput font-semibold">
    {{ title }}
  </label>
  <div class="relative">
    <div
      class="
        h-[47px]
        w-[374px]
        gap-4
        items-center
        text-[#696969] text-[20px]
        hover:cursor-pointer
        rounded-[9px]
        pr-[19px]
        pl-[19px]
        flex
        justify-between
      "

      :class="['bg-' + background]"
      :style="{ width: width + 'px'}"
      :disabled="disable"
      @click="dropdown"
    >
      <span>{{ selected }}</span>
      <font-awesome-icon
        icon="angle-down"
        class="transition-transform"
        :class="{ flip: isSelecting }"
      ></font-awesome-icon>
    </div>
    <div class="absolute left-0 w-max h-fit z-50" v-show="isSelecting">
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
  </div>
</template>

<script>
import DropdownItem from "./CustomDropdown/DropdownItem.vue";
export default {
  name: "CustomDropdown",
  props: {
    title: String,
    default: String,
    options: Array,
    background: String,
    width: Number,
    disabled: Boolean,
  },
  data() {
    return {
      selected: String,
      isSelecting: false,
    };
  },
  computed: {
    disable() {
      if (this.disabled == true) {
        this.num = "";
      }

      return this.disabled;
    },
  },
  methods: {

    dropdown() {
      this.isSelecting = !this.isSelecting;
    },
    updateSelection(newSelect) {
      this.selected = newSelect;
      this.$emit("changeSelect", newSelect);
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