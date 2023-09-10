<script>
export default {
    layout: AdminLayout,
};
</script>
<script setup>
import AdminLayout from "../../../Shared/Admin/AdminLayout.vue";
</script>

<template>
    <section>
        <div>
            <h1 class="text-3xl text-gray-700 dark:text-gray-400 mb-4">
                Create Post
            </h1>
        </div>
        <div>
            <form>
                <div class="mb-6">
                    <label for="title" class="form-label">Title</label>
                    <input
                        type="text"
                        id="title"
                        class="form-input"
                        placeholder="Title"
                        required
                    />
                </div>
                <div class="mb-6">
                    <label for="tag" class="form-label">Tag</label>
                    <input
                        type="text"
                        id="tag"
                        class="form-input"
                        placeholder="eg. Tech"
                        required
                    />
                </div>
                <div class="mb-6">
                    <label for="message" class="form-label">Body</label>
                    <textarea
                        id="message"
                        rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 focus:outline-none rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Leave a comment..."
                    ></textarea>
                </div>
                <div>
                    <button
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
