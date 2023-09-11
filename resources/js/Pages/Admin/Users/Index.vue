<script>
export default {
    layout: AdminLayout,
};
</script>
<script setup>
import AdminLayout from "../../../Shared/Admin/AdminLayout.vue";
import UsersTable from "../../../Components/Admin/Users/UsersTable.vue";
</script>

<template>
    <section>
        <div>
            <h1 class="text-3xl text-gray-700 dark:text-gray-400 mb-4">
                Users
            </h1>
        </div>
        <div>
            <UsersTable />
        </div>
    </section>
</template>

<style lang="scss" scoped></style>
