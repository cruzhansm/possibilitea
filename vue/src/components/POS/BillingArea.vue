<template>
  <div
    class="
      flex flex-col
      h-full
      w-fit
      pl-8
      pt-5
      pb-[30px]
      gap-y-[10px]
      border-l-[6px] border-divider
    "
  >
    <span class="text-2xl text-primary font-bold">Bill</span>
    <Divider />
    <BillingItems :items="items" />
    <Divider />
    <BillingTotal />
    <PrimaryButton
      text="Apply Discount"
      :height="60"
      :width="332"
      @click="toggleDiscount"
    />
    <BillingAmount />
    <PrimaryButton text="Confirm" :height="60" :width="332" />

    <!-- Modal area -->
    <Modal v-show="isApplyingDiscount" @close="toggleDiscount">
      <template v-slot:body>
        <div
          class="flex flex-col gap-4 justify-center items-center w-full h-full"
        >
          <span class="text-2xl text-primary font-bold uppercase"
            >Discount Authorization</span
          >
          <SecondaryButton
            text="PWD/Senior"
            :height="63"
            :width="368"
            @click="isManualDiscount = false"
          />
          <PrimaryButton
            text="Manual percentage"
            :height="63"
            :width="368"
            @click="isManualDiscount = true"
          />
          <div
            class="relative mb-[40px]"
            :class="isManualDiscount == true ? '' : 'opacity-50'"
          >
            <NumberInput
              color="black"
              :height="47"
              :width="100"
              align="left"
              :disabled="isManualDiscount == true ? false : true"
            />
            <span class="absolute top-1/4 right-2 font-bold">%</span>
          </div>
        </div>
        <TextInput
          title="Password"
          errorAlign="left"
          errorText="Wrong password."
          :focus="false"
          :height="47"
          :width="365"
        />
      </template>
      <template v-slot:button-area>
        <SecondaryButton
          text="Cancel"
          :height="47"
          :width="172"
          @click="toggleDiscount"
        />
        <PrimaryButton text="Enter" :height="47" :width="172" />
      </template>
    </Modal>
  </div>
</template>

<script>
import PrimaryButton from "../Buttons/PrimaryButton.vue";
import SecondaryButton from "../Buttons/SecondaryButton.vue";
import Divider from "../Utilities/Divider.vue";
import BillingItems from "./Billing/BillingItems.vue";
import BillingTotal from "./Billing/BillingTotal.vue";
import BillingAmount from "./Billing/BillingAmount.vue";
import Modal from "../Modal/Modal.vue";
import NumberInput from "../Input/NumberInput.vue";
import TextInput from "../Input/TextInput.vue";

export default {
  name: "BillingArea",
  components: {
    PrimaryButton,
    SecondaryButton,
    Divider,
    BillingItems,
    BillingTotal,
    BillingAmount,
    Modal,
    NumberInput,
    TextInput,
  },
  data() {
    return {
      isApplyingDiscount: false,
      isManualDiscount: false,
      isConfirmingTransaction: false,
    };
  },
  methods: {
    toggleDiscount() {
      this.isApplyingDiscount = !this.isApplyingDiscount;
    },
  },
  computed: {
    items() {
      return this.$store.state.cart;
    },
  },
};
</script>

<style scoped>
</style>