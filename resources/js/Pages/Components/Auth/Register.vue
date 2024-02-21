<script setup>


import { useForm,Link,router} from '@inertiajs/vue3';
 
let form = useForm({
    firstname : null,
    lastname : null,
    username : null,
    email : null,
    password : null,
    paswordConfirmation: null
})







</script>


<template>
    <div class="sm:w-3/4 m-auto   flex justify-center align-middle ">
        <div class="border sm:w-3/4 w-full mx-2 sm:h-fit h-fit  bg-gray-100 my-3 m-auto rounded-t-3xl shadow-lg">
            <div class="font-bold text-4xl text-center my-4 py-4">
                REGISTER
            </div>
            <div class="font-thin text-center mb-3">
                Already have an account?? 
                <Link href="/auth/login">
                    <span class="text-blue-500 text-sm hover:underline hover:font-bold">Login</span>
                </Link>
            </div>
            <hr class="w-full border-black">
            <form @submit.prevent="form.post('/auth/register')">
                <div class= "sm:h-[70%] h-fit p-2 flex">
                    <div class="text-center pt-5 py-4 sm:w-3/4 w-full mx-auto flex flex-col justify-around">
                        <div class="flex flex-col sm:w-3/4 w-full  mx-auto ">
                            <label for="username" class="sm:text-start mb-2 ">Firstname</label>
                            <input type="text" name="firstname" required v-model ="form.firstname" class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                        </div>
                        <div class="flex flex-col sm:w-3/4 w-full  mx-auto ">
                            <label for="username" class="sm:text-start mb-2 ">Lastname</label>
                            <input type="text" name="lastname" required v-model ="form.lastname" class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                        </div><div class="flex flex-col sm:w-3/4 w-full  mx-auto ">
                            <label for="username" class="sm:text-start mb-2 ">Username</label>
                            <input type="text" name="username" required v-model ="form.username" class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                        </div>
                        <div class="flex flex-col sm:w-3/4 w-full  mx-auto ">
                            <label for="username" class="sm:text-start mb-2 ">Email</label>
                            <input type="text" name="email" required v-model ="form.email" class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                        </div>
                        <div class="flex flex-col sm:w-3/4 w-full mx-auto">
                            <label for="username" class="sm:text-start mb-2 ">Password</label>
                            <input type="password" name="password" required v-model ="form.password" class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                        </div>
                        <div class="flex flex-col sm:w-3/4 w-full mx-auto">
                            <label for="username" class="sm:text-start mb-2 ">Confirm Password</label>
                            <input type="password" name="paswordConfirmation" required v-model ="form.paswordConfirmation" class="w-full  mx-auto min-h-[40px] pl-2 rounded-xl outline-none border-0 focus:shadow-blue-800 shadow-lg border-b">
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-500 mt-5 px-5 py-2 rounded-md hover:bg-blue-700 sm:w-1/2">
                                Sign up
                            </button>
                        </div>
                    </div>
                </div>
            </form>
           
            


        </div>
    </div>
</template>