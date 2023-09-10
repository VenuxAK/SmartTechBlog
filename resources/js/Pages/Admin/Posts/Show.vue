<script>
export default {
    layout: AdminLayout,
};
</script>
<script setup>
import AdminLayout from "../../../Shared/Admin/AdminLayout.vue";
</script>

<template>
    <section>
        <div>
            <h1 class="text-3xl text-gray-700 dark:text-gray-400 mb-4">
                Post Detail
            </h1>
        </div>
        <div>
            <div class="mb-5">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                    <div>
                        <h1 class="post-title">Post title</h1>
                    </div>
                    <div>
                        <h5 class="text-gray-600 dark:text-gray-500">9 Sep, 2023</h5>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg text-gray-700 dark:text-gray-400">
                        Author: <span class="font-bold italic">Developer</span>
                    </h3>
                </div>
            </div>
            <div class="post-detail">
                <p class="text-base text-gray-700 dark:text-gray-400">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Cumque deleniti cupiditate in accusamus vero eveniet amet
                    rem libero suscipit, ipsa voluptatem ipsam maiores facere
                    voluptates vel iste repudiandae eligendi quaerat labore.
                    Harum ratione maxime omnis eos nemo aliquam a voluptas?
                    Deleniti nobis, eos eligendi nihil reprehenderit repellendus
                    magni libero illum beatae suscipit amet corrupti, alias id
                    earum excepturi eius impedit nemo odit aliquid eaque
                    perferendis quidem? Sit a molestias provident necessitatibus
                    nihil sequi culpa illum recusandae mollitia nesciunt eaque
                    deleniti ipsam, veniam obcaecati dolore reprehenderit eum
                    eos, architecto maiores quo. Iure temporibus laboriosam
                    illum iusto fugit, sed magni dolores sunt? Molestiae dolor
                    voluptate eius nisi ut labore ducimus nulla? Quaerat quas
                    repellat sint? Quos, odit omnis ad maiores excepturi animi
                    itaque iste exercitationem non voluptatibus dolor nihil
                    iusto illo, unde sequi deserunt consequatur id, dolorum nam
                    labore. Quas praesentium quam ipsum voluptatibus facilis?
                    Sunt earum iusto recusandae magni minima nobis minus
                    reprehenderit doloribus, culpa tenetur ratione, tempora
                    officia. Velit repellat, officiis illo quidem deserunt
                    dolorem consequuntur in, ab quis nemo odit quibusdam a neque
                    tempore dolorum necessitatibus corporis sapiente dolor
                    possimus iusto numquam. Accusamus earum minima iusto, illo
                    quo maxime neque distinctio architecto dignissimos aut
                    error. Expedita autem aut unde.
                </p>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
.post-title {
    @apply text-3xl text-gray-700 dark:text-gray-400 font-bold;
}
</style>
