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
    @click="redirectBack(id)"
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
          <img v-if="item.image" :src="item.image" :alt="item.name">
          <span v-else class="w-[411px] h-[381px] bg-secondary rounded-[9px] m-2 mr-12"></span>
         
          <button class="bg-primary w-[174px] h-[47px] text-buttonText text-textButtons rounded-[9px] ml-2 hover:bg-primaryHovered relative">
            <input type="file" class="absolute left-0 right-0 top-0 bottom-0 opacity-0 cursor-pointer">
            UPLOAD
          </button>
      </div>

      
      
      <div>
        <!-- Input Product Detail -->
        <form action="" @submit.prevent="saveItem" class="flex flex-col space-y-4">
          <TextInput
            @update="getName"
            title="Item Name"
            :default="name"
            :focus="true"
            errorAlign="left"
            :errorText="'Empty field'"
          ></TextInput>

          <CustomDropdown
            @changeSelect="getCategory"
            title="Category"
            :default="category ? category : 'Select Category'" 
            :options="categories"
            background="inputField"
            :width= 374
            :disabled="false"
          ></CustomDropdown>

          <CustomDropdown
            @changeSelect="getSubcategory"
            title="Subcategory"
            :default="subcategory ? subcategory : 'Select Subcategory'" 
            :options="subcategories"
            background="inputField"
            :width= 374
            :disabled="true"
          ></CustomDropdown>

          
          <NumberInput
           @changeNumber="getPrice"
            :default="price"
            title="Price"
            color="'inputText'"
            :height= 47
            :width= 199
            align="'left"
            :disabled="false"
          ></NumberInput>

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
            @click="saveItem"
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
        item: Array,
        form: {
          item_name: '',
          subcat_id: '',
          itemCat_id: '',
          price: '',
          img_path: 'image.png',
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
      id:Number,
      category: String, 
      subcategory: String,
      name: String,
      price: Number
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
    saveItem(){
      this.$store.dispatch('saveItem', this.form);
    },

    getCategory(value){
      this.form.subcat_id = this.$store.state.subcategoryList.filter(function(item){
        return item.name == value          
        })[0].id;
      
        this.$store.state.categories.map((item) => {
          if (item.name == value) {
            this.subcategories = Object.getOwnPropertyNames(item.items);
            }
        });

    },

    getSubcategory(value){
      // this.form.selectedSubcategory = value;
      this.form.itemCat_id = this.$store.state.itemCategoryList.filter(function(item){
        return item.name == value          
        })[0].id;

    },

    getName(value){
      this.form.item_name = value;
    },

    getPrice(value){
      this.form.price = value;
    },
    
    redirectBack(id) {
      if(id === undefined){
        this.$router.go(-1)
      }else{
        this.$router.push({ name: 'info', params: {  id:this.id, category: this.category, subcategory:this.subcategory, name:this.name , price:this.price } })
      }
    },
  },
  }
</script>

<style lang="scss" scoped>

</style>