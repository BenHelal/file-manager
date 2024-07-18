<template>
    <modal :show="modelValue">
        Show Modal
    </modal>
</template>

<script setup>
import { ref } from 'vue';  // Import ref from vue
import Modal from "@/Components/Modal.vue";

// Define props
const props = defineProps({
    modelValue: Boolean
});

// Create a reactive reference for modalValue
const modalValue = ref(props.modelValue);

</script>

<style scoped>
</style>
