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

let form = useForm({
    title: "",
    body: "",
    tags: [],
});
let tag = ref("");

const addTag = (e) => {
    if (e.key == "Shift" && tag.value && tag.value.match(/^ *$/) == null) {
        form.tags.push(tag.value);
        tag.value = "";
    }
};
const deleteTag = (_tag) => {
    form.tags = form.tags.filter((t) => {
        return t !== _tag;
    });
};

const storePost = () => {
    form.post("/admin/posts/store");
};
</script>

<template>
    <section>
        <div>
            <h1 class="text-3xl text-gray-700 dark:text-gray-400 mb-4">
                Create Post
            </h1>
        </div>
        <div>
            <form @submit.prevent="storePost">
                <div class="mb-6">
                    <label for="title" class="form-label">Title</label>
                    <input
                        v-model="form.title"
                        type="text"
                        id="title"
                        class="form-input"
                        placeholder="Title"
                    />
                    <!-- required -->
                    <ErrorMessage :message="form.errors.title" />
                </div>
                <div class="mb-6">
                    <label for="tag" class="form-label"
                        >Tag (Press Alt + Shift key to add tag)</label
                    >
                    <input
                        v-model="tag"
                        @keydown.alt="addTag"
                        type="text"
                        id="tag"
                        class="form-input"
                        placeholder="eg. Tech"
                    />
                    <!-- :required="form.tags.length == 0" -->
                    <ErrorMessage :message="form.errors.tags" />
                    <div class="mt-1">
                        <span
                            v-for="tag in form.tags"
                            :key="tag"
                            class="inline-flex items-center px-2 py-1 mr-2 text-sm font-medium text-blue-800 bg-blue-100 rounded dark:bg-blue-900 dark:text-blue-300"
                        >
                            {{ tag }}
                            <button
                                type="button"
                                @click="deleteTag(tag)"
                                class="inline-flex items-center p-1 ml-2 text-sm text-blue-400 bg-transparent rounded-sm hover:bg-blue-200 hover:text-blue-900 dark:hover:bg-blue-800 dark:hover:text-blue-300"
                            >
                                <i class="fa-solid fa-xmark"></i>
                                <span class="sr-only">Remove tag</span>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="message" class="form-label">Body</label>
                    <textarea
                        v-model="form.body"
                        id="message"
                        rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 focus:outline-none rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Leave a comment..."
                    ></textarea>
                    <!-- required -->
                    <ErrorMessage :message="form.errors.body" />
                </div>
                <div>
                    <button
                        type="submit"
                        class="bg-primary px-3 py-2 text-white rounded hover:bg-primary/80"
                    >
                        Create Post
                    </button>
                </div>
            </form>
        </div>
    </section>
</template>

<style lang="scss" scoped></style>
