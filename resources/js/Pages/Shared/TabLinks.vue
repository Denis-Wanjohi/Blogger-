<script setup>
import { Link } from '@inertiajs/vue3';
import { toRefs } from 'vue';

const props = defineProps({blogPath:Object,eventPath:String})
let {blogPath,eventPath} = toRefs(props)
</script>
<template>
    <div>
        <section
        class="text-center flex justify-between text-2xl font-thin border sticky top-0 bg-gray-800 border-black text-white w-full"
      >
        <Link
          class="w-full"
          href="/"
          :class="[blogPath === 'http://127.0.0.1:8000' ? 'font-bold bg-orange-500' :'']"
        >BLOGS</Link>
        <Link
          class="w-full"
          href="/events"
          :class="[eventPath === 'http://127.0.0.1:8000/events' ? 'font-bold bg-orange-500' :'']"
        >EVENTS</Link>

      </section>
    </div>
</template>