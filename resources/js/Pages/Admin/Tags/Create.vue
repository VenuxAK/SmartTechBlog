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
                Create Tag
            </h1>
        </div>
        <div>
            <form>
                <div class="mb-6">
                    <label for="name" class="form-label">Name</label>
                    <input
                        type="text"
                        id="name"
                        class="form-input"
                        placeholder="Tag"
                        required
                    />
                </div>
                <div>
                    <button
                        class="bg-primary px-3 py-2 text-white rounded hover:bg-primary/80"
                    >
                        Create Tag
                    </button>
                </div>
            </form>
        </div>
    </section>
</template>

<style lang="scss" scoped></style>
