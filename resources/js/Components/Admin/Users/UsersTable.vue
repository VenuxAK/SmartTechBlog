<script setup></script>

<template>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table
            class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
        >
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
            >
                <tr>
                    <th scope="col" class="px-6 py-3">#</th>
                    <th scope="col" class="px-6 py-3">email</th>
                    <th scope="col" class="px-6 py-3">Full name</th>
                    <th scope="col" class="px-6 py-3">Username</th>
                    <th scope="col" class="px-6 py-3">Role</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="i in 10"
                    :key="i"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                    <td class="px-6 py-4">{{ i }}</td>
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                        johndoe@example.com
                    </th>
                    <td class="px-6 py-4">John Doe</td>
                    <td class="px-6 py-4">johndoe</td>
                    <td class="px-6 py-4">Admin</td>
                    <td class="px-6 py-4 flex items-center space-x-2">
                        <Link
                            :href="'/admin/users/' + i + '/edit'"
                            class="btn btn-edit"
                            >Edit</Link
                        >
                        <Link href="#" class="btn btn-delete">Delete</Link>
                    </td>
                </tr>
            </tbody>
        </table>
        <nav
            class="flex items-center justify-between pt-4"
            aria-label="Table navigation"
        >
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"
                >Showing
                <span class="font-semibold text-gray-900 dark:text-white"
                    >1-10</span
                >
                of
                <span class="font-semibold text-gray-900 dark:text-white"
                    >1000</span
                ></span
            >
            <ul class="inline-flex -space-x-px text-sm h-8">
                <li>
                    <Link
                        href="#"
                        class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                        >Previous</Link
                    >
                </li>
                <li>
                    <Link
                        href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                        >1</Link
                    >
                </li>
                <li>
                    <Link
                        href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                        >2</Link
                    >
                </li>
                <li>
                    <Link
                        href="#"
                        aria-current="page"
                        class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"
                        >3</Link
                    >
                </li>
                <li>
                    <Link
                        href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                        >4</Link
                    >
                </li>
                <li>
                    <Link
                        href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                        >5</Link
                    >
                </li>
                <li>
                    <Link
                        href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                        >Next</Link
                    >
                </li>
            </ul>
        </nav>
    </div>
</template>

<style lang="scss" scoped></style>
