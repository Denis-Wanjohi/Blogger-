<script setup>
import { Head,Link } from '@inertiajs/vue3';
import { toRefs } from 'vue';
import { usePage } from '@inertiajs/vue3';

import Event from '../Components/Events/Event.vue';
import HeadNav from '../Shared/HeadNav.vue'
import Categories from '../Shared/Categories.vue'
import TabLinks from '../Shared/TabLinks.vue'


const props = defineProps({events:Object})
let {events}  =  toRefs(props)

</script>
<template>
    <Head title="Events" ></Head>
    <HeadNav/>
   

    <div class="flex">
        <div>
            <Categories :path="events.path" />
        </div>
        
        <div class="w-full">
            
            <TabLinks :eventPath="events.path"/>
            <div class="flex flex-wrap justify-evenly">
                <div v-for="event in events.data" class="md:w-[30%]">
                    <Event :event="event"/>
                </div>
            </div>
            <div class="flex w-fit  pb-10 mt-2 mx-auto">
               
                <div v-for="link in events.links">
                    <Link :href="link.url" v-if="link.url" v-html="link.label" class="mx-1 p-2 border-gray-300 border rounded-md"></Link>
                    <!-- <component :is="link.url ? Link : span" :href="link.url">one</component> -->
                </div>
            </div>
        </div>
    </div>
    
    

</template>