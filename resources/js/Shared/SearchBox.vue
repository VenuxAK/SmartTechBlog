<script setup>
import { watch } from "vue";

const props = defineProps(["open"]);
const emit = defineEmits(["close"]);
</script>

<template>
    <Teleport to="body">
        <!-- <div v-if="open" class="w-screen h-screen bg-black fixed top-0 left-0 z-[50] overflow-hidden"></div> -->
        <div v-if="open">
            <div
                class="searchbox-wrapper"
                @click.self="emit('close')"
                @keyup.esc="emit('close')"
            >
                <!-- style="
                    display: flex;
                    align-items: flex-start;
                    justify-content: center;
                    inset: 0px;
                    padding: 14vh 16px 16px;
                " -->
                <div
                    class="w-[576px] h-[466px] rounded-2xl bg-white dark:bg-gray-900 overflow-hidden"
                    :class="open ? 'animate_box' : ''"
                >
                    <div>
                        <div class="pt-2 pb-4">
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
                                    <kbd
                                        class="inline-block whitespace-nowrap rounded border px-1.5 align-middle font-medium leading-4 tracking-wide text-xs text-gray-400 border-gray-400"
                                    >
                                        Esc
                                    </kbd>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-full overflow-y-scroll">
                            <div>
                                <h3
                                    class="text-sm uppercase text-primary pl-4 mb-2"
                                >
                                    Content
                                </h3>
                            </div>
                            <div>
                                <div
                                    v-for="i in 4"
                                    :key="i"
                                    class="mb-3 hover:bg-primary pl-4 py-2 cursor-pointer hover:text-gray-200"
                                >
                                    <p class="text-sm font-medium">
                                        August 5, 2023
                                    </p>
                                    <h5 class="text-base">
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Porro ex, sunt
                                        expedita aspernatur repellat deleniti!
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Teleport>
</template>

<style lang="scss" scoped>
// .searchbox-wrapper {
//     @apply w-screen h-screen flex items-center justify-center fixed top-0 left-0 z-50
//             bg-gray-300/50 p-4 backdrop-blur backdrop-filter dark:bg-black/50;
// }
.searchbox-wrapper {
    @apply bg-gray-300/50 p-4 backdrop-blur backdrop-filter dark:bg-black/50
            fixed top-0 left-0 right-0 z-50 hidden overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%)] max-h-full;
}
.animate_box {
    animation: fadeIn; /* referring directly to the animation's @keyframe declaration */
    animation-duration: 0.5s; /* don't forget to set a duration! */
}
</style>
