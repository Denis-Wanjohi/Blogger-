<script setup>
import { ref } from 'vue'
import { usePage, Link } from '@inertiajs/vue3'
import Categories from '../Shared/Categories.vue'
import BlogLayout from './BlogLayout.vue'
import EventLayout from './EventLayout.vue'
// import ProfileLayout from './Profilelayout.vue';
import ViewBlog from '../Components/Blogs/ReadBlog.vue'
import HeadNav from '../Shared/HeadNav.vue'
import { TailwindPagination } from 'laravel-vue-pagination';

let blogs = defineProps({ blogs: Object })


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
    <div class="bg-green-600" v-if="$page.url === '/' || $page.url === '/events'  ">
      <Categories></Categories>
    </div>

    <div
      class="w-full h-screen overflow-y-auto"
      style="scrollbar-color: white white;"
      v-if="$page.url === '/' || $page.url === '/events'  "
    >
      <section
        class="text-center flex justify-between text-2xl font-thin border sticky top-0 bg-gray-800 border-black text-white w-full"
      >
        <Link
          class="w-full"
          href="/"
          :class="[$page.url === '/' ? 'font-bold bg-orange-500' :'']"
        >BLOGS</Link>
        <Link
          class="w-full"
          href="/events"
          :class="[$page.url === '/events' ? 'font-bold bg-orange-500' :'']"
        >EVENTS</Link>
      </section>
      <div v-for="blog,index in blogs" :key="index">
        
        {{ blog.links[0].url }}
        <!-- <BlogLayout v-if="$page.url === '/'" @readBlog="BlogOverlay" :blogs="blog" />
        <TailwindPagination
          :data="blog.links()"
          @pagination-change-page="getResults"
        /> -->
      </div>
      <EventLayout v-if="$page.url === '/events'"></EventLayout>
    </div>
  </div>

  <ViewBlog
    class="w-full h-screen mx-auto pb-10 pt-3 absolute top-[60px]"
    @CloseBlogOverLay="BlogOverlay"
    :class="[showBlogOverLay ? 'block' : 'hidden']"
  ></ViewBlog>

  <!-- <Blogs></Blogs> -->

  <!-- <section v-if="$page.url === '/' || $page.url === '/events'  ">
    <div class="min-h-[100px] bg-green-400 w-full sm:flex justify-around hidden ">
      <div>
        <h2 class="font-bold text-2xl">Categories</h2>
        <ul class="list-none">
          <li>Science</li>
          <li>Law</li>
          <li>Education</li>
          <li>IT and Computers</li>
          <li>Bussiness</li>
          <li>Media</li>
        </ul>
      </div>
      <div class=" min-w-[250px]">
        <h2 class="font-bold text-2xl">Contact us</h2>
            <a href="tel:+254723892001" class="flex align-middle justify-start hover:font-bold hover:text-xl mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path fill="currentColor" fill-opacity="0" stroke-dasharray="64" stroke-dashoffset="64" d="M8 3C8.5 3 10.5 7.5 10.5 8C10.5 9 9 10 8.5 11C8 12 9 13 10 14C10.3943 14.3943 12 16 13 15.5C14 15 15 13.5 16 13.5C16.5 13.5 21 15.5 21 16C21 18 19.5 19.5 18 20C16.5 20.5 15.5 20.5 13.5 20C11.5 19.5 10 19 7.5 16.5C5 14 4.5 12.5 4 10.5C3.5 8.5 3.5 7.5 4 6C4.5 4.5 6 3 8 3Z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/><animate fill="freeze" attributeName="fill-opacity" begin="0.6s" dur="0.15s" values="0;0.3"/><animateTransform attributeName="transform" begin="0.6s;lineMdPhoneCallTwotoneLoop0.begin+2.6s" dur="0.5s" type="rotate" values="0 12 12;15 12 12;0 12 12;-12 12 12;0 12 12;12 12 12;0 12 12;-15 12 12;0 12 12"/></path><path stroke-dasharray="4" stroke-dashoffset="4" d="M14 7.04404C14.6608 7.34734 15.2571 7.76718 15.7624 8.27723M16.956 10C16.6606 9.35636 16.2546 8.77401 15.7624 8.27723" opacity="0"><set id="lineMdPhoneCallTwotoneLoop0" attributeName="opacity" begin="0.7s;lineMdPhoneCallTwotoneLoop0.begin+2.7s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s;lineMdPhoneCallTwotoneLoop0.begin+2.7s" dur="0.2s" values="4;8"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.3s;lineMdPhoneCallTwotoneLoop0.begin+3.3s" dur="0.3s" values="0;4"/><set attributeName="opacity" begin="1.6s;lineMdPhoneCallTwotoneLoop0.begin+3.6s" to="0"/></path><path stroke-dasharray="10" stroke-dashoffset="10" d="M20.748 9C20.3874 7.59926 19.6571 6.347 18.6672 5.3535M15 3.25203C16.4105 3.61507 17.6704 4.3531 18.6672 5.3535" opacity="0"><set attributeName="opacity" begin="1s;lineMdPhoneCallTwotoneLoop0.begin+3s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="1s;lineMdPhoneCallTwotoneLoop0.begin+3s" dur="0.2s" values="10;20"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.5s;lineMdPhoneCallTwotoneLoop0.begin+3.5s" dur="0.3s" values="0;10"/><set attributeName="opacity" begin="1.8s;lineMdPhoneCallTwotoneLoop0.begin+3.8s" to="0"/></path></g></svg>

            0723892001
            </a>

            <a href="mailto:gightkingss@gmail.com" class="flex mt-5 hover:font-bold ">
                <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"><rect width="18" height="14" x="3" y="5" stroke-dasharray="64" stroke-dashoffset="64" rx="1"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/></rect><path stroke-dasharray="24" stroke-dashoffset="24" d="M3 6.5L12 12L21 6.5"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s" dur="0.4s" values="24;0"/></path></g></svg>

                gightkingss@gmail.com

            </a>

      </div>
    </div>
  </section>-->
</template>



