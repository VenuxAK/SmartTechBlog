<script>
export default {
    layout: Layout,
};
</script>
<script setup>
import Layout from "../Shared/Layout.vue";
</script>

<template>
    <section class="animate__animated animate__fadeIn">
        <div
            class="py-6 lg:py-8 lg:mb-6 text-center lg:border-b lg:border-gray-300 dark:lg:border-gray-800"
        >
            <h5 class="text-lg text-gray-800 dark:text-gray-400">
                Saturday, August 5, 2023
            </h5>
            <h1 class="text-4xl font-medium">
                Mastering Object-Oriented Programming: Building Robust Software
                Structures
            </h1>
        </div>
        <div
            class="w-full flex flex-col space-y-6 lg:space-y-0 lg:flex-row space-x-6"
        >
            <div
                class="w-full pb-8 lg:w-[25%] border-b border-gray-300 dark:border-gray-800 lg:border-0"
            >
                <div
                    class="flex items-center justify-center lg:justify-start space-x-2 mb-4 lg:mb-6"
                >
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img
                            src="/imgs/profile-avatar.png"
                            alt=""
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <div>
                        <h5 class="text-sm">Author Name</h5>
                        <Link href="#" class="text-sm text-primary"
                            >@twitter</Link
                        >
                    </div>
                </div>
                <div
                    class="pt-4 lg:py-6 lg:pr-8 border-t border-gray-300 dark:border-gray-800"
                >
                    <h3
                        class="text-center lg:text-start uppercase text-xs dark:text-gray-400 font-medium"
                    >
                        tags
                    </h3>
                    <ul
                        class="flex justify-center lg:justify-start flex-wrap gap-x-2"
                    >
                        <li v-for="i in 6" :key="i">
                            <Link
                                :href="'#' + i"
                                class="uppercase text-primary text-base"
                            >
                                tag{{ i }}
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lg:w-[75%] post-detail">
                <div class="w-full mb-5">
                    <img src="/imgs/posts/post1.png" alt="" />
                </div>
                <div class="text-gray-800 dark:text-gray-400">
                    <p class="">
                        In the ever-evolving landscape of software development,
                        Object-Oriented Programming (OOP) stands as a
                        foundational pillar, enabling developers to craft
                        intricate, efficient, and maintainable code structures.
                        In this comprehensive article, we embark on a journey
                        through the realms of OOP, delving deep into its core
                        concepts, unveiling its numerous benefits, and
                        showcasing real-world applications that highlight its
                        prowess. <br />

                        Object-Oriented Programming isn't just a coding
                        technique; it's a paradigm that has transformed the way
                        software is designed, written, and maintained. We'll
                        start by demystifying key concepts such as classes,
                        objects, inheritance, and encapsulation. Understanding
                        these building blocks is essential for creating modular,
                        reusable code that streamlines development workflows and
                        reduces errors. <br />
                    </p>
                    <p>
                        As we journey further, we'll explore the significance of
                        software architecture in the OOP paradigm. Discover how
                        OOP principles align seamlessly with various
                        architectural patterns, from Model-View-Controller (MVC)
                        to Dependency Injection (DI), laying the groundwork for
                        applications that are both flexible and extensible.
                        <br />

                        Benefits of OOP are manifold, and we'll uncover them
                        all. By promoting code reusability, OOP fosters
                        efficiency and minimizes redundancy, resulting in
                        cleaner, more elegant solutions. The ability to model
                        real-world entities directly in code enhances
                        communication between developers and stakeholders,
                        leading to a deeper understanding of the software's
                        purpose and functionality. <br />
                    </p>
                    <img src="/imgs/posts/post2.png" class="my-3" alt="" />
                    <p>
                        In this article, we won't stop at theory. We'll guide
                        you through practical implementations, showcasing how
                        OOP can be leveraged to design intricate systems,
                        develop interactive user interfaces, and handle complex
                        data structures. Whether you're an experienced developer
                        looking to refine your skills or a newcomer eager to
                        grasp the essence of modern software design, this
                        article is a treasure trove of insights. <br />

                        So, join us on this expedition into the heart of
                        Object-Oriented Programming. Unearth the secrets of
                        building robust software structures that withstand the
                        test of time and technological shifts. Elevate your
                        coding prowess, unravel the mysteries of software
                        architecture, and embark on a journey that transforms
                        you into a master of OOP. The digital realm awaits your
                        creative touch – let's dive in together and shape the
                        future of software, one line of code at a time. <br />
                    </p>
                </div>
            </div>
        </div>
        <div
            class="mt-8 mb-12 pt-8 border-t border-gray-400 dark:border-gray-800"
        >
            <div class="w-full text-center">
                <button
                    class="font-medium text-gray-800 dark:text-gray-400 hover:text-gray-600 dark:hover:text-gray-200"
                >
                    Load Comments
                </button>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
.post-detail {
    img {
        @apply w-full;
    }
}
</style>
<!--  Software Development, Object-Oriented Programming, Coding Techniques, Software Architecture -->
