<script setup>
// import Blog from './Blog.vue'
import { Head,Link } from '@inertiajs/vue3'
import { ref } from 'vue'

let blogs = defineProps({
  blogs: Object,
})
// let blogs = ['one','two']
// let {blog} = ref(props)
</script>



<template>
  <Head title="Blogs"></Head>
  <div v-for="blog,index in  blogs" :key="index" class="flex flex-wrap w-fit justify-around">
    <div v-for="blogData,index in  blog.data" :key="index" class="flex flex-wrap md:w-[30%] sm:w-[50%] justify-around">
      <Blog @readBlog="$emit('readBlog')" :blog="blogData"></Blog>
    </div>
  </div>
  <div v-for="blog,index in  blogs" :key="index" class="flex flex-wrap w-fit justify-around">
    <div v-for="blogLinks,index in  blog.links" :key="index" class="flex w-full justify-around">
      <!-- <Blog @readBlog="$emit('readBlog')" :blog="blogData"></Blog> -->
      <Link :href="blogLinks.url" v-html="blogLinks.label"></Link>
    </div>
  </div>
 
</template>