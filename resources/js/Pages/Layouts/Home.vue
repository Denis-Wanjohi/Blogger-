<script setup>
import { ref, toRefs } from 'vue'
import { usePage, Link, router } from '@inertiajs/vue3'
import Categories from '../Shared/Categories.vue'
import BlogLayout from './BlogLayout.vue'
// import EventLayout from './EventLayout.vue'
// import ProfileLayout from './Profilelayout.vue';

import HeadNav from '../Shared/HeadNav.vue'
import TabLinks from '../Shared/TabLinks.vue'
// let blogs = defineProps({ blogs: Object })
let props = defineProps({
    canLogin: {
        type: Boolean,
        value: true,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
    blogs:{
      type:Object,
    },
    comments:{
      type:Object,
    },
    likes:{
      type:Object,
    },
    liked:{
      type:Boolean
    }
 
});
let data = toRefs(props)
let blogs = data.blogs
let comments = data.comments
let likes = data.likes

// let {user} = toRefs(blogs)

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
let phoneMenu = ref(false)
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
  <HeadNav :canLogin="canLogin" class="bg-green-300"  @phoneMenu="phoneMenu = true" />
  <!-- CONTENTS -->

  <div class="flex">
    
    <Categories @faculty="selectedFaculty" @categoriesVisibility="bool" :phoneMenu = phoneMenu></Categories>
    <div>
      <!-- <TabLinks :blogPath="blogs.blogs.path"></TabLinks> -->
      <div>

        <BlogLayout @readBlog="BlogOverlay" :blogs="blogs" :comments="comments" :likes="likes"  />
      </div>
    </div>
  </div>
</template>



