<template>
  <span>
    {{ listing.id }} {{ listing.city}}
  </span>
</template>

<script setup>
defineProps({
  listing: Object,
})
</script>

