<script>
export default {
    layout: Layout,
};
</script>
<script setup>
import Layout from "../Shared/Layout.vue";

const props = defineProps(["post"]);
</script>

<template>
    <section class="animate__animated animate__fadeIn">
        <div
            class="py-6 lg:py-8 lg:mb-6 text-center lg:border-b lg:border-gray-300 dark:lg:border-gray-800"
        >
            <h5 class="text-lg text-gray-800 dark:text-gray-400">
                {{ post.created_at }}
            </h5>
            <h1 class="text-4xl font-medium">
                {{ post.title }}
            </h1>
        </div>
        <div
            class="w-full flex flex-col space-y-6 lg:space-y-0 lg:flex-row space-x-6"
        >
            <div
                class="w-full pb-8 lg:w-[25%] border-b border-gray-300 dark:border-gray-800 lg:border-0"
            >
                <div
                    class="flex items-center justify-center lg:justify-start space-x-2 mb-4 lg:mb-6"
                >
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img
                            src="/imgs/profile-avatar.png"
                            alt=""
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <div>
                        <h5 class="text-sm">Author Name</h5>
                        <Link href="#" class="text-sm text-primary"
                            >@twitter</Link
                        >
                    </div>
                </div>
                <div
                    v-if="post.tags.length > 0"
                    class="pt-4 lg:py-6 lg:pr-8 border-t border-gray-300 dark:border-gray-800"
                >
                    <h3
                        class="text-center lg:text-start uppercase text-xs dark:text-gray-400 font-medium"
                    >
                        tags
                    </h3>
                    <ul
                        class="flex justify-center lg:justify-start flex-wrap gap-x-2"
                    >
                        <li v-for="tag in post.tags" :key="tag">
                            <Link
                                :href="'/tags/' + tag.name"
                                class="uppercase text-primary text-base"
                            >
                                {{ tag.name }}
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lg:w-[75%] post-detail">
                <div class="text-gray-800 dark:text-gray-400">
                    {{ post.body }}
                </div>
            </div>
        </div>
        <div
            class="mt-8 mb-12 pt-8 border-t border-gray-400 dark:border-gray-800"
        >
            <div class="w-full text-center">
                <button
                    class="font-medium text-gray-800 dark:text-gray-400 hover:text-gray-600 dark:hover:text-gray-200"
                >
                    Load Comments
                </button>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
.post-detail {
    img {
        @apply w-full;
    }
}
</style>
<!--  Software Development, Object-Oriented Programming, Coding Techniques, Software Architecture -->
