<template>
  <div>
    <div
    class="
      group
      flex
      gap-6
      px-2
      py-1
      rounded-[9px]
      hover:cursor-pointer hover:text-primaryHovered
    "
    @click="redirectBack"
  >
    <font-awesome-icon
      icon="angle-left"
      size="2x"
      class="group-hover:text-primaryHovered text-primary pl-[25px] "
    />
    <span
      class="group-hover:text-primaryHovered text-2xl text-primary font-bold"
      >BACK</span
    >
  </div>

    <h1 class="text-primary text-[40px] font-bold">{{ name }}</h1>
    <h1 class="text-lightgray">Category: {{ category }}</h1>
    <h1 class="text-lightgray">Subcategory: {{ subcategory }}</h1>
    <h1 class="text-lightgray">Price: {{ price }}</h1>
      
  </div>
</template>

<script>
  export default {
    name:"ItemInfo",
    props: {
      category: String, 
      subcategory: String,
      name: String,
      price: Number
    },
    methods: {
    redirectBack() {
      this.$router.go(-1)
    },
  },
  }
</script>

<style lang="scss" scoped>

</style>