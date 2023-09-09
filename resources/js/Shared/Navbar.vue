<script setup>
import { useDark } from "@vueuse/core";
import { ref, watch } from "vue";
import MobileNavbar from "./MobileNavbar.vue";
import SearchBox from "../Components/SearchBox.vue";
import AuthWrapper from "../Components/Auth/AuthWrapper.vue";
import { useForm } from "@inertiajs/vue3";

const isDark = useDark();
const toggleTheme = () => {
    isDark.value = !isDark.value;
};
const body = document.querySelector("body");

let openSearchBox = ref(false);
let openSigninModal = ref(false);
let form = useForm({});

const toggleSearchBox = () => {
    openSearchBox.value = !openSearchBox.value;
};

const toggleSigninModal = () => {
    openSigninModal.value = !openSigninModal.value;
};

watch(openSearchBox, () => {
    if (openSearchBox.value) {
        body.style = "overflow-y: hidden;";
    } else {
        body.style = "";
    }
});
watch(openSigninModal, () => {
    if (openSigninModal.value) {
        body.style = "overflow-y: hidden;";
    } else {
        body.style = "";
    }
});

const logout = () => {
    if (confirm("Are you sure want to logout?")) {
        form.post("/logout");
    }
};
</script>

<template>
    <header>
        <!-- px-4 py-4 lg:px-12 lg:py-6 -->
        <nav class="flex justify-between items-center py-4">
            <div>
                <Link href="/">
                    <img src="/imgs/logo.png" class="w-[80px]" alt="" />
                </Link>
            </div>
            <div class="flex sm:space-x-8 items-center">
                <ul class="hidden sm:flex space-x-8 items-center">
                    <li class="item" :class="{ active: $page.url === '/' }">
                        <Link href="/">Home</Link>
                    </li>
                    <li
                        class="item"
                        :class="{ active: $page.url === '/posts' }"
                    >
                        <Link href="/posts">Posts</Link>
                    </li>
                    <li class="item" :class="{ active: $page.url === '/tags' }">
                        <Link href="/tags">Tags</Link>
                    </li>
                    <li class="item">
                        <button
                            v-if="!$page.props.user"
                            @click="toggleSigninModal"
                        >
                            Sign in
                        </button>
                        <button v-else @click="logout">Logout</button>
                    </li>
                </ul>
                <ul class="flex space-x-6 sm:space-x-8 items-center">
                    <li class="item">
                        <button type="button" @click="toggleSearchBox">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </li>
                    <li class="item">
                        <button class="" @click="toggleTheme">
                            <i
                                class="fa-solid"
                                :class="
                                    isDark
                                        ? 'fa-sun text-yellow-400'
                                        : 'fa-moon'
                                "
                            ></i>
                        </button>
                    </li>
                </ul>
                <button
                    class="sm:hidden text-3xl ml-6 dark:text-white text-gray-700"
                    data-drawer-target="drawer-navigation"
                    data-drawer-show="drawer-navigation"
                    aria-controls="drawer-navigation"
                >
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>
    <MobileNavbar />
    <AuthWrapper :open="openSigninModal" @close="openSigninModal = false" />
    <SearchBox :open="openSearchBox" @close="openSearchBox = false" />
</template>

<style lang="scss" scoped>
// .nav-items-wrapper {
// @apply flex space-x-8 items-center;

.item {
    a,
    button {
        @apply text-gray-800 dark:text-gray-200 dark:hover:text-gray-400 text-lg hover:text-gray-700 transition-all;

        i {
            @apply text-xl;
        }
    }
    &.active {
        @apply font-bold;
    }
}
// }
</style>
