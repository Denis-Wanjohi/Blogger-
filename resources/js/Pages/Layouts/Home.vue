<script setup>
import { ref } from 'vue'
import { usePage, Link } from '@inertiajs/vue3'
import Categories from '../Shared/Categories.vue'
import BlogLayout from './BlogLayout.vue'
import EventLayout from './EventLayout.vue'
// import ProfileLayout from './Profilelayout.vue';

import HeadNav from '../Shared/HeadNav.vue'
import TabLinks from '../Shared/TabLinks.vue'
let blogs = defineProps({ blogs: Object })

let showBlogOverLay = ref(false)

const BlogOverlay = () => {
  showBlogOverLay.value = !showBlogOverLay.value
}

let menuVisibility = ref(false)
const menu = () => {
  menuVisibility.value = !menuVisibility.value
}

const getResults = async (page = 1) => {
  alert()
  const response = await fetch(`http://127.0.0.1:8000/blog/?page=${page}`)
  blogs.value = await response.json()
}
</script>


<template>
  <!-- HEADER -->
  <HeadNav />

  <!-- CONTENTS -->

  <div class="flex">
    <Categories></Categories>
    <div>
      <TabLinks :blogPath="blogs.blogs.path"></TabLinks>
      <div>
        <BlogLayout @readBlog="BlogOverlay" :blogs="blogs.blogs" />
      </div>
    </div>
  </div>
</template>



