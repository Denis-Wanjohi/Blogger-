<script setup>
import { ref,computed, onMounted ,onBeforeUnmount} from 'vue';

const props = defineProps({blogs:Object})
let blogNumber = ref(0);
    const updateValue = () => {
        blogNumber.value = Math.floor(Math.random()*props.blogs.length) 
    };
    setInterval(updateValue, 4000);


    // On component mount, start the interval
    //onMounted(() => {
    //   console.log(blogNumber.value)
    //});

    // // On component destroy, clear the interval
    // onBeforeUnmount(() => {
    //   clearInterval(intervalID);
    // });

</script>
<template>
   <section class="h-3/4 pb-2">
        <div class="w-[90%] mt-10  h-1/2 mx-auto">
            <p class="text-center sm:text-5xl text-2xl font-bold tracking-wide  shadow-xl pb-3 border-2 rounded-tl-xl rounded-br-xl">TOP BLOG 🔥</p>
            <div class="sm:flex flex flex-col-reverse sm:flex-row mt-3 bg-green-300">
                    <div class="bg-orange-100 sm:w-1/2 sm:max-h-[400px] max-h-[300px] overflow-auto sm:overflow-none ">
                        <p class="text-4xl font-bold text-center my-1 pb-1 border-b-black border-b-2 hidden sm:block">{{blogs[blogNumber].Title}}</p>
                        <p class="text-2xl font-bold text-center my-1 pb-1   w-3/4 mx-auto">{{blogs[blogNumber].mini_title}}</p>
                        <p class="ml-3 pl-2 pr-1  pt-3 sm:h-[45%] h-[200px]  text-ellipsis overflow-hidden ... leading-relaxed tracking-wide">
                            <!-- <span class="text-3xl pl-10">L</span>ipsum dolor,  lorem300 sit amet consectetur adipisicing elit. Consectetur soluta tenetur tempore molestias atque, eos quo sunt odio earum in molestiae, consequatur ex vitae nesciunt, repellendus eum iste facilis similique. Fuga beatae accusamus atque temporibus ut nesciunt assumenda quisquam et rem. A eius vitae voluptates. Voluptate aut fuga repellat corporis incidunt animi quas. Consequatur ipsum explicabo eum iste. Id sed nihil, enim dicta nemo possimus provident iusto quis est earum deserunt, neque numquam ipsa adipisci maiores eaque. Blanditiis illum soluta modi est officiis sapiente autem quo obcaecati illo aliquid perferendis aliquam, delectus dolorem iusto eum consectetur. Nam repellat earum nihil? -->
                            {{ blogs[blogNumber].description}}
                        </p>
                        <p class="text-end italic pr-2 text-xs">at 14:01:00 {{blogs[blogNumber].created_at}}</p>
                        <p class="text-sm text-end italic font-bold pr-2">~{{blogs[blogNumber].user.firstname}} {{blogs[blogNumber].user.lastname}}</p>
                        <div class="flex justify-end" @click.prevent="events=> $emit('readBlog',{data:blogs[blogNumber]})">
                            <button
                                class="text-end bg-green-400 hover:bg-green-500 font-bold px-2 py-1 mt-2 rounded-xl mr-2">
                                Read more
                            </button>
                        </div>
                    </div>
                    <div class="sm:w-1/2">
                        <img :src=blogs[blogNumber].banner alt="" class=" w-full h-[400px] object-cover">
                    </div>
                    <p class="sm:text-4xl text-2xl font-black text-center my-1 pb-1 sm:border-b-black sm:border-b-2 sm:hidden">{{blogs[blogNumber].Title}}</p>
                    
            </div>

        </div>
   </section>
</template>