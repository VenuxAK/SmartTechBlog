<script>
export default {
    layout: AdminLayout,
};
</script>
<script setup>
import AdminLayout from "../../../Shared/Admin/AdminLayout.vue";
import TagsTable from "../../../Components/Admin/Tags/TagsTable.vue";
</script>

<template>
    <section>
        <div>
            <h1 class="text-3xl text-gray-700 dark:text-gray-400 mb-4">Tags</h1>
        </div>
        <div>
            <TagsTable />
        </div>
    </section>
</template>

<style lang="scss" scoped></style>
