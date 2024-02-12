<script setup>
import Blog from './Blog.vue';
import { Head } from '@inertiajs/vue3';


const readBlogs = ()=>{
    alert()
}
</script>



<template>
    <Head title="Blogs"></Head>

    <div class="flex  flex-wrap  w-full justify-around ">
        <Blog @readBlog="$emit('readBlog')"></Blog>
        <Blog @readBlog="$emit('readBlog')"></Blog>
        <Blog @readBlog="$emit('readBlog')"></Blog>
        <Blog @readBlog="$emit('readBlog')"></Blog>
        <Blog @readBlog="$emit('readBlog')"></Blog>
        <Blog @readBlog="$emit('readBlog')"></Blog>
        
    </div>
   

</template>