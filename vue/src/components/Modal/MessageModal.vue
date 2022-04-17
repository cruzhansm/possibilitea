<template>
  <transition name="fade">
    <div
      class="
        absolute
        flex
        justify-center
        pt-[140px]
        w-screen
        h-screen
        left-0
        top-0
        bg-opacity-50 bg-[#CCCCCC]
      "
    >
      <div
        class="
          relative
          flex flex-col
          gap-5
          h-fit
          w-fit
          p-[30px]
          bg-white
          rounded-[9px]
          font-semibold
          uppercase
        "
      >
        {{ message }}
      </div>
    </div>
  </transition>
</template>

<script>
export default {
  name: "MessageModal",
  props: {
    message: String,
  },
};
</script>

<style lang='postcss' scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
