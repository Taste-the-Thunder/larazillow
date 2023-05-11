<template>
  <Link href="/listing">Listing</Link>
  <Link href="/listing/create">Create Listing</Link>
  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <slot />
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

const flashSuccess = computed(
  () => usePage().props.flash.success,
)
</script>

<style scoped>
  .success {
    background-color: green;
    color: white;
  }
</style>
