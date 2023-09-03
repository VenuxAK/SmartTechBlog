<script setup>
import Footer from "./Footer.vue";
import Navbar from "./Navbar.vue";
</script>

<template>
    <!-- class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0" -->
    <section
        class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0"
    >
        <section>
            <Navbar />
        </section>
        <main class="my-8">
            <slot />
        </main>
        <section>
            <Footer />
        </section>
    </section>
</template>

<style lang="scss" scoped></style>
