<script setup>
import { Head, Link } from '@inertiajs/vue3'
import { ref, toRefs } from 'vue'

import TopBlog from '../Components/Blogs/TopBlog.vue'
import Blog from '../Components/Blogs/Blog.vue'
import ViewBlog from '../Components/Blogs/ViewBlog.vue'

const props = defineProps({
  blogs: Object,
  comments:Object,
  likes:Object
})

let showBlogOverLay = ref(false)
let selectedBlog = ref(null)
let { blogs,comments,likes} = toRefs(props)

let openBlog = (data) => {
  selectedBlog = data
  showBlogOverLay.value = true
}
</script>

<template >
  <Head title="Blogs"></Head>
  <div class="w-full h-screen overflow-y-scroll" style="scrollbar-width: none;">
    <section>
      <TopBlog :blogs="blogs.data" @readBlog="openBlog"></TopBlog>
    </section>
    <section class="pb-20 w-full bg-red-500 overflow-y-auto" style="scrollbar-width: none;">
      <div class="flex flex-wrap justify-evenly">
        <div class="md:w-[30%]" v-for="data in blogs.data" :key="data">
          <Blog :blog="data" @readBlog="openBlog"></Blog>
        </div>
      </div>one
      <div class="flex w-fit pb-10 mt-2 mx-auto">
        <!--  -->
        <div v-for="link in blogs.meta.links" :key="link">
          
          <Link
            :href="link.url"
            v-html="link.label"
            v-if="link.url"
            preserve-scroll="true"
            class="mx-1 p-2 border-gray-300 border rounded-md"
          ></Link>
        </div>
      </div>
    </section>
    <section class="bg-red-500" >
      <ViewBlog
    
        class="w-full h-screen mx-auto pb-10 pt-3 absolute top-[60px]"
        @closeOverLay=" showBlogOverLay = false"
        :class="[showBlogOverLay ? 'block' : 'hidden']"
        :post="selectedBlog"
        :comments="comments"
        :likes="likes"
      ></ViewBlog>
    </section>
  </div>
</template>