<script>
export default {
    layout: AdminLayout,
};
</script>
<script setup>
import { usePage } from "@inertiajs/vue3";
import AdminLayout from "../../../Shared/Admin/AdminLayout.vue";
import { ref } from "vue";

const page = usePage();
let user = page.props.user;

let formUser = ref({
    fullName: user.fullName,
    username: user.username,
    email: user.email,
    role: user.role,
});
</script>

<template>
    <section>
        <div>
            <h1 class="text-3xl text-gray-700 dark:text-gray-400 mb-4">
                Edit User
            </h1>
        </div>
        <div>
            <form>
                <div class="mb-3">
                    <img
                        src="/imgs/profile-avatar.webp"
                        class="w-[200px] rounded shadow"
                        alt=""
                    />
                </div>
                <div class="mb-6">
                    <label for="avatar" class="form-label">Avatar</label>
                    <input type="file" class="form-input" id="avatar" />
                </div>
                <div class="mb-6">
                    <label for="fullname" class="form-label">Full name</label>
                    <input
                        type="text"
                        id="fullname"
                        class="form-input"
                        v-model="formUser.fullName"
                        required
                        placeholder="John Doe"
                    />
                </div>
                <div class="mb-6">
                    <label for="username" class="form-label">Username</label>
                    <input
                        type="text"
                        id="username"
                        class="form-input"
                        v-model="formUser.username"
                        required
                        placeholder="johndoe"
                    />
                </div>
                <div class="mb-6">
                    <label for="email" class="form-label">Email address</label>
                    <input
                        type="email"
                        id="email"
                        class="form-input"
                        v-model="formUser.email"
                        placeholder="name@example.com"
                        required
                    />
                </div>
                <div class="mb-6">
                    <label for="role" class="form-label">Role</label>
                    <select id="role" class="form-input">
                        <option selected>Select role</option>
                        <option value="1" :selected="formUser.role == 1">
                            Admin
                        </option>
                        <option value="0" :selected="formUser.role == 0">
                            Normal User
                        </option>
                    </select>
                </div>
                <button
                    type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Edit user
                </button>
            </form>
        </div>
    </section>
</template>

<style lang="scss" scoped></style>
