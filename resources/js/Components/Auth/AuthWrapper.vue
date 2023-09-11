<script setup>
import { ref } from "vue";
import SignIn from "./SignIn.vue";
import SignUp from "./SignUp.vue";

const props = defineProps(["open"]);
const emit = defineEmits(["close"]);

let openSignin = ref(true);
let openSignup = ref(false);

const toggleSwap = () => {
    if (openSignin.value) {
        openSignin.value = false;
        openSignup.value = true;
    } else {
        openSignin.value = true;
        openSignup.value = false;
    }
};
const close = () => {
    openSignin.value = true;
    openSignup.value = false;
    emit("close");
};
</script>

<template>
    <div v-if="open" class="modal-wrapper" @click.self="close">
        <div
            class="relative mx-auto pb-6 pt-2 px-4 w-[420px] max-w-full h-auto rounded-2xl bg-white dark:bg-gray-900 overflow-y-hidden"
        >
            <div class="flex items-center justify-between">
                <div>
                    <h1
                        class="font-medium text-2xl mb-4 text-gray-700 dark:text-gray-400"
                    >
                        {{
                            (openSignin ? "Sign in" : "") ||
                            (openSignup ? "Sign up" : "")
                        }}
                    </h1>
                </div>
                <div>
                    <button
                        @click="close"
                        class="text-2xl text-gray-700 dark:text-gray-400 hover:text-gray-500 dark:hover:text-gray-200"
                    >
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div>
            <div v-if="openSignin">
                <SignIn
                    :open="openSignin"
                    @swap="toggleSwap"
                    @success="close"
                />
            </div>
            <div v-else>
                <SignUp
                    :open="openSignup"
                    @swap="toggleSwap"
                    @success="close"
                />
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.modal-wrapper {
    @apply fixed top-0 left-0 p-4 w-full h-screen max-h-full bg-black/90 bg-opacity-75 z-50 overflow-y-auto backdrop-blur-sm;
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
