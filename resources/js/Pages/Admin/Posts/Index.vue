<script>
export default {
    layout: AdminLayout,
};
</script>
<script setup>
import PostsTable from "../../../Components/Admin/Posts/PostsTable.vue";
import AdminLayout from "../../../Shared/Admin/AdminLayout.vue";
</script>

<template>
    <section>
        <div>
            <h1 class="text-3xl text-gray-700 dark:text-gray-400 mb-4">
                Posts
            </h1>
        </div>
        <div>
            <PostsTable />
        </div>
    </section>
</template>

<style lang="scss" scoped></style>
