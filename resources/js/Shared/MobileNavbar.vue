<script setup></script>

<template>
    <!-- drawer component -->
    <div
        id="drawer-navigation"
        class="fixed top-0 left-0 z-40 w-full h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-950 bg-opacity-90"
        tabindex="-1"
        aria-labelledby="drawer-navigation-label"
    >
        <!-- <h5
            id="drawer-navigation-label"
            class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400"
        >
            Menu
        </h5> -->
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
                            <Link
                                href="/about"
                                class="nav-item"
                                :class="{ active: $page.url === '/about' }"
                            >
                                <span class="ml-3">About</span>
                            </Link>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.nav-item {
    @apply flex items-center p-2 text-gray-900 rounded-lg dark:text-white;

    &.active {
        @apply underline underline-offset-8 decoration-primary;
    }
}
</style>
