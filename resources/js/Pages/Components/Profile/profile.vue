<script setup>
import {  toRefs } from "vue";
import HeadNav from "../../Shared/HeadNav.vue";
const props = defineProps({
    user:Object
})
let {user} = toRefs(props)
</script>
<template>
    <HeadNav/>
    <div class="bg-gray-200 sm:w-[100%] h-[calc(100vh)] grid place-items-center ">
            <div class="sm:w-3/4 w-[100%] h-[90%] bg-sky-200 shadow border rounded-xl ">
                <div class="w-full flex justify-end">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-end"  width="25px" height="25px" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m16.475 5.408l2.117 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621"/><path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/></g></svg>
                </div>
                <div class="flex sm:w-3/4 mt-5 rounded sm:h-[40%] h-fit mx-auto bg-blue-600">
                    <div class="sm:w-[40%] sm:h-full w-[70px] h-[100px]  sm:rounded sm:grid sm:place-content-center sm:py-3 overflow-hidden bg-green-400">
                        <img :src="user.profilePicture ? cat.jpeg : user.profilePicture " class=" sm:w-[260px]  w-[60px]  mx-auto rounded-full  sm:rounded-br-[100px] sm:my-5"  alt="">
                    </div>
                    <div class="w-full bg-teal-100 grid place-items-center">
                        <div class="w-[90%] h-[70%] shadow-xl rounded-xl text-xl grid px-5">
                            <table >
                                <tr>
                                    <td>
                                        <p> <span class="font-bold">Firstname</span> : {{user.firstname}}</p>
                                    </td>
                                    <td>
                                        <p><span class="font-bold">Lastname</span> : {{user.lastname}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><span class="font-bold">Username</span> : {{user.username}}</p>
                                    </td>
                                    <td>
                                        <p><span class="font-bold">Faculty</span> : {{user.faculty}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><span class="font-bold">Email</span>:  {{ user.email }}</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="w-3/4 bg-teal-200 h-[50%] mx-auto mt-3" >
                    <div class="w-full px-5 py-3 h-1/2 bg-teal-200">
                        <div class="w-full h-full py-3 px-2 bg-teal-200 overflow-y-scroll">
                            <span class="font-bold ">Bio</span><br>
                            <hr>
                            <p>
                                {{ user.bio }}
                                <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint omnis esse veritatis rerum nisi quis voluptatum delectus ratione corrupti natus. Libero deleniti pariatur quod eos itaque magni excepturi quasi soluta.30 -->
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-around py-3 ">
                        <div class="w-[100px] text-center min-h-[100px] rounded-xl bg-blue-500 flex flex-col justify-around">
                            <p class="text-center text-5xl font-bold">4</p>
                            <p class="font-bold">FOLLOWERS</p>
                        </div>

                        <div class="w-[100px] text-center min-h-[100px] rounded-xl bg-indigo-500 flex flex-col justify-around">
                            <p class="text-center text-5xl font-bold">4</p>
                            <p class="font-bold">FOLLOWING</p>
                        </div>

                        <div class="w-[100px] text-center min-h-[100px] rounded-xl bg-cyan-500 flex flex-col justify-around">
                            <p class="text-center text-5xl font-bold">4</p>
                            <p class="font-bold">BLOGS</p>
                        </div>

                        <div class="w-[100px] text-center min-h-[100px] rounded-xl bg-violet-500 flex flex-col justify-around">
                            <p class="text-center text-5xl font-bold">4</p>
                            <p class="font-bold">EVENTS</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>

