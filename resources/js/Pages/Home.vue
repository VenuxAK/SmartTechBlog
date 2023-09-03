<script>
export default {
    layout: Layout,
};
</script>

<script setup>
import Layout from "../Shared/Layout.vue";
import HomePosts from "./Partials/HomePosts.vue";
</script>

<template>
    <section class="animate__animated animate__fadeIn">
        <div class="mb-10 py-6">
            <h1 class="text-5xl font-medium">Latest</h1>
            <p class="text-base mt-6 text-gray-700 dark:text-gray-400">
                Unlocking Creativity Through Code! <br />
                Dive into the world of software development with us. <br />
                From algorithms to apps, we're your coding companions
            </p>
        </div>
        <div>
            <div v-for="i in 6" :key="i">
                <HomePosts />
            </div>
            <div class="mt-2 mb-8">
                <Link href="/posts" class="text-primary text-right block">
                    All Posts
                    <span>
                        <i class="fa-solid fa-arrow-right ml-1"></i>
                    </span>
                </Link>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped></style>
