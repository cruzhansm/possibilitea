<template>
  <div class="flex flex-col justify-center items-center">
    <div class="w-full h-fit px-6"><Navbar /></div>
    <div
      class="
        flex
        justify-center
        items-center
        w-full
        h-full
        border-t-[6px] border-divider
        pt-10
      "
    >
      <div
        class="
          flex flex-col
          justify-center
          items-center
          border-2 border-divider-400
          rounded-xl
          px-[45px]
          py-14
          gap-[50px]
          w-fit
        "
      >
        <span class="text-[32px] text-primary font-bold">Account Creation</span>
        <form action="" @submit.prevent class="flex flex-col gap-7">
          <TextInput
            title="Username"
            errorAlign="left"
            errorText="Empty field."
            @update="updateUsername"
          />
          <TextInput
            title="First Name"
            errorAlign="left"
            errorText="Empty field."
            @update="updateFname"
          />
          <TextInput
            title="Last Name"
            errorAlign="left"
            errorText="Empty field."
            @update="updateLname"
          />
          <PasswordInput
            title="Password"
            errorAlign="left"
            errorText="Empty field."
            @update="updatePassword"
          />
          <PasswordInput
            title="Confirm Password"
            errorAlign="left"
            errorText="Empty field."
            @update="updateCpassword"
          />
          <div class="mt-4">
            <PrimaryButton
              type="submit"
              text="Proceed"
              :width="374"
              :height="47"
              @click="toggleCreation"
            />
          </div>
        </form>
      </div>
    </div>
    <!-- Modal area -->
    <Modal v-show="isConfirmingCreation" @close="toggleCreation">
      <template v-slot:body>
        <div class="flex flex-col items-center w-full gap-2">
          <span
            class="text-xl text-primary font-bold w-full text-center uppercase"
            >Account Details</span
          >
          <div class="flex justify-between w-[200px]">
            <div class="flex flex-col gap-2">
              <span class="text-sm text-[#696969] font-bold">Username</span>
              <span class="text-sm text-[#696969] font-bold">First Name</span>
              <span class="text-sm text-[#696969] font-bold">Last Name</span>
            </div>
            <div class="flex flex-col gap-2">
              <span class="text-sm font-bold text-right">{{ username }}</span>
              <span class="text-sm font-bold text-right">{{ fname }}</span>
              <span class="text-sm font-bold text-right">{{ lname }}</span>
            </div>
          </div>
        </div>
      </template>
      <template v-slot:button-area>
        <PrimaryButton
          text="Create Account"
          :height="47"
          :width="295"
          @click="toggleConfirm"
        />
      </template>
    </Modal>

    <MessageModal
      v-show="isConfirmed"
      message="Account Created"
      @close="toggleConfirm"
    />
  </div>
</template>

<script>
import MessageModal from "../components/Modal/MessageModal.vue";
import Modal from "../components/Modal/Modal.vue";
import PasswordInput from "../components/Input/PasswordInput.vue";
import PrimaryButton from "../components/Buttons/PrimaryButton.vue";
import TextInput from "../components/Input/TextInput.vue";
import Navbar from "../components/Navigation/Navbar.vue";

export default {
  name: "AccountCreation",
  data() {
    return {
      username: String,
      firstname: String,
      lastname: String,
      password: String,
      cpassword: String,
      isConfirmingCreation: false,
      isConfirmed: false,
    };
  },
  components: {
    Navbar,
    TextInput,
    PrimaryButton,
    PasswordInput,
    Modal,
    MessageModal,
  },
  methods: {
    updateUsername(newValue) {
      this.username = newValue;
    },
    updateFname(newValue) {
      this.fname = newValue;
    },
    updateLname(newValue) {
      this.lname = newValue;
    },
    updatePassword(newValue) {
      this.password = newValue;
    },
    updateCpassword(newValue) {
      this.cpassword = newValue;
    },
    toggleCreation() {
      this.isConfirmingCreation = !this.isConfirmingCreation;
    },
    toggleConfirm() {
      this.isConfirmingCreation = !this.isConfirmingCreation;
      setTimeout(() => {
        this.isConfirmed = !this.isConfirmed;
      }, 300);
      setTimeout(() => {
        this.isConfirmed = !this.isConfirmed;
      }, 1600);
    },
  },
};
</script>

<style scoped>
</style>