<script setup>
import TopBlog from '../Components/Blogs/TopBlog.vue';
import Blogs from '../Components/Blogs/Blogs.vue';
import { Head } from '@inertiajs/vue3';
import { defineProps,ref } from 'vue';


let blogs = defineProps({
        blogs : Object
})
// let {blogs} = ref(props.blogs)
// let {blogs} = ref(blogs)




</script>



<template >
    <Head title="Blogs"></Head>
    <div class="w-full h-screen overflow-y-scroll">
            <section>
                <TopBlog></TopBlog>
            </section>
            <section>
              
                <Blogs @readBlog="$emit('readBlog')" :blogs="blogs"></Blogs>
                <!-- <ViewBlog></ViewBlog> -->
            </section>
        <!-- </div -->
    </div>
</template>