<script>
export default {
    layout: AdminLayout,
};
</script>
<script setup>
import { usePage } from "@inertiajs/vue3";
import AdminLayout from "../../Shared/Admin/AdminLayout.vue";

const page = usePage();
const user = page.props.user;
</script>

<template>
    <section>
        <div>
            <h1 class="text-3xl text-gray-700 dark:text-gray-400 mb-4">
                Profile
            </h1>
        </div>
        <div class="flex flex-col md:flex-row md:space-x-8">
            <div>
                <img
                    src="/imgs/profile-avatar.webp"
                    class="w-[200px] rounded shadow"
                    alt=""
                />
            </div>
            <div class="">
                <div>
                    <div class="mb-4">
                        <Link
                            :href="'/admin/users/' + user.id + '/edit'"
                            class="btn btn-edit"
                            >Edit Profile</Link
                        >
                    </div>
                </div>
                <div>
                    <h1 class="text-lg text-gray-700 dark:text-gray-400">
                        Full name: <span class="font-bold">Developer</span>
                    </h1>
                    <h1 class="text-lg text-gray-700 dark:text-gray-400">
                        Username: <span class="font-bold">dev</span>
                    </h1>
                    <h1 class="text-lg text-gray-700 dark:text-gray-400">
                        Email address:
                        <span class="font-bold">developer@gmail.com</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped></style>
