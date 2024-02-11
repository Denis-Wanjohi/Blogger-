<script setup>
import Blog from './Blog.vue';
import { Head } from '@inertiajs/vue3';
</script>



<template>
    <Head title="Blogs"></Head>

    <div class="flex  flex-wrap  w-full justify-around ">
        <Blog></Blog>
        <Blog></Blog>
        <Blog></Blog>
        <Blog></Blog>
        <Blog></Blog>
        <Blog></Blog>
    </div>
   

</template>