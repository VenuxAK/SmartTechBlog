<script setup>
import { usePage } from "@inertiajs/vue3";
import { computed, ref } from "vue";

const props = defineProps(["open"]);
const emit = defineEmits(["close"]);

let query = ref("");
const page = usePage();

let filteredPosts = computed(() => {
    return page.props.data.posts.filter((post) => {
        return query.value
            ? post.title.toLowerCase().includes(query.value.toLowerCase()) ||
                  post.body.toLowerCase().includes(query.value.toLowerCase())
            : post;
    });
});
</script>
<template>
    <Teleport to="body">
        <div
            class="fixed top-0 left-0 flex items-center justify-center p-4 w-full h-screen max-h-full bg-black/90 bg-opacity-75 z-50 overflow-hidden backdrop-blur-sm"
            v-if="open"
            @click.self="emit('close')"
        >
            <div
                class="relative w-[576px] h-[466px] max-h-full rounded-2xl bg-white dark:bg-gray-900 overflow-y-hidden"
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
                            v-model="query"
                            class="w-full h-8 bg-transparent border-2 border-gray-500 dark:border-gray-400 focus:outline-none focus:border-blue-600 dark:focus:border-blue-600 rounded px-2 text-sm"
                        />
                        <div>
                            <button
                                @click="emit('close')"
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
                        <h3
                            class="text-sm pt-6 pb-4 pl-4 uppercase text-primary"
                        >
                            Content
                        </h3>
                        <div class="flex flex-col">
                            <div
                                v-if="filteredPosts.length > 0"
                                v-for="post in filteredPosts.slice(0, 10)"
                                :key="post"
                            >
                                <button
                                    class="text-start w-full py-1 px-4 mb-2 hover:text-white hover:bg-primary"
                                    @click="emit('close')"
                                >
                                    <Link :href="'/posts/' + post.slug">
                                        <h5>{{ post.created_at }}</h5>
                                        <p>
                                            {{
                                                post.title.length > 100
                                                    ? post.title.substr(
                                                          0,
                                                          100
                                                      ) + " ..."
                                                    : post.title.substr(0, 100)
                                            }}
                                        </p>
                                    </Link>
                                </button>
                            </div>
                            <div v-else>
                                <h1 class="text-center my-6">
                                    No results found!
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Teleport>
</template>

<style lang="scss" scoped>
.animate_box {
    animation: fadeIn; /* referring directly to the animation's @keyframe declaration */
    animation-duration: 0.5s;
}
</style>
