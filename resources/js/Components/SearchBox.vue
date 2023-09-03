<script setup>
const props = defineProps(["open"]);
const emit = defineEmits(["close"]);
</script>
<template>
    <div
        id="popup-modal"
        tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%)] max-h-full bg-black/80 backdrop-blur-sm"
    >
        <div
            class="relative w-[576px] h-[466px] rounded-2xl bg-white dark:bg-gray-900 overflow-y-hidden"
            :class="open ? 'animate_box' : ''"
        >
            <div class="pt-2">
                <div
                    class="flex items-center space-x-4 p-4 border-b border-gray-200 dark:border-gray-800"
                >
                    <div class="w-5">
                        <i
                            class="fa-solid fa-magnifying-glass text-gray-400 dark:text-gray-200"
                        ></i>
                    </div>
                    <input
                        type="text"
                        placeholder="Search..."
                        class="w-full h-8 bg-transparent border-2 border-gray-500 dark:border-gray-400 focus:outline-none focus:border-blue-600 dark:focus:border-blue-600 rounded px-2 text-sm"
                    />
                    <div>
                        <!-- <p>Esc</p> -->

                        <button
                            data-modal-hide="popup-modal"
                            type="button"
                            class="text-gray-500 text-2xl hover:text-gray-700 dark:hover:text-gray-400"
                        >
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="relative h-full overflow-y-scroll hide-scrollbar">
                <div class="">
                    <h3 class="text-sm pt-6 pb-4 pl-4 uppercase text-primary">
                        Content
                    </h3>
                    <div class="flex flex-col">
                        <div v-for="i in 8" :key="i">
                            <div class="py-1 px-4 hover:bg-primary mb-2">
                                <button
                                    class="text-start hover:text-white"
                                    data-modal-hide="popup-modal"
                                >
                                    <Link :href="'/posts/slug' + i">
                                        <h5>August 5, 2023</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit.
                                            Reiciendis optio, molestiae dolore
                                            aspernatur obcaecati ipsum!
                                        </p>
                                    </Link>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.animate_box {
    animation: fadeIn; /* referring directly to the animation's @keyframe declaration */
    animation-duration: 0.5s; /* don't forget to set a duration! */
}
</style>
<!--

    <button
        data-modal-hide="popup-modal"
        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
        type="button"
    >
        <Link href="/posts/slug">Yes, I'm sure</Link>
    </button>
 -->
