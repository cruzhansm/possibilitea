<template>
<div>
  
  <div class="flex flex-row justify-between">

      <div class="
        group
        flex
        gap-6
        px-2
        py-1
        rounded-[9px]
        hover:cursor-pointer 
        hover:text-primaryHovered"
        @click="redirectBack">
      <font-awesome-icon
        icon="angle-left"
        size="2x"
        class="group-hover:text-primaryHovered text-primary pl-[25px]"/>
      <span class="group-hover:text-primaryHovered text-2xl text-primary font-bold">BACK</span>
      </div>


      <div class="flex flex-row justify-end pr-[40px]">
           <AddListButton  v-if="user === 'ADMIN'"></AddListButton>
      </div>

  </div>

  
  <div class="flex flex-col gap-5 pl-[30px] pr-5 pt-5 ">
    <ListRow
      :key="cat.id"
      v-for="cat in category"
      :subcategory="cat.itemcat_name"
      :subcat_id="cat.id"
      :items="cat.items"
    />
    <!-- <ListRow
      :key="name"
      v-for="(row, name) in category"
      :items="row"
      :category="cat"
      :subcategory="name"
    /> -->
  </div>

</div>
</template>

<script>

import AddListButton from "../../components/Buttons/AddListingButton.vue" 
import ListRow from "../../components/Dashboard/Listing/ListRow.vue";

export default {
  name: "ItemList",
  data(){
    return{
      user:""
    }
  },
  components: {
    ListRow, AddListButton
  },
  computed: {
    category() {
      return this.$store.state.itemCategoryList.data;
    }
  },
 methods: {
   redirectBack() {
     this.$router.push({ name: "listing-management" });
    },
  },
  // mounted () {
    // this.$store.dispatch("loadItemcategory", this.$route.params.id);
    
  // },

    mounted: function () {
      this.user = this.$store.state.user.data.role;
    }
};
</script>

<style scoped>
</style>