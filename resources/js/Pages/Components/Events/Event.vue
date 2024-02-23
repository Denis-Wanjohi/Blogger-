<script setup>
import { toRefs } from "vue"

const props = defineProps({event:Object})
let {event} = toRefs(props)
</script>

<template>
    <!-- sm:w-[calc(50%-20px)] -->
    <div class="border shadow-gray-300 rounded hover:shadow-md  shadow-xl hover:shadow-green-300 sm:flex sm:flex-wrap mx-2 my-4 sm:max-h-[300px]">
        <div> 
            <div class="bg-slate-400 flex justify-between px-3 text-center mx-2">
                <p class="text-2xl font-bold text-center">{{event.Title}}</p>
                <!-- <button class="bg-slate-300 p-2 text-green-500 rounded border hover:bg-green-600 hover:text-white">More Info</button> -->
             </div>
            <table>
                <tr>
                    <td class="font-bold ">Location <span class="font-normal">{{event.location}}</span></td>
                </tr>
                <tr>
                    <td class="font-bold ">Date <span class="font-normal">{{event.date}}</span></td>
                </tr>
                <tr>
                    <td class="font-bold ">Time From: <span class="font-normal">{{event.start_time}}</span> To: <span class="font-normal">{{event.end_time}}</span>  </td>
                </tr>
            </table>   
            <hr class="border-slate-500 ">
        
            <div class="bg-slate-200 p-2 mx-2 h-[60px] overflow-auto">
                <span class="font-bold">Info: </span> 
                {{ event.info }}  
            </div>
        </div>
        
        
    </div>

</template>