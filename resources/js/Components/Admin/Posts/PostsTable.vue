<script setup>
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

const props = defineProps(["posts"]);
let openFilter = ref(false);

const form = useForm({});

const deletePost = (id) => {
    if (confirm("Are your sure want to delete?")) {
        form.delete(`/admin/posts/${id}`);
    }
};
</script>

<template>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between pb-4">
            <div class="relative">
                <button
                    @click="openFilter = !openFilter"
                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                    type="button"
                >
                    <svg
                        class="w-3 h-3 text-gray-500 dark:text-gray-400 mr-2.5"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"
                        />
                    </svg>
                    Last 30 days
                    <span class="pl-1 text-gray-500 dark:text-gray-400">
                        <i
                            class="fa-solid"
                            :class="
                                openFilter ? 'fa-chevron-up' : 'fa-chevron-down'
                            "
                        ></i>
                    </span>
                </button>
                <!-- Dropdown menu -->
                <div
                    class="relative w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                >
                    <ul
                        class="p-3 absolute top-5 left-5 z-20 bg-gray-100 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownRadioButton"
                        v-if="openFilter"
                    >
                        <li>
                            <div
                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"
                            >
                                <input
                                    id="filter-radio-example-1"
                                    type="radio"
                                    value=""
                                    name="filter-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                />
                                <label
                                    for="filter-radio-example-1"
                                    class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300"
                                    >Last day</label
                                >
                            </div>
                        </li>
                        <li>
                            <div
                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"
                            >
                                <input
                                    checked=""
                                    id="filter-radio-example-2"
                                    type="radio"
                                    value=""
                                    name="filter-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                />
                                <label
                                    for="filter-radio-example-2"
                                    class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300"
                                    >Last 7 days</label
                                >
                            </div>
                        </li>
                        <li>
                            <div
                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"
                            >
                                <input
                                    id="filter-radio-example-3"
                                    type="radio"
                                    value=""
                                    name="filter-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                />
                                <label
                                    for="filter-radio-example-3"
                                    class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300"
                                    >Last 30 days</label
                                >
                            </div>
                        </li>
                        <li>
                            <div
                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"
                            >
                                <input
                                    id="filter-radio-example-4"
                                    type="radio"
                                    value=""
                                    name="filter-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                />
                                <label
                                    for="filter-radio-example-4"
                                    class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300"
                                    >Last month</label
                                >
                            </div>
                        </li>
                        <li>
                            <div
                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"
                            >
                                <input
                                    id="filter-radio-example-5"
                                    type="radio"
                                    value=""
                                    name="filter-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                />
                                <label
                                    for="filter-radio-example-5"
                                    class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300"
                                    >Last year</label
                                >
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                >
                    <svg
                        class="w-5 h-5 text-gray-500 dark:text-gray-400"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </div>
                <input
                    type="text"
                    id="table-search"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 focus:outline-none rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for items"
                />
            </div>
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
                    <th scope="col" class="px-6 py-3">Tags</th>
                    <th scope="col" class="px-6 py-3">Author</th>
                    <th scope="col" class="px-6 py-3">Date</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="post in posts.data"
                    :key="post"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                    <td class="px-6 py-4">
                        {{ post.id }}
                    </td>
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
                    <td class="px-6 py-4">
                        <span class="badge" v-if="post.tags[0]">{{
                            post.tags[0].name
                        }}</span>
                        <span v-else class="text-danger text-sm"> NULL </span>
                    </td>
                    <td class="px-6 py-4">{{ post.author.name }}</td>
                    <td class="px-6 py-4">{{ post.created_at }}</td>
                    <td class="px-6 py-4 flex items-center space-x-2">
                        <div>
                            <Link
                                :href="'/admin/posts/' + post.id + '/edit'"
                                class="btn btn-edit"
                                >Edit</Link
                            >
                        </div>
                        <div>
                            <button
                                @click="deletePost(post.id)"
                                class="btn btn-delete"
                            >
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <nav
            class="flex items-center justify-between pt-8 mb-4 px-3 md:px-6"
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
                        Link
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

<style lang="scss" scoped>
.badge {
    @apply bg-blue-100 text-blue-800 text-xs font-medium px-1.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 cursor-pointer;
}
</style>
