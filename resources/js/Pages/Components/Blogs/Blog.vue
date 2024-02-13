<script setup>
import { Link } from '@inertiajs/vue3';
import { reactive, ref } from 'vue';

let props = defineProps({
    blog:Object
})

const title = ref(props.blog.Title)
const mini_title = ref(props.blog.mini_title)
const description = ref(props.blog.description)

</script>

<template>
   
    <div class="bg-blue-200 mt-5 md:w-[calc(30%)] sm:w-[calc(50%-80px)] max-h-[690px] sm:h-[850px]  my-3 mx-5 shadow-cyan-700">
            <div class="text-center text-3xl font-bold bg-blue-400 py-2">
                {{title}}
            </div>
            <img src="/cat.jpeg" alt="" class="h-[40%] w-full object-cover">
            <div class="text-center text-xl font-bold py-2 opacity-1">
                {{mini_title}}
            </div>
            <div class="max-h-[40%] bg-slate-100 border-dashed border-b border-black overflow-hidden tracking-wide px-2 rounded-tr-3xl rounded-bl-3xl mx-2 shadow-xl shadow-blue-500">
                <p>
                    <span class="px-4"></span>
                    {{ description }}
                </p>
            </div>
            <div class="flex mt-2  justify-between">
                <div>
                    <div @click.prevent="$emit('readBlog')">
                        <button class="bg-green-400 ml-2 px-1 py-2 rounded-xl w-full text-xs">Read More</button>
                    </div>


                </div>
                <div>
                    <p class="text-sm text-end pr-2 italic">
                    at 14:00:00 13.02.2024
                    </p>
                    <p class="text-sm text-end italic pr-2 font-bold">
                        ~kim kimani
                    </p>
                </div>
                
            </div>
        </div>
</template>