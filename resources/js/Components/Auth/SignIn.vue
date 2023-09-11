<script setup>
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";
import ErrorMessage from "../Utils/ErrorMessage.vue";

const props = defineProps(["open"]);
const emit = defineEmits(["swap", "success"]);

let form = useForm({ email: "", password: "" });

const signin = () => {
    form.post("/signin", {
        onSuccess: () => {
            emit("success");
        },
    });
};
const swapSignup = () => {
    emit("swap");
};
</script>

<template>
    <div class="">
        <form @submit.prevent="signin">
            <div class="mb-6">
                <label for="signin_email" class="form-label"
                    >Email address</label
                >
                <input
                    type="email"
                    v-model="form.email"
                    id="signin_email"
                    class="form-input"
                    />
                    <!-- required -->
                <ErrorMessage :message="form.errors.email" />
            </div>
            <div class="mb-6">
                <label for="singin_password" class="form-label">Password</label>
                <input
                    type="password"
                    v-model="form.password"
                    id="singin_password"
                    class="form-input"
                    />
                    <!-- required -->
                <ErrorMessage :message="form.errors.password" />
            </div>

            <div class="flex flex-col space-y-4">
                <div class="text-sm text-primary">
                    <span>Doesn't have an account yet?</span>
                    <button
                        type="button"
                        class="font-bold pl-2"
                        @click="swapSignup"
                    >
                        Sign up
                    </button>
                </div>
                <div>
                    <button type="submit" class="signin-btn">Sign in</button>
                </div>
            </div>
        </form>
    </div>
</template>

<style lang="scss" scoped>
.modal-wrapper {
    @apply fixed top-0 left-0 flex items-center justify-center p-4 w-full h-screen max-h-full bg-black/90 bg-opacity-75 z-50 overflow-hidden backdrop-blur-sm;
}

.form-input {
    @apply bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500;
}
.form-label {
    @apply block mb-2 text-sm font-medium text-gray-900 dark:text-white;
}

.signin-btn {
    @apply text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800;
}
</style>
