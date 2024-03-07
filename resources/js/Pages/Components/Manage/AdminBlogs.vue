<script setup>
import { toRefs } from "vue"
import HeadNav from "@/Pages/Shared/HeadNav.vue";
import { router } from "@inertiajs/vue3";

const props = defineProps({
    blogs:Object
})
let {blogs} = toRefs(props)
</script>
<template>
    <HeadNav></HeadNav>
    <div>
        <table class="w-[90%] mx-auto mt-2 border border-collapse" v-if="blogs.length !== 0">
            <thead class="bg-cyan-400">
                <tr class="text-sm">
                    <th>TITLE</th>
                    <th>MINI TITLE</th>
                    <th>BANNER</th>
                    <th>FACULTY</th>
                    <th>DESCRIPTION</th>
                    <!-- <th>POSTED ON</th> -->
                    <th class="bg-green-300" colspan="2">OPTIONS</th>
                </tr>
            </thead>
            <tbody >
                <tr class="text-center bg-green-500 h-[80px]" v-for="blog in blogs">
                    <td>{{blog.Title}}</td>
                    <td>{{blog.mini_title}}</td>
                    <td><img :src=blog.banner class="w-[100px] h-[80px] object-fill" alt=""></td>
                    <td class="text-center">{{blog.faculty}}</td>
                    <td class="bg-red-500  border-2 border-black"><p class="h-[100px] overflow-auto" style="scrollbar-width: none;">{{ blog.description }}</p></td>
                    <!-- <td>{{blog.created_at.format(YYYYMMDD)}}</td> -->
                    <!-- <td>
                        <button class="text-sm font-bold" 
                        @click.prevent="router.get('/')"
                        >EDIT</button>
                    </td> -->
                    <td>
                        <button class="" 
                        @click.prevent="router.post('/manage/blog/delete',{id:blog.id})"
                        >
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512">
                            <rect width="512" height="512" fill="none" />
                            <path fill="black" d="M296 64h-80a7.91 7.91 0 0 0-8 8v24h96V72a7.91 7.91 0 0 0-8-8" />
                            <path fill="black" d="M432 96h-96V72a40 40 0 0 0-40-40h-80a40 40 0 0 0-40 40v24H80a16 16 0 0 0 0 32h17l19 304.92c1.42 26.85 22 47.08 48 47.08h184c26.13 0 46.3-19.78 48-47l19-305h17a16 16 0 0 0 0-32M192.57 416H192a16 16 0 0 1-16-15.43l-8-224a16 16 0 1 1 32-1.14l8 224A16 16 0 0 1 192.57 416M272 400a16 16 0 0 1-32 0V176a16 16 0 0 1 32 0Zm32-304h-96V72a7.91 7.91 0 0 1 8-8h80a7.91 7.91 0 0 1 8 8Zm32 304.57A16 16 0 0 1 320 416h-.58A16 16 0 0 1 304 399.43l8-224a16 16 0 1 1 32 1.14Z" />
                        </svg>
                        <!-- <svg class="hidden hover:block"  xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <rect width="24" height="24" fill="none" />
                            <path fill="black" d="m20.37 8.91l-1 1.73l-12.13-7l1-1.73l3.04 1.75l1.36-.37l4.33 2.5l.37 1.37zM6 19V7h5.07L18 11v8a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2" />
                        </svg> -->
                    </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div v-else class="w-full  pt-[10px]">
            <p class="mx-auto font-bold text-4xl italic">...no posted blogs</p>
            <img src="/oops.gif" class="mx-auto sm:w-1/2 mt-[50px]" alt="">
        </div>
    </div>

</template>