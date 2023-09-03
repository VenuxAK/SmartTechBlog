<script>
export default {
    layout: Layout,
};
</script>
<script setup>
import Layout from "../Shared/Layout.vue";
</script>
<template>
    <section class="animate__animated animate__fadeIn mt-12 mb-16">
        <div class="flex w-full md:space-x-6">
            <div
                class="h-[468px] w-[30%] lg:w-[25%] hidden md:block bg-gray-100 dark:bg-gray-900 pt-8 px-6 overflow-y-scroll rounded"
            >
                <div>
                    <h1 class="text-base font-bold text-primary mb-3">
                        All Posts
                    </h1>
                    <ul class="lg:pr-8 lg:pl-4 md:pl-2">
                        <li
                            v-for="i in 20"
                            :key="i"
                            class="py-2 font-medium text-gray-500 hover:text-gray-600"
                        >
                            <Link href="#">Post ({{ i }})</Link>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="md:w-[70%] lg:w-[75%] md:pl-8 lg:pl-12">
                <div>
                    <div
                        v-for="i in 5"
                        :key="i"
                        class="flex flex-col space-y-4 mb-14"
                    >
                        <div>
                            <h5 class="text-gray-500 font-medium">
                                August 5, 2023
                            </h5>
                            <Link
                                href="/posts/slug"
                                class="text-2xl font-medium"
                            >
                                Release of Tailwind Nextjs Starter Blog v2.0
                            </Link>
                            <div>
                                <Link
                                    href="#"
                                    v-for="i in 3"
                                    :key="i"
                                    class="pr-2 text-primary text-base uppercase"
                                >
                                    Tag{{ i }}
                                </Link>
                            </div>
                        </div>
                        <div>
                            <p
                                class="text-gray-600 dark:text-gray-400 text-base"
                            >
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Modi doloribus hic provident
                                possimus architecto accusamus fugit sapiente
                                dolores! Quaerat eos sed reiciendis? Dolorum
                                aliquid explicabo ipsum labore magni eius
                                debitis!
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <div>
                            <button class="disabled:text-gray-400" disabled>
                                Previous
                            </button>
                        </div>
                        <div>
                            <span>1 of 3</span>
                        </div>
                        <div>
                            <button class="disabled:text-gray-400">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped></style>
