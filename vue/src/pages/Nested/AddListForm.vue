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
  <div class="flex flex-col space-y-6">
    <div class="flex flex-row justify-even items-start ml-[150px] mt-8">

      <div class="flex flex-col space-y-2 ">
          <div src="" alt="" class="w-[411px] h-[381px] bg-secondary rounded-[9px] m-2 mr-12"></div>
          <button class="bg-primary w-[174px] h-[47px] text-buttonText text-textButtons rounded-[9px] ml-2 hover:bg-primaryHovered">UPLOAD</button>
      </div>

      
      
      <div>
        <!-- Input Product Detail -->
        <form action="" class="flex flex-col space-y-4">
          <TextInput
            @update="getName"
            title="Item Name"
            :focus="true"
            errorAlign="left"
            :errorText="'Empty field'"
          ></TextInput>

          <CustomDropdown
            @changeSelect="getCategory"
            title="Category"
            :default="'Select Category'" 
            :options="categories"
            background="inputField"
            :width= 374
            :disabled="false"
          ></CustomDropdown>

          <CustomDropdown
            @changeSelect="getSubcategory"
            title="Subcategory"
            :default="form.selectedSubcategory" 
            :options="subcategories"
            background="inputField"
            :width= 374
            :disabled="true"
          ></CustomDropdown>

          
          <NumberInput
           @changeNumber="getPrice"
            title="Price"
            color="'inputText'"
            :height= 47
            :width= 199
            align="'left"
            :disabled="false"
          ></NumberInput>
          <!-- <span class="text-inputText w-[40px] h-[47px] bg-inputField rounded-[9px] text-">P</span> -->

          <div class="flex flex-row space-x-8 pt-2">

          <SecondaryButton
            text="CANCEL"
            :height= 47
            :width= 173.93
            :fontSize= 24
            color="text-buttonText"
            hover="secondaryHovered"
            :active= "'true'"
            class="font-normal"
          ></SecondaryButton>

          <PrimaryButton
            text="SAVE"
            :height= 47
            :width= 173.93
            :fontSize= 24
            color="text-buttonText"
            hover="primaryHovered"
            class="font-normal"
          ></PrimaryButton>
          

          </div>

        </form>

      </div>

    </div>
      
  </div>


  </div>

</template>

<script>
  import TextInput from "../../components/Input/TextInput.vue";
  import CustomDropdown from "../../components/Input/CustomDropdown.vue";
  import NumberInput from "../../components/Input/NumberInput.vue";
  import PrimaryButton from "../../components/Buttons/PrimaryButton.vue";
  import SecondaryButton from "../../components/Buttons/SecondaryButton.vue";

  export default {
    name:"ItemInfo",
    data() {
      return {
        user: 'admin',
        form: {
          name: '',
          selectedCategory: '',
          selectedSubcategory: 'Select Subcategory',
          price: '',
          image: '',
        },        
        categoryArr:null,
        categories: null,
        subcategories: null,
      }
    },
    components: {
      TextInput,
      CustomDropdown,
      NumberInput,
      PrimaryButton,
      SecondaryButton
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

      let categoryArr = foodCategory.concat(drinkCategory);

      this.categories = categoryArr.map( function getCat(item){
        return item.name;
      });

    },  
    methods: {
    getCategory(value){
      this.form.selectedSubcategory = 'Select Subcategory';
      this.form.selectedCategory = value;
          this.$store.state.categories.map((item) => {
              if (item.name == value) {
                  this.subcategories = Object.getOwnPropertyNames(item.items);
              }
          });
    },

    getSubcategory(value){
      this.form.selectedSubcategory = value;
    },

    getName(value){
      this.form.name = value;
    },

    getPrice(value){
      this.form.price = value;
    },
    
    redirectBack() {
      this.$router.go(-1)
    },
  },
  }
</script>

<style lang="scss" scoped>

</style>