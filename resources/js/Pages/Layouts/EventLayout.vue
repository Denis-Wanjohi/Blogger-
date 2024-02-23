<script setup>
import { toRefs,ref } from 'vue';
import { usePage,router } from '@inertiajs/vue3';

import Event from '../Components/Events/Event.vue';
import HeadNav from '../Shared/HeadNav.vue'
import Categories from '../Shared/Categories.vue'
import TabLinks from '../Shared/TabLinks.vue'


const props = defineProps({events:Object})
let {events}  =  toRefs(props)

let faculty = ref('')

let selectedFaculty = (data)=>{
    // console.log(data.data.value)
    faculty.value = data.data.value

    if(faculty.value !== ''  || faculty.value !== null || router.page.url === '/'){
       router.page.url = '/events/'
       router.post(router.page.url+faculty.value);
    }
}

</script>
<template>
    <Head title="Events" ></Head>
    <HeadNav/>
   

    <div class="flex">
        <div>
            <Categories @faculty="selectedFaculty"/>
        </div>
        
        <div class="w-full">
            
            <TabLinks :eventPath="events.path"/>
            <div class="flex flex-wrap justify-evenly">
                <div v-for="event in events.data" v-if="router.page.url === '/events'"  class="md:w-[30%]">
                    <Event :event="event"/>
                </div>
                <div v-for="event in events" v-else  class="md:w-[30%]">
                    <Event :event="event"/>
                </div>

            </div>
            <!-- <div class="flex w-fit  pb-10 mt-2 mx-auto"> -->
               
                <!-- <div v-for="link in events.links"> -->
                    <!-- <Link :href="link.url" v-if="link.url" v-html="link.label" class="mx-1 p-2 border-gray-300 border rounded-md"></Link> -->
                    <!-- <component :is="link.url ? Link : span" :href="link.url">one</component> -->
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
    
    

</template>