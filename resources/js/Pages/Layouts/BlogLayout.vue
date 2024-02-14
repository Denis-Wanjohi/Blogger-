<script setup>
import TopBlog from '../Components/Blogs/TopBlog.vue';

import { Head,Link } from '@inertiajs/vue3';
import { ref } from 'vue';

import Blog from '../Components/Blogs/Blog.vue';
import { TailwindPagination } from 'laravel-vue-pagination';

let props = defineProps({
        blogs : Object
})

const getResults = async (page = 1) => {
    const response = await fetch(`http://127.0.0.1:8000/?page=${page}`);
    props.value = await response.json();
}

getResults();

</script>

<template >
    <Head title="Blogs"></Head>
    <div class="w-full h-screen overflow-y-scroll">
            <section>
                <TopBlog></TopBlog>
            </section>
            <section class="flex flex-wrap">
                <div v-for="blogData,index in props.blogs.data" :key="index" class="flex flex-wrap  justify-around" >
                    <!-- <div v-for="blogData,index in blog.data" :key="index"  class="flex flex-wrap justify-around"> -->
                        <Blog @readBlog="$emit('readBlog')" class="md:w-[350px] sm:w-[500px]" :blog="blogData"></Blog>
                    <!-- </div> -->
                </div>

                
                <!-- <div v-for="blogLink,index in props.blogs.links" :key="index" class="flex justify-center"> -->
                    <!-- <div v-for="blogLink,index in blog.links" :key="index"> -->
                           <!-- <Link :href="blogLink.url" v-html="blogLink.label" class="mx-2"></Link> -->
                    <!-- </div> -->
                <!-- </div> -->
                
                <TailwindPagination
                    :data="props.blogs.data"
                    @pagination-change-page="getResults"
                />
            </section>

    </div>
</template>