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
    <!-- Product Info -->
    <div class="flex flex-row justify-even items-start ml-[150px] mt-8">
      <div src="" alt="" class="w-[411px] h-[381px] bg-secondary rounded-[9px] m-2 mr-8"></div>

      <div>
        <h1 class="text-primary text-[40px] font-bold">{{ name }}</h1>
        <p class="text-lightgray">Category: {{ category }}</p>
        <p class="text-lightgray">Subcategory: {{ subcategory }}</p>
        <p class="text-primary text-[24px] font-semibold pt-2">P{{ price }}.00</p>
      </div>
    </div>
      
      <!-- Product Statistics -->
    <div class="">
        <!-- insert line graph here -->

        

        <!-- insert doughnut graph here -->



    </div>

  </div>

</template>

<script>
  export default {
    name:"ItemInfo",
    data() {
      return {
        user: 'staff'
      }
    },
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