<script setup>
import { Link, router } from '@inertiajs/vue3'
import {ref} from 'vue'
import Categories from './Categories.vue';
let menuVisibility = ref(false)
let categoriesVisibility = ref(false)
const menu = () => {
  menuVisibility.value = !menuVisibility.value
}
const categories = ()=>{
  menuVisibility.value = false
  categoriesVisibility.value = true
  console.log(categoriesVisibility.value)
}

let logout =()=>{
  router.post('/auth/logout')
}
</script>

<template>
    <nav class="bg-purple-700 flex justify-space-between sm:h-[70px] w-full">
      <div class="sm:flex sm:items-baseline ml-5 m-auto">
        <span class="text-5xl font-bold">
          <Link href="/">Blogger</Link>
        </span>
        <br />
        <span
          class="text-sm ml-5 md:inline-block md:aling-baseline italic"
        >...where you get all the spice</span>
      </div>
    <div class="w-[50%] text-center grid place-self-center sm:block hidden " v-if="$page.url === '/profile'">
      <p class="text-3xl font-bold text-center shadow w-[90%] ">PROFILE</p>
    </div>
    <div class="w-[50%] text-center grid place-self-center sm:block hidden" v-if="$page.url === '/post/event'">
      <p class="text-3xl font-bold text-center shadow w-[90%] ">POST EVENT</p>
    </div>
    <div class="w-[50%] text-center grid place-self-center sm:block hidden" v-if="$page.url === '/post/blog'">
      <p class="text-3xl font-bold text-center shadow w-[90%] ">POST BLOG</p>
    </div>
  
    <div class="flex items-center my-auto h-3/4 sm:mr-10 mr-5">
      <div class="flex rounded-5xl hidden sm:block">
        <input
          type="text"
          placeholder="search..."
          class="pl-1 outline-none border-0 border-b-black border-b-2 rounded focus:border-b-purple-900 max-h-8"
        />
      </div>
      <div class="ml-5 cursor-pointer" @click.prevent="menu">
        <!--  v-if="$page.props.user"  -->
        <img src="/cat.jpeg" alt class="w-10 h-10 rounded-full shadow-xl"/>
        <!-- <Link :href="router.get('/auth/login')" class="px-3 my-1 bg-blue-400 rounded-xl">Sign in</Link> -->
      </div>
    </div>
  </nav>

<!-- DROP DOWN -->
<!-- v-if="$page.props.user" -->
  <nav :class="[menuVisibility ? 'block': 'hidden' ]" >
    <div class="border bg-gray-100 shadow-xl w-[250px] mr-4 absolute right-0 rounded-t-md z-10">
      <span class="absolute right-0 cursor-pointer" @click="menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 24 24">
          <path
            fill="black"
            d="m8.4 17l3.6-3.6l3.6 3.6l1.4-1.4l-3.6-3.6L17 8.4L15.6 7L12 10.6L8.4 7L7 8.4l3.6 3.6L7 15.6zm3.6 5q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12q0-3.35-2.325-5.675T12 4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20m0-8"
          />
        </svg>
      </span>
      <div class="flex ml-4 mt-2">
        <img src="/cat.jpeg" class="w-10 rounded-full" />
        <div class="flex flex-col ml-5">
          <!-- <span class="font-bold">{{$page.props.user.firstname}} {{ $page.props.user.lastname }}</span> -->
          <!-- <span class="text-sm">{{ $page.props.user.email }}</span> -->
        </div>
      </div>
      <hr class="border-blue-900 my-4" />
      <div class="flex rounded-5xl justify-between mx-auto sm:hidden">
        <input
          type="text"
          placeholder="search..."
          class="w-full pl-1 outline-none border-0 border-b-black border-b-2 rounded focus:border-b-purple-900 max-h-8"
        />
        <p class="bg-green-200">
          <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24">
            <path
              fill="black"
              d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5q0-1.875-1.312-3.187T9.5 5Q7.625 5 6.313 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14"
            />
          </svg>
        </p>
      </div>
      <div class="bg-green-400 flex justify-center" @click.prevent="categories">
        <button class="text-2xl font-bold tracing-wide text-left p-1 rounded-2xl my-2 w-fit  sm:hidden block bg-cyan-500">Categories</button>
      </div>

      <hr class="border-blue-900 my-4 sm:hidden" />
      <div>
        <ul>
          <li class="flex items-center pl-2 border-b border-b-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 24 24">
              <path
                fill="black"
                d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"
              />
            </svg>
            <Link class="ml-2" href="/profile">Profile</Link>
          </li>
          <Link href="/post/blog" class="flex items-center pl-2 border-b border-b-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 64 64">
              <path
                fill="black"
                d="M57.247 24.222c.973-2.628 1.254-5.134.555-7.383c-.322.029-.656.044-.998.044C46.562 16.883 28.46 4.006 27.09 2C21.445 10.223 9.613 16.545 4.265 23.635c-2.164 2.869-3.246 5.004-1.093 8.286l22.549 28.973c1.017 1.377 3.01 1.489 4.429.219c0 0 18.492-23.729 31.851-31.071c-1.004-1.961-2.675-3.918-4.754-5.82M25.328 54.754l-.094.065l-.085.074a5.768 5.768 0 0 0-.912 1.041L4.699 30.831c-1.407-2.177-1.008-3.323 1.063-6.067c2.349-3.113 6.103-6.135 10.078-9.334c4.132-3.326 8.388-6.75 11.514-10.646c5.16 4.246 19.593 13.621 28.932 13.964c1.12 10.997-21.682 29.536-30.958 36.006"
              />
              <path
                fill="black"
                d="m19.993 14.158l25.205 19.75l.898-.804L20.649 13.57zm8.214 10.513l-10.316-8.632s-3.59 2.292-7.938 7.319l9.152 9.462zM5.606 28.06l19.468 23.861l3.595-3.217L7.913 24.973s-1.809.979-2.307 3.087m21.814 1.368l11.309 10.27l3.593-3.217l-11.775-9.852zm-6.254 5.599l10.377 11.104l3.592-3.216l-10.842-10.687zm6.691-24.271l-1.525 4.282l.956.696l4.855-4.347l-.95-.598l-3.345 2.995l1.479-4.174l-.992-.626l-4.627 4.142l.829.603zm4.155 8.423l.926-.831l-2.825-2.008l1.281-1.146l2.509 1.718l.891-.799l-2.537-1.694l1.058-.946l2.809 1.817l.912-.815l-3.884-2.452l-4.918 4.403zm3.009 2.192l3.839-2.325l1.257-.796l-.834 1.078l-2.47 3.351l1.193.869l7.388-3.799l-1.402-.885l-4.051 2.318l-1.034.626l.694-.913l2.401-3.287l-1.348-.85l-3.745 2.321l-.995.629l.685-.871l2.268-3.207l-1.264-.798l-3.661 5.753zm13.886.334c-.909-.571-1.758-.844-2.552-.828c-.788.017-1.434.254-1.943.71c-.559.5-.747 1.019-.563 1.557c.108.323.452.79 1.039 1.408l.607.638c.362.376.595.684.697.92c.1.239.051.448-.146.624c-.337.301-.776.358-1.315.174a3.844 3.844 0 0 1-.938-.515c-.57-.406-.847-.797-.84-1.174c.004-.206.117-.442.338-.708l-1.311-.914c-.591.529-.815 1.119-.667 1.774c.149.661.656 1.313 1.536 1.955c.877.643 1.75.987 2.608 1.025c.867.037 1.581-.191 2.131-.686c.54-.482.732-1 .578-1.551c-.098-.353-.373-.764-.817-1.232l-.995-1.05c-.379-.396-.605-.671-.682-.828c-.12-.239-.077-.45.13-.634c.225-.202.513-.284.865-.249c.357.035.729.178 1.118.428c.353.228.602.464.741.708c.215.368.155.723-.175 1.06l1.477.973c.614-.592.806-1.219.577-1.878c-.224-.653-.725-1.223-1.498-1.707"
              />
            </svg>
            <span class="ml-2">Post Blog</span>
          </Link>

          <Link href="/post/event" class="flex items-center pl-2 border-b border-b-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 32 32">
              <path
                fill="black"
                d="M28 6a2 2 0 0 0-2-2h-4V2h-2v2h-8V2h-2v2H6a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h4v-2H6V6h4v2h2V6h8v2h2V6h4v6h2Z"
              />
              <path
                fill="black"
                d="m21 15l2.549 4.938l5.451.791l-4 3.844L26 30l-5-2.562L16 30l1-5.427l-4-3.844l5.6-.791z"
              />
            </svg>
            <span class="ml-2">Post Event</span>
          </Link>
          <li @click.prevent="logout" class="flex items-center pl-2 border-b mb-1 border-b-blue-500 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 14 14">
              <path
                fill="none"
                stroke="black"
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9.5 10.5v2a1 1 0 0 1-1 1h-7a1 1 0 0 1-1-1v-11a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v2M6.5 7h7m-2-2l2 2l-2 2"
              />
            </svg>
            <span class="ml-2">Logout</span>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- CATEGORIES -->
  <nav id="categories" class="w-[100%] z-10" :class="[categoriesVisibility ? 'block' : 'hidden']">
      <Categories></Categories>      
  </nav>
</template>