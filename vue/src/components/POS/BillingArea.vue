<template>
  <div
    class="
      flex flex-col
      h-[886px]
      w-fit
      pl-8
      pt-2
      pb-[40px]
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
    <PrimaryButton
      text="Confirm"
      :height="60"
      :width="332"
      @click="toggleConfirm"
    />

    <!-- Modal area -->

    <!-- Discount Modal -->
    <Modal v-show="isApplyingDiscount" @close="toggleDiscount">
      <template v-slot:body>
        <div
          class="flex flex-col gap-4 justify-center items-center w-full h-full"
        >
          <span class="text-2xl text-primary font-bold uppercase">
            Discount Authorization
          </span>
          <SecondaryButton
            text="PWD/Senior"
            :height="63"
            :width="368"
            :active="isManualDiscount == false ? true : false"
            @click="isManualDiscount = false"
          />
          <SecondaryButton
            text="Manual percentage"
            :height="63"
            :width="368"
            :active="isManualDiscount"
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
          :height="60"
          :width="172"
          @click="toggleDiscount"
        />
        <PrimaryButton text="Enter" :height="60" :width="172" />
      </template>
    </Modal>

    <!-- Confirmation Modal -->
    <Modal v-show="isConfirmingTransaction" @close="toggleConfirm">
      <template v-slot:body>
        <div class="h-[520px]">
          <div class="font-bold text-[16px]">Date: {{ timestamp }}</div>
          <div class="font-bold text-[16px]">Transaction #: 04162022000001</div>
          <div class="font-bold text-[16px]">Cashier: staffFullName</div>
          <div class="flex flex-row w-100 mt-4">
            <span class="w-[15%] text-[16px] text-center font-bold">Qty</span>
            <span class="w-[50%] text-[16px] font-bold">Item</span>
            <span class="w-[17.5%] text-[16px] text-center font-bold">
              Price
            </span>
            <span class="w-[17.5%] text-[16px] text-center font-bold">
              Total
            </span>
          </div>
          <TransactionItem
            :key="'z' + index"
            v-for="(z, index) in test"
            :first="z == test[0] ? true : false"
          />
          <TransactionSummary />
        </div>
      </template>
      <template v-slot:button-area>
        <SecondaryButton
          text="Cancel"
          :height="60"
          :width="220"
          @click="toggleConfirm"
        />
        <PrimaryButton text="Confirm" :height="60" :width="220" />
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
import TransactionItem from "../Modal/TransactionItem.vue";
import TransactionSummary from "../Modal/TransactionSummary.vue";
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
    TransactionItem,
    TransactionSummary,
    NumberInput,
    TextInput,
  },
  data() {
    return {
      isApplyingDiscount: false,
      isManualDiscount: false,
      isConfirmingTransaction: false,
      timestamp: String,
      /* for demo only */
      test: [0, 1, 2],
    };
  },
  methods: {
    toggleDiscount() {
      this.isApplyingDiscount = !this.isApplyingDiscount;
    },
    toggleConfirm() {
      this.isConfirmingTransaction = !this.isConfirmingTransaction;
      this.isConfirmingTransaction == true ? this.updateTime() : "";
    },
    updateTime() {
      this.timestamp = new Date(Date.now()).toLocaleString();
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