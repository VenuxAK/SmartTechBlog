<script setup>
const props = defineProps(["tags"]);
</script>

<template>
    <div class="relative overflow-x-auto my-6">
        <div>
            <h1 class="text-xl text-gray-700 font-bold mb-2">Tags</h1>
        </div>
        <table
            class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
        >
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
            >
                <tr>
                    <th scope="col" class="px-6 py-3">#</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Post Count</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="tag in tags"
                    :key="tag"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                >
                    <td class="px-6 py-4">{{ tag.id }}</td>
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                        <Link
                            :href="'/admin/tags/' + tag.id"
                            class="link-primary"
                            >{{ tag.name }}</Link
                        >
                    </th>
                    <td class="px-6 py-4">{{ tag.post_count }}</td>
                    <td class="px-6 py-4 flex items-center space-x-2">
                        <div>
                            <Link
                                :href="'/admin/tags/' + tag.id + '/edit'"
                                class="btn btn-edit"
                                >Edit</Link
                            >
                        </div>
                        <div>
                            <button class="btn btn-delete">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style lang="scss" scoped></style>
