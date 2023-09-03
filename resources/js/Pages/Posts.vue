<script>
export default {
    layout: Layout,
};
</script>
<script setup>
import Layout from "../Shared/Layout.vue";
import Pagination from "../Shared/Pagination.vue";

const props = defineProps(["posts", "tags"]);
// console.log(props.posts);
</script>
<template>
    <section class="animate__animated animate__fadeIn mt-12 mb-16">
        <div class="flex w-full md:space-x-6">
            <div
                class="h-[468px] w-[30%] lg:w-[25%] hidden md:block bg-gray-100 dark:bg-gray-900 pt-8 px-6 overflow-y-scroll rounded"
            >
                <div>
                    <h1 class="text-base font-bold text-primary mb-3">
                        All Posts
                    </h1>
                    <ul class="lg:pr-8 lg:pl-4 md:pl-2">
                        <li
                            v-for="tag in tags"
                            :key="tag"
                            class="py-2 font-medium text-gray-500 hover:text-gray-600"
                        >
                            <Link :href="'/tags/' + tag.name"
                                >{{ tag.name }} ({{ tag.posts.length }})</Link
                            >
                        </li>
                    </ul>
                </div>
            </div>
            <div class="md:w-[70%] lg:w-[75%] md:pl-8 lg:pl-12">
                <div>
                    <div
                        v-if="posts.data.length > 0"
                        v-for="post in posts.data"
                        :key="post"
                        class="flex flex-col space-y-4 mb-14"
                    >
                        <div>
                            <h5 class="text-gray-500 font-medium">
                                {{ post.created_at }}
                            </h5>
                            <Link
                                :href="'/posts/' + post.slug"
                                class="text-2xl font-medium"
                            >
                                {{ post.title }}
                            </Link>
                            <div>
                                <Link
                                    v-for="tag in post.tags"
                                    :href="'/tags/' + tag.name"
                                    :key="tag"
                                    class="pr-2 text-primary text-base uppercase"
                                >
                                    {{ tag.name }}
                                </Link>
                            </div>
                        </div>
                        <div>
                            <p
                                class="text-gray-600 dark:text-gray-400 text-base"
                            >
                                {{ post.body }}
                            </p>
                        </div>
                    </div>
                    <div v-else class="mt-12 mb-28">
                        <div>
                            <h1 class="text-center font-medium">
                                No Posts Found
                            </h1>
                        </div>
                    </div>
                </div>
                <div>
                    <Pagination :links="posts" />
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped></style>
