<template>
  <div>
    
    <div 
    class="
      group
      flex
      gap-6
      px-2
      py-1
      w-[20px]
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
  <div class="flex flex-col space-y-4">
    <div class="flex flex-row justify-even items-start ml-[150px] mt-8">

      <div class="flex flex-col space-y-2 ">
          <div src="" alt="" class="w-[411px] h-[381px] bg-secondary rounded-[9px] m-2 mr-8"></div>
          <button class="bg-primary w-[174px] h-[47px] text-buttonText text-textButtons rounded-[9px] ml-2 hover:bg-primaryHovered">UPLOAD</button>
      </div>

      
      
      <div>
        <!-- Input Product Detail -->
        <form action="">
          <!-- <label for="itemName" class="text-primary text-[20px] font-semibold">Item Name</label>
          <input  id="itemName" 
                  type="text" 
                  class="  
                  pl-5
                  py-[14px]
                  h-[47px]
                  w-[374px]
                  bg-inputField
                  rounded-[9px]
                  text-inputText
                  outline-none
                  pr-12"> -->
          <TextInput
            title="Item Name"
            :focus="true"
            errorAlign="left"
            :errorText="'Empty field'"
          ></TextInput>

          <CustomDropdown
            title="Category"
            :default="'SELECT CATEGORY'" 
            :options="options"
          ></CustomDropdown>

          <CustomDropdown
            title="Subcategory"
            :default="'SELECT SUBCATEGORY'" 
            :options="options"
          ></CustomDropdown>

          <TextInput
            title="SubCategory"
            :focus="true"
            errorAlign="left"
            :errorText="'Empty field'"
          ></TextInput>

          <TextInput
            title="Price"
            :focus="true"
            errorAlign="left"
            :errorText="'Empty field'"
          ></TextInput>

          <label for="category"></label>
        </form>

      </div>

    </div>
      
  </div>


  </div>

</template>

<script>
  import TextInput from "../../components/Input/TextInput.vue";
  import CustomDropdown from "../../components/Input/CustomDropdown.vue";

  export default {
    name:"ItemInfo",
    data() {
      return {
        user: 'admin',
        options: null
      }
    },
    components: {
      TextInput,
      CustomDropdown
    },
    props: {
      category: String, 
      subcategory: String,
      name: String,
      price: String
    },
    mounted () {
      let foodCategory = this.$store.state.categories.filter(
        (f) => f.category == "Food"
      );

      let drinkCategory = this.$store.state.categories.filter(
        (f) => f.category == "Drinks"
      );

      let category = foodCategory.concat(drinkCategory);

      this.options = category.map( function getCat(item){
        return item.name;
      });
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