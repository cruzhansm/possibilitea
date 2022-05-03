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


      <div  v-if="user === 'admin'" class="flex flex-row justify-end pr-[40px]">
            <button 
            class="
                w-[212px] 
                h-[47px] 
                text-[24px] 
                bg-primary 
                text-buttonText 
                rounded-[9px] 
                hover:bg-primaryHovered 
                transition 
                ease-in-out 
                delay-[65]
            ">
              + ADD LISTING
            </button>
      </div>

  </div>

  <div class="flex flex-col gap-5 pl-[30px] pr-5 pt-5 ">
    <ListRow
      :key="name"
      v-for="(row, name) in category"
      :items="row"
      :category="cat"
      :subcategory="name"
    />
  </div>

</div>
</template>

<script>
import ListRow from "../../components/Dashboard/Listing/ListRow.vue";

export default {
  name: "ItemList",
  data(){
    return{
      cat:"",
      user: "admin"
    }
  },
  components: {
    ListRow,
  },
 methods: {
    redirectBack() {
      this.$router.push({ name: "listing-management" });
    },
  },
  mounted () {
    this.cat = this.$route.params.category;
  },
  computed: {
    category() {
      /* get all items that are in this category */
      const menu = this.$store.state.categories.filter(
        (c) => c.name.toUpperCase() == this.$route.params.category.toUpperCase()
      )[0].items;

      return menu;
    },
  },
};
</script>

<style scoped>
</style>