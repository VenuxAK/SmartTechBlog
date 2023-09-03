<script setup>
const props = defineProps(["post"]);
// console.log(props.post);
</script>

<template>
    <div
        class="w-full flex flex-col space-y-3 lg:space-y-0 lg:flex-row py-8 border-t border-gray-200 dark:border-gray-800"
    >
        <div class="lg:w-[25%]">
            <h1 class="text-lg text-gray-700 dark:text-gray-200 font-medium">
                {{ post.created_at }}
            </h1>
        </div>
        <div class="lg:w-[75%] flex flex-col space-y-7">
            <div>
                <h1 class="text-2xl font-bold">
                    <Link :href="'/posts/' + post.slug">{{ post.title }}</Link>
                </h1>
                <div class="flex space-x-4 uppercase">
                    <Link
                        :href="'tags/' + tag.name"
                        v-if="post.tags"
                        v-for="tag in post.tags"
                        :key="tag"
                    >
                        <span class="text-primary hover:text-blue-700">{{
                            tag.name
                        }}</span>
                    </Link>
                </div>
            </div>
            <div>
                <p class="text-gray-600 dark:text-gray-400 font-medium">
                    {{ post.body }}
                </p>
            </div>
            <div>
                <Link
                    :href="'/posts/' + post.slug"
                    class="text-primary hover:text-blue-700 font-medium"
                >
                    Read More
                    <span>
                        <i class="fa-solid fa-arrow-right ml-1"></i>
                    </span>
                </Link>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped></style>
