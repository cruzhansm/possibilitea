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
          p
          relative
          flex flex-col
          gap-5
          h-fit
          w-fit
          p-[30px]
          bg-white
          rounded-[9px]
        "
      >
        <div
          class="
            rounded-full
            px-2
            py-0.5
            h-fit
            w-fit
            ml-auto
            hover:bg-divider hover:cursor-pointer
          "
          @click="$emit('close')"
        >
          <font-awesome-icon icon="xmark"></font-awesome-icon>
        </div>
        <div
          class="max-h-[520px] max-w-[458px] overflow-scroll overflow-x-hidden"
        >
          <slot name="body"></slot>
        </div>
        <div class="flex flex-row justify-between h-fit w-full">
          <slot name="button-area" class=""></slot>
        </div>
      </div>
    </div>
  </transition>
</template>

<script>
export default {
  name: "Modal",
  emits: ["close"],
};
</script>

<style lang="postcss" scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

::-webkit-scrollbar {
  @apply w-[5px];
}

::-webkit-scrollbar-thumb,
::-webkit-scrollbar-thumb:hover {
  @apply bg-divider rounded-lg;
}
</style>