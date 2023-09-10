<script setup>
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

import { useUser } from "../../Composables/useUser";

const props = defineProps(["open"]);
const emit = defineEmits(["close"]);
const { signout } = useUser();

let openPostDropdown = ref(false);
let openTagDropdown = ref(false);

const togglePostDropdown = () => {
    openPostDropdown.value = !openPostDropdown.value;
};
const toggleTagDropdown = () => {
    openTagDropdown.value = !openTagDropdown.value;
};

const logout = () => {
    if (signout()) {
        emit("close");
    }
};
</script>

<template>
    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform sm:translate-x-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700"
        :class="open ? '' : '-translate-x-full'"
    >
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <Link
                        href="/admin/dashboard"
                        @click="emit('close')"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                    >
                        <span
                            class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        >
                            <i class="fa-solid fa-gauge"></i>
                        </span>
                        <span class="ml-3">Dashboard</span>
                    </Link>
                </li>
                <li>
                    <button
                        type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        @click="togglePostDropdown"
                    >
                        <span
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        >
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap"
                            >Posts</span
                        >
                        <span class="text-gray-700 dark:text-gray-400">
                            <i
                                class="fa-solid"
                                :class="
                                    openPostDropdown
                                        ? 'fa-chevron-up'
                                        : 'fa-chevron-down'
                                "
                            ></i>
                        </span>
                    </button>
                    <ul
                        class="py-2 space-y-2"
                        :class="openPostDropdown ? '' : 'hidden'"
                    >
                        <li>
                            <Link
                                href="/admin/posts"
                                @click="emit('close')"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                >View</Link
                            >
                        </li>
                        <li>
                            <Link
                                href="/admin/posts/create"
                                @click="emit('close')"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                >Create</Link
                            >
                        </li>
                    </ul>
                </li>
                <li>
                    <button
                        type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        @click="toggleTagDropdown"
                    >
                        <span
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        >
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap"
                            >Tags</span
                        >
                        <span class="text-gray-700 dark:text-gray-400">
                            <i
                                class="fa-solid"
                                :class="
                                    openTagDropdown
                                        ? 'fa-chevron-up'
                                        : 'fa-chevron-down'
                                "
                            ></i>
                        </span>
                    </button>
                    <ul
                        class="py-2 space-y-2"
                        :class="openTagDropdown ? '' : 'hidden'"
                    >
                        <li>
                            <Link
                                href="/admin/tags"
                                @click="emit('close')"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                >View</Link
                            >
                        </li>
                        <li>
                            <Link
                                href="/admin/tags/create"
                                @click="emit('close')"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                >Create</Link
                            >
                        </li>
                    </ul>
                </li>
                <li>
                    <Link
                        href="/admin/users"
                        @click="emit('close')"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                    >
                        <span
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        >
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                    </Link>
                </li>
                <li>
                    <Link
                        href="#"
                        @click="emit('close')"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                    >
                        <span
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        >
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                        <!-- <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300"
                            >3
                        </span> -->
                    </Link>
                </li>
                <li>
                    <Link
                        href="/"
                        @click="emit('close')"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                    >
                        <span
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        >
                            <i class="fa-solid fa-home"></i>
                        </span>
                        <span class="flex-1 ml-3 whitespace-nowrap">Home</span>
                    </Link>
                </li>
                <li>
                    <form @submit.prevent="logout">
                        <button
                            type="submit"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <span
                                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            >
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </span>
                            <span class="flex-1 ml-3 whitespace-nowrap"
                                >Sign out</span
                            >
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>
</template>

<style lang="scss" scoped></style>
