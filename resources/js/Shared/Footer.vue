<script setup>
const date = new Date();
const currentYear = date.getFullYear();
</script>

<template>
    <footer class="py-6">
        <div>
            <h1 class="text-center text-sm text-gray-800 dark:text-gray-400">
                Copyright &copy; {{ currentYear }}. All Rights Reserved.
            </h1>
        </div>
    </footer>
</template>

<style lang="scss" scoped></style>
