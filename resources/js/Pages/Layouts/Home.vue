<script setup>
import { ref, toRefs } from 'vue'
import { usePage, Link } from '@inertiajs/vue3'
import Categories from '../Shared/Categories.vue'
import BlogLayout from './BlogLayout.vue'
import EventLayout from './EventLayout.vue'
// import ProfileLayout from './Profilelayout.vue';

import HeadNav from '../Shared/HeadNav.vue'
import TabLinks from '../Shared/TabLinks.vue'
let blogs = defineProps({ blogs: Object })
let blog = toRefs(blogs)

let showBlogOverLay = ref(false)

const BlogOverlay = () => {
  showBlogOverLay.value = !showBlogOverLay.value
}

let menuVisibility = ref(false)
const menu = () => {
  menuVisibility.value = !menuVisibility.value
}
</script>


<template>
  <!-- HEADER -->
  <HeadNav />

  <!-- CONTENTS -->

  <div class="flex">
    
    <Categories :path="blogs.blogs.path"></Categories>
    <div>
      <TabLinks :blogPath="blogs.blogs.path"></TabLinks>
      {{ blogs.blogs.path }}
      <div>
        <BlogLayout @readBlog="BlogOverlay" :blogs="blogs.blogs" />
      </div>
    </div>
  </div>
</template>



