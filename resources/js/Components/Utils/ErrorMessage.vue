<template>
    <div>
        <p class="text-danger text-sm font-medium mt-1">{{ message }}</p>
    </div>
</template>

<script setup>
const props = defineProps(["message"]);
</script>

<style lang="scss" scoped></style>
