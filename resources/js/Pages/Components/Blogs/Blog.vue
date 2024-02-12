<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="bg-blue-200 mt-5 md:w-[calc(30%)] sm:w-[calc(50%-80px)] h-[690px] sm:h-[850px] pb-3 my-3 mx-5 shadow-cyan-700">
            <div class="text-center text-3xl font-bold bg-blue-400 py-2">
                BEST SHOT
            </div>
            <img src="/cat.jpeg" alt="" class="h-[40%] w-full object-cover">
            <div class="text-center text-xl font-bold py-2 opacity-1">
                who is that ???
            </div>
            <div class="max-h-[40%] bg-slate-100 border-dashed border-b border-black overflow-hidden tracking-wide px-2 rounded-tr-3xl rounded-bl-3xl mx-2 shadow-xl shadow-blue-500">
                <p>
                    <span class="px-4">
                    </span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sed tempore possimus. Facilis nesciunt debitis totam odit provident enim possimus minus voluptate maiores veritatis qui nemo, blanditiis cum, sit distinctio ad natus quia? Necessitatibus ab, accusantium veritatis laborum quibusdam tenetur quod voluptatem magni itaque accusamus impedit consequuntur repudiandae dignissimos libero molestias dolore assumenda ut dolorum a. A nostrum laborum similique harum sint repellat illo eum obcaecati maiores perferendis aut soluta dolor ratione, vero, ipsum doloribus deleniti vel necessitatibus, eaque in. Iure, enim in? Nam quo quod expedita eos, consequatur ducimus, esse voluptates harum maxime voluptatem mollitia dolorem voluptatum? Facilis similique error harum fugiat, aperiam vitae totam distinctio rerum, beatae corporis ab voluptates nostrum. Atque praesentium quod beatae sint ipsa quasi a blanditiis corporis recusandae culpa eos, debitis velit! Rerum modi temporibus praesentium eaque excepturi esse unde pariatur illum nisi in placeat atque mollitia nesciunt voluptatem sit debitis similique ab, voluptates, itaque blanditiis dolorum! Tempora, nobis quae quasi magnam eius repudiandae quod libero non officiis sint iusto animi explicabo dignissimos aspernatur quia, similique nihil assumenda molestias! Facilis error, a necessitatibus molestiae, quo asperiores fugiat iste numquam soluta sunt, fugit accusamus. Modi, impedit. Aliquam molestiae in cumque reprehenderit dolorem, nihil culpa sapiente?
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