<script setup>
import AdminNavbar from "./AdminNavbar.vue";
</script>

<template>
    <section class="">
        <AdminNavbar />

        <main class="p-4 md:p-8 sm:ml-64 mt-14">
            <slot />
        </main>
    </section>
</template>

<style lang="scss" scoped></style>
