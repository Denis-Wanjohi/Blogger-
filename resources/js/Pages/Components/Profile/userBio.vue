<script setup>
import { reactive, watch,ref } from 'vue';
import HeadNav from '../../Shared/HeadNav.vue'
import { router, useForm } from '@inertiajs/vue3';

const form = reactive(
    useForm({
        profilePicture : null,
        bio : null,
        faculty : null,
    })
)
let profile = ref(null)
let submit = ()=>{
   router.post('/profile/profileUpdate',form,{
        forceFormData:true
   })
}

watch(()=>form.profilePicture,(a,b)=>{
    console.log(a.name);
    profile = a;
})

</script>

<template >
    <HeadNav></HeadNav>
    <div class="sm:w-3/4 w-[100%] h-[90%] mx-auto bg-sky-200 shadow border rounded-xl mt-10   pt-10 ">
        <form @submit.prevent="submit">
            <div v-if="$page.props.auth.user">
                <img :src=$page.props.auth.user.profilePicture class="max-w-[200px] max-h-[200px]  rounded-full mx-auto my-3" alt="">
            </div>
            <div class="sm:flex  sm:w-1/2 sm:mx-auto mx-2">
                <div class="flex my-1">
                    <label for="profilePicture" class="pr-2 font-bold text-lg">Profile:</label>
                    <input
                        id="firstname"
                        type="file"
                        class="mt-1 block w-3/4 p-0 border mr-2"
                        @input="form.profilePicture = $event.target.files[0]"
                        autofocus
                    
                    />
                    <InputError class="mt-2" :message="form.errors.profilePicture" />
                </div>
                <div class="flex">
                    <label for="faculty" class="pr-2 font-bold text-lg">Faculty:</label>
                    <select name="faculty" class="h-fit" required  v-model="form.faculty" id="faculty">
                        <option value="general" selected></option>
                        <option value="science">Science</option>
                        <option value="IT & Technology">IT & Technology</option>
                        <option value="Media">Media</option>
                        <option value="Law">Law</option>
                        <option value="Business">Business</option>
                        <option value="Agriculture">Agriculture</option>
                    </select>
                    <InputError class="mt-2" :message="form.errors.faculty" />
                </div>
            </div>
            
            <div class="sm:mx-auto mx-2 sm:w-1/2 my-2">
                <div class="flex flex-col">
                    <label for="bio" class="pr-2 font-bold text-lg">Tell us about yourself: <span class="text-sm text-bold">(Bio)</span></label>
                    <textarea name="bio" id="" cols="30" required v-model="form.bio" rows="10" class="rounded-2xl"></textarea>
                </div>
               

                <InputError class="mt-2" :message="form.errors.bio" />
            </div>
            <div class="sm:w-fit mx-auto w-1/2   pb-2">
                <button class="mx-auto bg-blue-400 hover:bg-blue-600 py-3 px-2 font-bold text-xl rounded-xl sm:w-fit w-full" type="submit">SAVE</button>
            </div>
        </form>
    </div>
    
</template>