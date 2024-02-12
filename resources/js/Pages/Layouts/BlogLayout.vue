<script setup>
import TopBlog from '../Components/Blogs/TopBlog.vue';
import Blogs from '../Components/Blogs/Blogs.vue';
import { Head } from '@inertiajs/vue3';


const readBlog = ()=>{
    alert()
}


</script>



<template >
    <Head title="Blogs"></Head>
    <div class="w-full h-screen overflow-y-scroll">
            <section>
                <TopBlog></TopBlog>
            </section>
            <section>
                <Blogs @readBlog="readBlog"></Blogs>
                <!-- <ViewBlog></ViewBlog> -->
            </section>
        <!-- </div -->
    </div>
</template>