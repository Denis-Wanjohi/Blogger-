<script setup>
import { router } from "@inertiajs/vue3";
import { toRefs,ref } from "vue"

const props = defineProps({
    blog:Object,

})

let {blog} = toRefs(props)


</script>

<template>
   <!-- md:w-[calc(30%)] sm:w-[calc(50%-80px)]  -->
   
   <div class="bg-blue-200  mt-5  max-h-[690px] sm:h-[850px] my-3 mx-5 shadow-cyan-700 overflow-y-auto sm:w-[95%]" >
            <div class="text-center text-3xl font-bold bg-blue-400 py-2">
                {{blog.Title }}
    
            </div>
            <div class="max-h-[400px]">
                <img :src=blog.banner alt="" class="max-h-[400px]">
            </div>
            <div class="text-center text-xl font-bold py-2 opacity-1">
                {{blog.mini_title}}
            </div>
            <div class="max-h-[260px] bg-slate-100 border-dashed border-b border-black overflow-hidden tracking-wide px-2 rounded-tr-3xl rounded-bl-3xl mx-2 shadow-xl shadow-blue-500">
                <p>
                    <span class="px-4"></span>
                    {{ blog.description }}
                </p>
            </div>
            <div class="flex mt-2  justify-between">
                <div>
                    <div @click.prevent="events=> $emit('readBlog',{data:blog})">
                        <button class="bg-green-400 ml-2 px-1 py-2 rounded-xl w-full text-xs">Read More</button>
                    </div>


                </div>
                <div>
                    <p class="text-sm text-end pr-2 italic">
                    <!-- on {{created_at}} -->
                    </p>
                    <p class="text-sm text-end italic pr-2 font-bold">
                        ~{{blog.user.username}}
                    </p>
                </div>
                
            </div>
    </div>


</template>