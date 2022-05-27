<template>
  <div>
    
    <div 
    class="
      group
      flex
      w-[20px]
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
  <div class="flex flex-col space-y-4">
    <div class="flex flex-row justify-even items-start ml-[150px] mt-8">
      <img :src="img_path" :alt="img_path" class="w-[411px] h-[381px] rounded-[9px] m-2 mr-8"/>

      <div>
        <h1 class="text-primary text-[40px] font-bold">{{ name }}</h1>
        <p class="text-lightgray">Category: {{ category }}</p>
        <p class="text-lightgray">Subcategory: {{ subcategory }}</p>
        <p class="text-primary text-[24px] font-semibold pt-2">P{{ price }}.00</p>

        <!-- display edit/delete button if user is admin otherwise hidden -->
        <div v-if="user === 'ADMIN'" class="flex flex-row space-x-4 mt-6 ">
            <button 
            @click="$router.push({name: 'edit', params: { id:id, category:category, name:name, price:price, subcategory:subcategory, img_path:img_path },})"
            class="w-[172px] h-[47px] text-[24px] bg-primary text-buttonText rounded-[9px] hover:bg-primaryHovered transition ease-in-out delay-[65]">EDIT</button>
            <button 
            @click="deleteItem"
            class="w-[172px] h-[47px] text-[24px] bg-primary text-buttonText rounded-[9px] hover:bg-primaryHovered transition ease-in-out delay-[65]">DELETE</button>
        </div>

      </div>
    </div>
      
      <!-- Product Statistics -->
    <div class="flex flex-row"> 
        
        <div class="mt-16 ml-[140px] mr-[60px]">
          <Linechart></Linechart>
        </div>

        <div>
          <Doughnut class="mt-[100px] mr-[250px]"></Doughnut>
        </div>

    </div>
  </div>


  </div>

</template>

<script>
  import Linechart from "../../components/Dashboard/Listing/Linechart.vue";
  import Doughnut from "../../components/Dashboard/Listing/Doughnut.vue";
  export default {
    name:"ItemInfo",
    data() {
      return {
        user: '',
      }
    },
    components: {
      Doughnut, Linechart
    },
    props: {
      id:Number,
      img_path:String,
      category: String, 
      subcategory: String,
      name: String,
      price: String
    },
    methods: {
    redirectBack() {
        this.$router.push({name: 'listing-management'});
    },
    deleteItem(item){
      //delete item from the database
      if(confirm("Are you sure you want to delete this item?")){
         this.$store.dispatch("deleteItem", this.id).then(() => {
          this.$router.push({
            name: "listing-management",
          });
        });
      }
    }
  },
    mounted () {
      this.user = this.$store.state.user.data.role;
    }
  }
</script>

<style lang="scss" scoped>

</style>