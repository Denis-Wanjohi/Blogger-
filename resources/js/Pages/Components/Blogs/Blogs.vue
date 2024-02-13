<script setup>
import Blog from './Blog.vue'
import { Head } from '@inertiajs/vue3'
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
    <div v-for="blg,index in  blog" :key="index" class="flex flex-wrap w-fit justify-around">
      <div v-for="bg,index in  blg" :key="index" class="flex flex-wrap w-fit justify-around">
        <div class="flex flex-wrap w-fit justify-around" v-for="b,index in  bg" :key="index">
          <Blog @readBlog="$emit('readBlog')" :blog="b"></Blog>
          <!-- <Blog @readBlog="$emit('readBlog')"></Blog>
                    <Blog @readBlog="$emit('readBlog')"></Blog>
                    <Blog @readBlog="$emit('readBlog')"></Blog>
                    <Blog @readBlog="$emit('readBlog')"></Blog>
          <Blog @readBlog="$emit('readBlog')"></Blog>-->
        </div>
      </div>
    </div>
  </div>
</template>