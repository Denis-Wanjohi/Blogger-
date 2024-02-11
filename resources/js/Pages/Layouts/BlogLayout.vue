<script setup>
import TopBlog from '../Components/Blogs/TopBlog.vue';
import Blogs from '../Components/Blogs/Blogs.vue';
import { Head } from '@inertiajs/vue3';


</script>



<template >
    <Head title="Blogs"></Head>
    <div class="w-full h-screen overflow-y-scroll">

        <!-- <div  class="bg-green-600">
            <Categories></Categories>
        </div>
   
        <div class="w-full h-screen overflow-scroll">
            <section class="text-center flex justify-between text-2xl font-thin border sticky top-0 bg-gray-800 border-black text-white">
                <div class="w-full bg-orange-500">
                    BLOGS
                </div>
                <div class="w-full hover:bg-orange-200">
                    EVENTS
                </div>
            </section> -->



            <section>
                <TopBlog></TopBlog>
            </section>
            <section class="pb-">
                <Blogs></Blogs>
                <!-- <ViewBlog></ViewBlog> -->
            </section>



        <!-- </div -->
  

    </div>
</template>