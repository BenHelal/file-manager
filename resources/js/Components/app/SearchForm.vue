<script setup>
//import
import TextInput from "@/Components/TextInput.vue";
import {useForm} from "@inertiajs/vue3";
//Users
const fromss = useForm({
    search: ''
})
</script>

<template>
    <form class="w-[600px] h-[80px] flex items-center">
        <TextInput type="text" class="block w-full mr-2"
                   v-model="fromss.search" autocomplete
                   placeholder="Search for files and folders" />
    </form>
</template>

<style scoped>
</style>
