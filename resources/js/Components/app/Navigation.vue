<template xmlns="http://www.w3.org/1999/html">
    <nav class="min-w-[200]">
        <div class="h-[80px] px-3 flex items-center gap-3">
            <Link href="/" >
                <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800"/>
            </Link>
            LaraStorage
        </div>

        <div class="px-3">
            <CreateNewDropdown/>
            <div class="py-3">
                <NavLink href="/">My Files</NavLink>
                <NavLink href="/">Shared with me</NavLink>
                <NavLink href="/" :active="true">Shared by me</NavLink>
                <NavLink href="/">Trash</NavLink>
            </div>
        </div>
    </nav>
</template>

<script setup>

import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import CreateNewDropdown from "@/Components/app/CreateNewDropdown.vue";
import { Link } from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
</script>


<style scoped>

</style>
