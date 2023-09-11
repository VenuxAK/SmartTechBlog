<script setup>
import { computed } from "vue";

const props = defineProps({ status: Number });

const title = computed(() => {
    return {
        503: "503: Service Unavailable",
        500: "500: Server Error",
        404: "404: Page Not Found",
        403: "403: Forbidden",
    }[props.status];
});

const description = computed(() => {
    return {
        503: "Sorry, we are doing some maintenance. Please check back soon.",
        500: "Whoops, something went wrong on our servers.",
        404: "Sorry, the page you are looking for could not be found. You'll find lots to explore on the home page.",
        403: "Sorry, you are forbidden from accessing this page.",
    }[props.status];
});
</script>

<template>
    <section
        class="bg-white dark:bg-gray-950 w-screen h-screen flex items-center justify-center"
    >
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1
                    class="mb-4 text-3xl tracking-tight font-extrabold lg:text-6xl text-rosy-600 dark:text-rosy-500"
                >
                    {{ title }}
                </h1>
                <p
                    class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400"
                >
                    {{ description }}
                </p>
                <a
                    href="/admin/dashboard"
                    class="inline-flex text-white bg-rosy-600 hover:bg-rosy-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-rosy-900 my-4"
                    >Back to Homepage</a
                >
            </div>
        </div>
    </section>
    <!-- <div>
        <div>{{ description }}</div>
    </div> -->
</template>
