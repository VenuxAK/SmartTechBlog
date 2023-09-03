<script>
export default {
    layout: Layout,
};
</script>
<script setup>
import Layout from "../Shared/Layout.vue";

const props = defineProps(["tags"]);
</script>

<template>
    <section class="animate__animated animate__fadeIn">
        <div class="mt-20 mb-10 w-full">
            <div class="flex flex-col md:flex-row items-start md:items-center">
                <div
                    class="border-b w-full md:w-auto md:border-b-0 md:border-r md:pr-6 pb-6"
                >
                    <h1 class="text-5xl font-medium">Tags</h1>
                </div>
                <div class="max-w-lg md:pl-6 pt-6">
                    <ul class="flex flex-wrap">
                        <li v-for="tag in tags" :key="tag" class="">
                            <Link
                                :href="'/tags/' + tag.name"
                                class="text-primary pr-6 text-lg"
                            >
                                {{ tag.name }}
                                <span class="dark:text-white">
                                    ({{ tag.posts.length }})
                                </span>
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped></style>
