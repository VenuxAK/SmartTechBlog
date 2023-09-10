<script>
export default {
    layout: AdminLayout,
};
</script>
<script setup>
import PostsTables from "../../Components/Admin/PostsTables.vue";
import TagsTable from "../../Components/Admin/TagsTable.vue";
import AdminLayout from "../../Shared/Admin/AdminLayout.vue";
</script>
<template>
    <section>
        <div>
            <div>
                <h1 class="text-3xl text-gray-700 dark:text-gray-400 mb-4">
                    Dashboard
                </h1>
            </div>
            <PostsTables />
            <TagsTable />
        </div>
    </section>
</template>

<style lang="scss" scoped></style>
