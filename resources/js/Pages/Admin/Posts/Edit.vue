<script>
export default {
    layout: AdminLayout,
};
</script>
<script setup>
import { useForm } from "@inertiajs/vue3";
import AdminLayout from "../../../Shared/Admin/AdminLayout.vue";
import { ref } from "vue";
import ErrorMessage from "../../../Components/Utils/ErrorMessage.vue";
const props = defineProps(["post"]);

let form = useForm({
    title: props.post.title,
    body: props.post.body,
});

const editPost = () => {
    form.patch(`/admin/posts/${props.post.id}/update`);
};
</script>

<template>
    <section>
        <div>
            <h1 class="text-3xl text-gray-700 dark:text-gray-400 mb-4">
                Edit Post
            </h1>
        </div>
        <div>
            <form @submit.prevent="editPost">
                <div class="mb-6">
                    <label for="title" class="form-label">Title</label>
                    <input
                        type="text"
                        id="title"
                        class="form-input"
                        placeholder="Title"
                        v-model="form.title"
                    />
                    <!-- required -->
                    <ErrorMessage :message="form.errors.title" />
                </div>

                <!-- Update in future to edit tag -->
                <!-- <div class="mb-6">
                    <label for="tag" class="form-label">Tag</label>
                    <input
                        type="text"
                        id="tag"
                        class="form-input"
                        placeholder="eg. Tech"
                        v-model="tag"
                        @keydown.alt="addNewTag"
                        required
                    />
                    <div class="mt-1">
                        <span
                            v-for="tag in form.tags"
                            :key="tag"
                            class="inline-flex items-center px-2 py-1 mr-2 text-sm font-medium text-blue-800 bg-blue-100 rounded dark:bg-blue-900 dark:text-blue-300"
                        >
                            {{ tag.name }}
                            <button
                                type="button"
                                class="inline-flex items-center p-1 ml-2 text-sm text-blue-400 bg-transparent rounded-sm hover:bg-blue-200 hover:text-blue-900 dark:hover:bg-blue-800 dark:hover:text-blue-300"
                            >
                                <i class="fa-solid fa-xmark"></i>
                                <span class="sr-only">Remove tag</span>
                            </button>
                        </span>
                    </div>
                </div> -->
                <div class="mb-6">
                    <label for="message" class="form-label">Body</label>
                    <textarea
                        id="message"
                        rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 focus:outline-none rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Leave a comment..."
                        v-model="form.body"
                    ></textarea>
                    <ErrorMessage :message="form.errors.body" />
                </div>
                <div>
                    <button
                        class="bg-primary px-3 py-2 text-white rounded hover:bg-primary/80"
                    >
                        Save
                    </button>
                </div>
            </form>
        </div>
    </section>
</template>

<style lang="scss" scoped>
.badge {
    @apply bg-blue-100 text-blue-800 text-xs font-medium mr-1.5 px-1.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 cursor-pointer;
}
</style>
