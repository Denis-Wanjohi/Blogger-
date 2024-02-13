<script setup>
import HeadNav from '../../Shared/HeadNav.vue'
</script>

<template >
    <HeadNav></HeadNav>
    <div class="h-screen">
        <div class="sm:w-[90%] sm:h-[90%] sm:my-5  shadow border sm:rounded-xl mx-auto bg-teal-500 ">
            <p class="text-3xl font-bold text-center shadow  sm:hidden">POST BLOG</p>
            
        <form action="" @submit.prevent="submit" class=" h-[90%] my-10 text-center pt-5 py-4 sm:w-3/4  w-full mx-auto flex flex-col justify-between bg-red-300">
                        <div class="flex sm:flex-row flex-col sm:w-3/4 mx-auto justify-between">
                            <div class="flex flex-col sm:w-[70%] w-full  mx-auto ">
                                <label for="title" class="sm:text-start mb-2 ">Title</label>
                                <input type="text" name="title" class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                            </div>
                            <div class="flex flex-col sm:w-[70%] sm:ml-3 w-full  mx-auto ">
                                <label for="mini_title" class="sm:text-start mb-2 ">Mini-Title</label>
                                <input type="text" name="mini_title" class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                            </div>
                        </div>
                        <div class="flex flex-col sm:w-3/4 w-full mx-auto">
                            <label for="username" class="sm:text-start mb-2 ">Banner</label>
                            <input type="file"  class="w-full bg-white pt-2 mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                        </div>
                        <div class="flex flex-col sm:w-3/4 w-full mx-auto">
                            <label for="username" class="sm:text-start mb-2 ">Details</label>
                            <textarea name="" id="" cols="30" rows="10" class="border-2 border-black rounded-lg min-h-[200px] max-h-[250px]"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-500 font-bold mt-5 px-5 py-2 rounded-md hover:bg-blue-700 sm:w-1/2">
                                POST
                            </button>
                        </div>
                    </form>
    </div>
    </div>
    
</template>