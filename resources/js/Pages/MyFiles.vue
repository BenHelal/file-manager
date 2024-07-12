<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            {{$page.url}}
        </template>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
