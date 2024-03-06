<script setup>
import HeadNav from '../../Shared/HeadNav.vue'
import { useForm,router } from '@inertiajs/vue3';


const form = useForm({
    Title : null, 
    location : null, 
    start_time : null, 
    end_time : null, 
    date : null, 
    banner : null, 
    info : null, 
    faculty : null, 
})

let submit = ()=>{
    router.post('/post/event',form)
}
</script>

<template >
    <HeadNav></HeadNav>
    <div class="h-screen">
        <div class="sm:w-[90%] w-[100%] sm:h-[90%] sm:my-5  shadow border sm:rounded-xl mx-auto bg-teal-500 ">
            <p class="text-3xl font-bold text-center shadow  sm:hidden">POST EVENT</p>
                    <form  @submit.prevent="submit" class=" h-[90%] my-10 text-center pt-5 py-4 sm:w-3/4  w-full sm:mx-auto flex flex-col justify-between bg-red-300">
                        <div class="sm:flex sm:flex-row flex-col sm:w-3/4 w-[80%] mx-auto justify-between">
                            <div class="flex flex-col sm:w-[70%] w-[100%]   mx-auto ">
                                <label for="title" class="sm:text-start mb-2 ">Title</label>
                                <input type="text" v-model="form.Title" name="Title" class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                                <p class="text-sm text-red-700">{{ $page.props.errors.Title }}</p>

                            </div>
                            <div class="flex flex-col sm:w-[70%] sm:ml-3 w-full  mx-auto ">
                                <label for="mini_title" class="sm:text-start mb-2 ">Location</label>
                                <input type="text" v-model="form.location" name="location" class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                                <p class="text-sm text-red-700">{{ $page.props.errors.location }}</p>
                            </div>
                        </div>
                        <div class="flex flex-row  sm:w-3/4 w-[80%] mx-auto justify-between sm:mt-0 mt-2">
                            <div class="flex flex-col sm:w-[70%] w-[90%] mr-3  mx-auto ">
                                <label for="title" class="sm:text-start mb-2 ">Time:From</label>
                                <input type="time" v-model="form.start_time" name="start_time" class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                                <p class="text-sm text-red-700">{{ $page.props.errors.start_time }}</p>

                            </div>
                            <div class="flex flex-col sm:w-[70%] sm:ml-3 w-[90%]  mx-auto ">
                                <label for="mini_title" class="sm:text-start mb-2 ">Time:To</label>
                                <input type="time" v-model="form.end_time" name="end_time" class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                                <p class="text-sm text-red-700">{{ $page.props.errors.end_time }}</p>

                            </div>
                        </div>
                        <div class="flex flex-row  sm:w-3/4 w-[80%] mx-auto justify-between sm:mt-0 mt-2">
                            <div class="flex flex-col sm:w-3/4 w-[80%] mx-auto sm:mt-0 mt-2">
                                <label for="username" class="sm:text-start mb-2 ">Date</label>
                                <input type="date" v-model="form.date" name="date" class="w-full bg-white pt-2 mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                                <p class="text-sm text-red-700">{{ $page.props.errors.date }}</p>

                            </div>
                            <div class="flex flex-col sm:w-3/4 sm:ml-3 w-[80%] mx-auto sm:mt-0 mt-2 ml-2">
                                <label for="username" class="sm:text-start mb-2 ">Faculty</label>
                                <!-- <input type="text" v-model="form.faculty" name="faculty"  class="w-full bg-white pt-2 mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b"> -->
                                <select name="faculty" id="" v-model="form.faculty" class="w-full bg-white pt-2 mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                                    <option value="Science">Science</option>
                                    <option value="Law">Law</option>
                                    <option value="Education">Education</option>
                                    <option value="IT & Computer">IT & Computer</option>
                                    <option value="Business">Business</option>
                                    <option value="Media">Media</option>
                                </select>
                                <p class="text-sm text-red-700">{{ $page.props.errors.faculty }}</p>

                            </div>
                        </div>
                        <!-- <div class="flex flex-col sm:w-3/4 w-[80%] mx-auto sm:mt-0 mt-2">
                            <label for="username" class="sm:text-start mb-2 ">Banner <span class="text-xs">(optional)</span></label>
                            <input type="file"  @input="form.banner = $event.target.files[0]"  class="w-full bg-white pt-2 mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                        </div> -->
                        <div class="flex flex-col sm:w-3/4 w-full mx-auto">
                            <label for="username" class="sm:text-start mb-2 ">more info...</label>
                            <textarea name="info" v-model="form.info" id="" cols="30" rows="10" class="border-2 mx-1k border-black rounded-lg min-h-[100px] max-h-[150px] p-1 font-mono" placeholder="write something . . ."></textarea>
                            <p class="text-sm text-red-700">{{ $page.props.errors.info }}</p>

                        </div>
                        <div>
                            <button type="submit" class="bg-blue-500 font-bold mt-5 px-5 py-2 rounded-md hover:bg-blue-700 sm:w-1/2">
                                POST EVENT
                            </button>
                        </div>
                    </form>
    </div>
    </div>
    
</template>