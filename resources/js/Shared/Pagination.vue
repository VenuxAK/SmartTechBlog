<script setup>
const props = defineProps(["links"]);
</script>
<template>
    <div class="flex items-center justify-between">
        <div>
            <Component
                :is="links.prev_page_url ? 'Link' : 'button'"
                :href="links.prev_page_url"
                disabled
                class="disabled:text-gray-400"
                v-html="'Previous'"
            />
        </div>
        <div>
            <span>{{ links.current_page }} of {{ links.last_page }}</span>
        </div>
        <div>
            <Component
                :is="links.next_page_url ? 'Link' : 'button'"
                :href="links.next_page_url"
                disabled
                class="disabled:text-gray-400"
                v-html="'Next'"
            />
        </div>
    </div>
</template>
