<template>
  <label class="text-primary text-textInput font-semibold">
    {{ title }}
    <br />
    <div class="relative flex flex-col">
      <input
        v-model="input"
        type="text"
        :maxlength="limit"
        class="
          pl-5
          py-[14px]
          h-[47px]
          w-[374px]
          bg-inputField
          rounded-[9px]
          text-inputText
          outline-none
          pr-12
        "
        :class="errorFlag == true ? 'border-2 border-error' : 'border-none'"
        :autofocus="focus"
      />
      <div class="absolute right-5 top-2">
        <font-awesome-icon
          size="xs"
          class="hover:cursor-pointer stroke-2"
          :icon="errorFlag === true ? 'xmark' : 'check'"
          :class="errorFlag === true ? 'text-error' : 'text-primary'"
        />
      </div>
      <ErrorText :text="errorText" v-if="errorFlag" :align="errorAlign" />
    </div>
  </label>
</template>

<script>
import ErrorText from "./ErrorText.vue";

export default {
  name: "TextInput",
  components: {
    ErrorText,
  },
  props: {
    title: String,
    limit: Number,
    focus: Boolean,
    errorAlign: String,
    errorText: String,
  },
  data() {
    return {
      errorFlag: Boolean,
      emptyFlag: Boolean,
      input: "",
    };
  },
  mounted() {
    this.emptyFlag = true;
    this.errorFlag = false;
  },
};
</script>

<style scoped>
</style>