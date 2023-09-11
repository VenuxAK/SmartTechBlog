<script>
export default {
    layout: AdminLayout,
};
</script>
<script setup>
import AdminLayout from "../../../Shared/Admin/AdminLayout.vue";

const props = defineProps(["post"]);
</script>

<template>
    <section>
        <div>
            <div class="mb-5">
                <div>
                    <h1 class="post-title">{{ post.title }}</h1>
                </div>
                <div>
                    <h5 class="text-base text-gray-600 dark:text-gray-500">
                        Publish On:
                        <span>
                            {{ post.created_at }}
                        </span>
                    </h5>

                    <h3 class="text-base text-gray-700 dark:text-gray-400">
                        Author:
                        <span class="font-bold italic">{{
                            post.author.name
                        }}</span>
                    </h3>
                </div>
                <div>
                    <h3 class="text-base text-gray-700 dark:text-gray-400">
                        Tags:
                        <span
                            v-for="tag in post.tags"
                            :key="tag"
                            class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 cursor-pointer"
                            >{{ tag }}</span
                        >
                    </h3>
                </div>
            </div>
            <div class="post-detail">
                <p class="text-base text-gray-700 dark:text-gray-400">
                    {{ post.body }}
                </p>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
.post-title {
    @apply text-3xl text-gray-700 dark:text-gray-400 mb-4;
}
</style>
