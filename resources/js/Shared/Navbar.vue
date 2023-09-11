<script setup>
import { useDark } from "@vueuse/core";
import { ref, watch } from "vue";
import MobileNavbar from "./MobileNavbar.vue";
import SearchBox from "../Components/SearchBox.vue";
import AuthWrapper from "../Components/Auth/AuthWrapper.vue";
import { useForm } from "@inertiajs/vue3";

let form = useForm({});
const isDark = useDark();
const toggleTheme = () => {
    isDark.value = !isDark.value;
};

let openSearchBox = ref(false);
let openSigninModal = ref(false);
let openMobileNavbar = ref(false);

const toggleSearchBox = () => {
    openSearchBox.value = !openSearchBox.value;
};

const toggleSigninModal = () => {
    openSigninModal.value = !openSigninModal.value;
};
let body = document.querySelector("body");

watch([openSigninModal, openSearchBox, openMobileNavbar], () => {
    if (
        openSigninModal.value ||
        openSearchBox.value ||
        openMobileNavbar.value
    ) {
        body.style = "overflow-y: hidden";
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
                    <li
                        class="item"
                        v-if="$page.props.user && $page.props.user.role == 1"
                    >
                        <Link href="/admin/dashboard">Dashboard</Link>
                    </li>
                    <li class="item">
                        <div v-if="!$page.props.user">
                            <button @click="toggleSigninModal">Sign in</button>
                        </div>
                        <div v-else>
                            <button @click="logout">Logout</button>
                        </div>
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
                    @click="openMobileNavbar = true"
                >
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>
    <MobileNavbar :open="openMobileNavbar" @close="openMobileNavbar = false" />
    <AuthWrapper :open="openSigninModal" @close="openSigninModal = false" />
    <SearchBox :open="openSearchBox" @close="openSearchBox = false" />
</template>

<style lang="scss" scoped>
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
