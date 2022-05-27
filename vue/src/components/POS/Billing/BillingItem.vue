<template>
  <div class="flex flex-row w-full h-fit max-w-fit justify-between items-start">

    <font-awesome-icon  @click="this.$emit('deleteCart',item.id)"
      icon="x"
      class="text-primary text-[16px] hover:cursor-pointer"
    ></font-awesome-icon>

    <div class="flex flex-col h-fit w-full ml-5 mr-3">
      <span class="text-[16px] leading-tight mb-1 text-inputText font-bold">
        {{ `${item.quantity}x ${item.category} ${item.item_name}` }}
      </span>
      <span v-if="item.size && item.sugar" class="text-[14px] leading-tight text-[#696969] font-bold">{{
        `${item.size}, ${item.sugar}`
      }}</span>
      <span v-if="item.adds" class="text-[14px] leading-tight text-[#696969] font-bold">
        {{ `${item.adds}` }}
      </span>
    </div>
    <span class="text-primary text-[16px] font-bold leading-tight">₱{{ item.price}}.00</span>

  </div>
</template>

<script>
export default {
  name: "BillingItem",
  data() {
    return {
      form: {
        user_id: this.$store.state.user.data.id,
        item_id: this.item.id,
      },
    };
  },
  props: {
    item: Object,
  },

  methods: {
    deleteItem(id) {
      this.$store.dispatch("deleteCartItem", id);
    },
  },
};
</script>

<style scoped>
</style>