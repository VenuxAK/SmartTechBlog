<script setup>
const props = defineProps(["posts"]);
</script>

<template>
    <div class="relative overflow-x-auto my-6">
        <div>
            <h1 class="text-xl text-gray-700 font-bold mb-2">Posts</h1>
        </div>
        <table
            class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
        >
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
            >
                <tr>
                    <th scope="col" class="px-6 py-3">#</th>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Author</th>
                    <!-- <th scope="col" class="px-6 py-3">Tags</th> -->
                    <th scope="col" class="px-6 py-3">Created At</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="post in posts"
                    :key="post.id"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                >
                    <td class="px-6 py-4">{{ post.id }}</td>
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                        <Link
                            :href="'/admin/posts/' + post.slug + '/show'"
                            class="link-primary"
                            >{{ post.title }}</Link
                        >
                    </th>
                    <td class="px-6 py-4">{{ post.author }}</td>
                    <!-- <td class="px-6 py-4">
                        <span
                            v-if="post.tags && post.tags.length > 0"
                            v-for="tag in post.tags"
                            :key="tag"
                            class="flex flex-wrap"
                        >
                            <span class="badge-default">{{ tag.name }}</span>
                        </span>
                        <span v-else> No Tags </span>
                    </td> -->
                    <td class="px-6 py-4">{{ post.created_at }}</td>
                    <td class="px-6 py-4 flex items-center space-x-2">
                        <div>
                            <Link
                                :href="'/admin/posts/' + post.slug + '/show'"
                                class="btn btn-edit"
                                >View</Link
                            >
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style lang="scss" scoped>
.badge-default {
    @apply bg-blue-100 text-blue-800 text-xs font-medium m-1 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300;
}
</style>
