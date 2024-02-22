<script setup>

import { reactive, toRefs } from 'vue';
import { useForm,Link,router } from '@inertiajs/vue3';

const form = useForm({
    email:'',
    password:''
});

const submit = ()=>{
    router.post('/auth/login',form);
}

const props = defineProps({errors:Object})
let {errors} = toRefs(props)

</script>


<template>
    <div class="sm:w-3/4 m-auto  h-screen flex justify-center align-middle">
        <div class="border sm:w-3/4 w-full mx-2 sm:h-3/4 h-screen my-3 m-auto rounded-t-3xl shadow-lg">
            <div class="font-bold text-4xl text-center my-4 py-4">
                LOGIN
            </div>
            <div class="font-thin text-center mb-3">
                New to the community?? 
                <Link href="/auth/register">
                    <span class="text-blue-500 text-sm hover:underline hover:font-bold">Register</span>
                </Link>
            </div>
            <hr class="w-full border-black">
            <div class= "sm:h-[70%] h-[60%] p-2 flex">
                    <form action="" @submit.prevent="submit" class="text-center pt-5 py-4 sm:w-3/4  w-full mx-auto flex flex-col justify-around">
                        <div class="flex flex-col sm:w-3/4 w-full  mx-auto ">
                            <label for="username" class="sm:text-start mb-2 ">Email</label>
                            <input type="text" 
                                    v-model="form.email"
                                    name="email" 
                                    :class="[errors.email? 'shadow-red-200': '']"
                                    class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                            <p class="mt-3 text-black font-mono text-xs font-light">{{errors.email}}</p>
                        </div>
                        <div class="flex flex-col sm:w-3/4 w-full mx-auto">
                            <label for="username" class="sm:text-start mb-2 ">Password</label>
                            <input type="password" 
                                   v-model="form.password"
                                   name="password"
                                   :class="[errors.email? 'shadow-red-200': '']"
                                   class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-500 mt-5 px-5 py-2 rounded-md hover:bg-blue-700 sm:w-1/2">
                                login
                            </button>
                        </div>
                    </form>
            </div>
            


        </div>
    </div>
</template>