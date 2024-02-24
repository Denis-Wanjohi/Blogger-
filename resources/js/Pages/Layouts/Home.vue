<script setup>
import { ref, toRefs } from 'vue'
import { usePage, Link, router } from '@inertiajs/vue3'
import Categories from '../Shared/Categories.vue'
import BlogLayout from './BlogLayout.vue'
// import EventLayout from './EventLayout.vue'
// import ProfileLayout from './Profilelayout.vue';

import HeadNav from '../Shared/HeadNav.vue'
import TabLinks from '../Shared/TabLinks.vue'
let blogs = defineProps({ blogs: Object })
let {blog} = toRefs(blogs)


let showBlogOverLay = ref(false)
let {page} = usePage();

const BlogOverlay = () => {
  showBlogOverLay.value = !showBlogOverLay.value
}
let menuVisibility = ref(false)
const menu = () => {
  menuVisibility.value = !menuVisibility.value
}

let faculty = ref('')

let selectedFaculty = (data)=>{
    console.log(data.data.value)
    faculty.value = data.data.value

    if(faculty.value !== ''  || faculty.value !== null || router.page.url === '/'){
       router.page.url = '/'
       router.post(router.page.url+'blogs/'+faculty.value);
    }
}
</script>


<template>
  <!-- HEADER -->
  <HeadNav />

  <!-- CONTENTS -->

  <div class="flex">
    
    <Categories @faculty="selectedFaculty"></Categories>
    <div>
    
      <TabLinks :blogPath="blogs.blogs.path"></TabLinks>
      <div>
        <BlogLayout @readBlog="BlogOverlay" :blogs="blogs.blogs" />
      </div>
    </div>
  </div>
</template>



