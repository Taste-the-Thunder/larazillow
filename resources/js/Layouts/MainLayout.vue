<template>
    <Link href="/">Index</Link>
    <Link href="/show">Show</Link>
    <slot></slot>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>
