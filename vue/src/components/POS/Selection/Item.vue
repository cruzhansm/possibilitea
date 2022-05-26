<template>
  <div>
    <div>
      <span class="pointer-events-none text-[16px] uppercase font-bold">{{
        item.name
      }}</span>
    </div>
  </div>
</template>

<script setup>
defineProps({
  category: String,
  subcategory: String,
  item: Object,
});
</script>
