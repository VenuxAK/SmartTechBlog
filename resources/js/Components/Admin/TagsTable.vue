<script setup></script>

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
                    v-for="i in 6"
                    :key="i"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                >
                    <td class="px-6 py-4">{{ i }}</td>
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                        <Link :href="'/admin/tags/' + i" class="link-primary"
                            >Tag name</Link
                        >
                    </th>
                    <td class="px-6 py-4">5</td>
                    <td class="px-6 py-4 flex items-center space-x-2">
                        <div>
                            <Link
                                :href="'/admin/tags/' + i + '/edit'"
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
