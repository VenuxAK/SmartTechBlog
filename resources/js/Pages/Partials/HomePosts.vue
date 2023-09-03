<script setup></script>

<template>
    <div
        class="w-full flex flex-col space-y-3 lg:space-y-0 lg:flex-row py-8 border-t border-gray-200 dark:border-gray-800"
    >
        <div class="lg:w-[25%]">
            <h1 class="text-lg text-gray-700 dark:text-gray-200 font-medium">
                August 5, 2023
            </h1>
        </div>
        <div class="lg:w-[75%] flex flex-col space-y-7">
            <div>
                <h1 class="text-2xl font-bold">
                    <Link href="/posts/slug">Title</Link>
                </h1>
                <div class="flex space-x-4 uppercase">
                    <Link :href="'#' + i" v-for="i in 4" :key="i">
                        <span class="text-primary hover:text-blue-700"
                            >Tag {{ i }}</span
                        >
                    </Link>
                </div>
            </div>
            <div>
                <p class="text-gray-600 dark:text-gray-400 font-medium">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Esse pariatur rem aliquam aspernatur! Non quis deleniti
                    aliquid nulla, eveniet distinctio in consectetur aspernatur
                    aut quidem, hic quaerat fugit qui neque.
                </p>
            </div>
            <div>
                <Link
                    href="/posts/slug"
                    class="text-primary hover:text-blue-700 font-medium"
                >
                    Read More
                    <span>
                        <i class="fa-solid fa-arrow-right ml-1"></i>
                    </span>
                </Link>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped></style>
