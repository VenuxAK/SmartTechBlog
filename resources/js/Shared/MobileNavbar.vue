<script setup>
import { ref } from "vue";
import AuthWrapper from "../Components/Auth/AuthWrapper.vue";
import { useForm } from "@inertiajs/vue3";

let openSigninModal = ref(false);
let form = useForm({});

const toggleSigninModal = () => {
    openSigninModal.value = !openSigninModal.value;
};
const logout = () => {
    if (confirm("Are you sure want to logout?")) {
        form.post("/logout");
    }
};
</script>

<template>
    <!-- drawer component -->
    <div
        id="drawer-navigation"
        class="fixed top-0 left-0 z-40 w-full h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-950 bg-opacity-90"
        tabindex="-1"
        aria-labelledby="drawer-navigation-label"
    >
        <div class="container h-full p-6">
            <div class="flex justify-between items-center">
                <div>
                    <img src="/imgs/ico.png" class="w-[50px]" alt="" />
                </div>
                <div>
                    <button
                        data-drawer-hide="drawer-navigation"
                        aria-controls="drawer-navigation"
                        class="text-gray-700 dark:text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                        <i class="fa-solid fa-xmark text-3xl"></i>
                        <span class="sr-only">Close menu</span>
                    </button>
                </div>
            </div>
            <div class="h-full py-4 overflow-y-auto">
                <ul
                    class="h-full flex flex-col justify-center items-center space-y-4 font-medium"
                >
                    <li>
                        <button data-drawer-hide="drawer-navigation">
                            <Link
                                href="/"
                                class="nav-item"
                                :class="{ active: $page.url === '/' }"
                            >
                                <span class="ml-3">Home</span>
                            </Link>
                        </button>
                    </li>
                    <li>
                        <button data-drawer-hide="drawer-navigation">
                            <Link
                                href="/posts"
                                class="nav-item"
                                :class="{ active: $page.url === '/posts' }"
                            >
                                <span class="ml-3">Posts</span>
                            </Link>
                        </button>
                    </li>
                    <li>
                        <button data-drawer-hide="drawer-navigation">
                            <Link
                                href="/tags"
                                class="nav-item"
                                :class="{ active: $page.url === '/tags' }"
                            >
                                <span class="ml-3">Tags</span>
                            </Link>
                        </button>
                    </li>
                    <li>
                        <button data-drawer-hide="drawer-navigation">
                            <button
                                v-if="!$page.props.user"
                                @click="toggleSigninModal"
                            >
                                Sign in
                            </button>
                            <button v-else @click="logout">Logout</button>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <AuthWrapper :open="openSigninModal" @close="openSigninModal = false" />
</template>

<style lang="scss" scoped>
.nav-item {
    @apply flex items-center p-2 text-gray-900 rounded-lg dark:text-white;

    &.active {
        @apply underline underline-offset-8 decoration-primary;
    }
}
</style>
