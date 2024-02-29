<script setup>
import { router } from '@inertiajs/vue3'
import { ref, toRefs } from 'vue'

const emit = defineEmits(['CloseBlogOverLay'])
const props = defineProps({ post: Object,comments:Object,likes:Object })

let { post,comments} = toRefs(props)

const ReadBlogOverlay = () => {
  emit('CloseBlogOverLay')
}

let userComment = ref('')
let finalComment = ref(null)

let typeComment =  ()=>{
  finalComment.value = userComment.value.trim();
  console.log(finalComment.value)
}
let cmt = null
let  comment =(data)=>{
  console.log(data);
    let comment = finalComment.value
    router.post('/comment',{comment,data,preserveScroll: true})
    userComment.value = null
    finalComment.value = null
}
let liked = ref(false)
let like=(id,value)=>{
  router.post('/like',{id,value,preserveScroll:true})
}
let disliked = ref(false)
let dislike=(id,value)=>{
  router.post('/dislike',{id,value,preserveScroll:true})
}
</script>

<template>
  <div v-if="post">
    <div class="bg-zinc-300 rounded-t-3xl w-[90%] h-[100%] mx-auto">
      <div class="border-b border-black flex justify-between px-5 py-2">
        <div class="text-red cursor-pointer" @click.prevent="event => $emit('closeOverLay')">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24">
            <g fill="currentColor">
              <path
                d="m11.948 14.829l-1.414 1.414L6.29 12l4.243-4.243l1.414 1.415L10.12 11h7.537v2H10.12z"
              />
              <path
                fill-rule="evenodd"
                d="M4.222 19.778c-4.296-4.296-4.296-11.26 0-15.556c4.296-4.296 11.26-4.296 15.556 0c4.296 4.296 4.296 11.26 0 15.556c-4.296 4.296-11.26 4.296-15.556 0m1.414-1.414A9 9 0 1 1 18.364 5.636A9 9 0 0 1 5.636 18.364"
                clip-rule="evenodd"
              />
            </g>
          </svg>
        </div>
        <div class="text-6xl font-mono font-bold">{{ post.data.Title }}</div>
        <div>
          <!-- <span class="font-bold">Share</span> -->
        </div>
      </div>
      <div class="w-full h-[90%] my-2 px-2 flex">
        <div class="w-1/2 h-full flex flex-col">
          <img :src="post.data.banner" class="h-full w-full" alt />
        </div>
        <div class="w-1/2 h-[90%] bg-green-400">
          <div class="flex flex-col h-fit">
            <p class="font-bold text-2xl text-center border-b border-b-black pb-2">{{post.data.mini_title}}</p>
            <!-- <p class="text-center font-bold text-xl my-2">who is that??...</p> -->
          </div>
          <div class="w-[90%] mx-auto h-[90%] ">
            <div
              id="one"
              class="w-full min-h-[10%] h-[90%] overflow-y-scroll"
              style="scrollbar-width:none"
            >
              <div class="flex justify-between align-middle px-2 py-1 bg-red-200">
                <div class="flex">
                  <div>
                    <img src="/cat.jpeg" class="w-10 rounded-full" />
                  </div>
                  <div class="px-2">
                    <p class="font-bold flex">
                      {{post.data.user.firstname}} {{ post.data.user.lastname }}
                      <svg
                      v-if="$page.props.auth.user && post.data.user_id !== $page.props.auth.user.id" 
                        xmlns="http://www.w3.org/2000/svg"
                        width="25px"
                        height="25px"
                        viewBox="0 0 24 24"
                      >
                        <path
                          fill="currentColor"
                          d="M12 10a2 2 0 0 0-2 2a2 2 0 0 0 2 2c1.11 0 2-.89 2-2a2 2 0 0 0-2-2"
                        />
                      </svg>
                      <div v-if="$page.props.auth.user">
                        <span class="text-sm font-bold mt-1" v-if="post.data.user_id !== $page.props.auth.user.id"  >Follow</span>
                      </div>
                    </p>
                    <p class="text-xs">12:00pm {{post.data.created_at}}</p>
                  </div>
                </div>
                <div>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25px"
                    height="25px"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 12a1 1 0 1 0 2 0a1 1 0 1 0-2 0m7 0a1 1 0 1 0 2 0a1 1 0 1 0-2 0m7 0a1 1 0 1 0 2 0a1 1 0 1 0-2 0"
                    />
                  </svg>
                </div>
              </div>
              <div class="max-h-[85%]  overflow-y-scroll" style="scrollbar-width:none">
                <div class=" mb-3 overflow-y-scroll pl-2" style="scrollbar-width:none">
                  <p><span class="pl-5"></span>{{ post.data.description}} </p>
                  <!-- <p>{{ $page.props.auth.user.id }} </p> -->
                </div>
                <div class="w-[100%]  h-[10%] overflow-y-auto" style="scrollbar-width:none">

                  <div v-for="comment in comments.data">
                 
                    <div class="flex mt-1 border-t border-t-black  max-h-[70px]"  v-if="comment.blog_id === post.data.id" >
                      <div>
                        <img src="cat.jpeg" class="w-8 rounded-full ml-1" alt />
                      </div>
                      <div class="w-full">
                        <div class="flex justify-between text-xs w-[100%] px-2">
                          <p class="font-bold text-sm">
                            {{comment.user.firstname}} {{comment.user.lastname}}
                            <span class="font-normal text-xs">12:00 pm 12-02-2024</span>
                          </p>
                          <div>
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="25px"
                              height="25px"
                              viewBox="0 0 24 24"
                            >
                              <path
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 12a1 1 0 1 0 2 0a1 1 0 1 0-2 0m7 0a1 1 0 1 0 2 0a1 1 0 1 0-2 0m7 0a1 1 0 1 0 2 0a1 1 0 1 0-2 0"
                              />
                            </svg>
                          </div>
                        </div>
                        <div class="overflow-y-scroll" style="scrollbar-width:none">
                          <p
                            class="text-xs max-h-[50px] h-fit mb-1 pl-1"
                          >
                          <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum modi odio temporibus rerum expedita quasi sequi. Facere officiis totam hic? ipsum dolor sit amet consectetur adipisicing elit. Ipsa, inventore! -->
                          {{ comment.comments }}
                          </p>
                        </div>
                      </div>
                    </div>
                </div>
                  

                </div>
              </div>
            </div>

            <div class="w-full h-[40px]  flex justify-between">
              <div class="flex">
                <div id="like" class="grid place-items-center">
                  <svg
                    v-if="liked  === false"
                    xmlns="http://www.w3.org/2000/svg"
                    width="25px"
                    height="25px" 
                    viewBox="0 0 48 48"
                    @click.prevent="liked = true,like(post.data.id,0)"
                  >
                    <path
                      fill="currentColor"
                      d="M24.844 3.87c.427-1.165 1.735-2.37 3.383-1.881c1.651.489 2.726 1.668 3.364 3.097c.624 1.396.857 3.075.87 4.764c.023 2.72-.525 5.71-1.24 8.15h5.04c3.463 0 5.977 3.292 5.066 6.632L37.993 36.85a9.25 9.25 0 0 1-11.079 6.56l-14.07-3.37a7.25 7.25 0 0 1-5.295-5.107L6.315 30.5c-.759-2.727.79-5.417 3.205-6.525c6.324-2.902 9.707-7.127 12.357-12.526c.84-1.71 1.455-3.409 2.289-5.715c.21-.58.433-1.198.678-1.864m2.583.544a.65.65 0 0 0-.236.317c-.231.63-.447 1.225-.652 1.793c-.84 2.325-1.512 4.182-2.417 6.027c-2.831 5.766-6.578 10.493-13.56 13.696c-1.46.67-2.222 2.203-1.838 3.582l1.233 4.433a4.75 4.75 0 0 0 3.47 3.346l14.07 3.37a6.75 6.75 0 0 0 8.084-4.787l3.334-12.217a2.75 2.75 0 0 0-2.653-3.474H29.5a1.25 1.25 0 0 1-1.175-1.677c.884-2.432 1.662-5.935 1.637-8.953c-.012-1.511-.226-2.806-.654-3.765c-.414-.926-.996-1.484-1.791-1.72c-.013-.003-.017-.003-.022-.002a.195.195 0 0 0-.068.03"
                    />
                  </svg>

                  <svg 
                  v-if="liked  === true"
                    xmlns="http://www.w3.org/2000/svg"
                    width="25px" height="25px" 
                    viewBox="0 0 30 30"
                    @click.prevent="liked = false,like(post.data.id,1)">
                    <rect width="28" height="28" fill="none"  />
                    <path fill="black"  d="M16.124 1.116c-.884-.247-1.58.38-1.82.988l-.26.66c-2.006 5.09-3.837 9.74-8.612 12.157c-1.101.558-1.868 1.765-1.648 3.086l.416 2.496a3.75 3.75 0 0 0 2.669 2.99l7.69 2.196a6.75 6.75 0 0 0 8.469-5.146l1.228-6.046A3.75 3.75 0 0 0 20.58 10h-2.167c.345-1.503.504-3.217.346-4.73c-.184-1.77-.858-3.659-2.636-4.154" />
                  </svg>
                </div>
                <div id="dislike" class="grid place-items-center">


                  <svg
                    v-if="disliked === true"
                    xmlns="http://www.w3.org/2000/svg" 
                    width="25px" 
                    height="25px" 
                    @click.prevent="disliked = false,dislike(post.data.id,1)"
                    viewBox="0 0 24 24">
                    <rect width="24" height="24" fill="none" />
                    <path fill="black" d="M15.056 14.183c.46 1.427.693 2.676.693 3.753c0 2.398-.939 4.247-2.5 4.247c-.8 0-1.078-.45-1.383-1.546l-.27-1.022c-.1-.358-.276-.97-.526-1.83a.247.247 0 0 0-.03-.066l-2.866-4.485a5.885 5.885 0 0 0-2.855-2.327l-1.257-.481A1.75 1.75 0 0 1 2.97 8.458l.686-3.538a2.25 2.25 0 0 1 1.673-1.758l8.25-2.021a4.75 4.75 0 0 1 5.733 3.44l1.574 6.172a2.75 2.75 0 0 1-2.665 3.43z" />
                  </svg>


                  <svg
                    v-if="disliked === false"
                    xmlns="http://www.w3.org/2000/svg"
                    width="25px"
                    height="25px"
                    viewBox="0 0 16 16"
                    @click.prevent="disliked = true,dislike(post.data.id,0)"
                  >
                    <path
                      fill="currentColor"
                      d="M10.578 10c.016.133.034.285.05.45c.074.74.131 1.793-.013 2.677c-.072.44-.201.887-.442 1.237c-.257.372-.647.635-1.173.635c-.516 0-.83-.37-1.024-.69c-.192-.321-.36-.756-.533-1.201l-.013-.034c-.547-1.41-1.295-3.317-3.307-4.658a4.979 4.979 0 0 0-.853-.458c-.697-.289-1.322-1.057-1.157-1.936l.224-1.196a2 2 0 0 1 1.43-1.558l4.95-1.375a3.5 3.5 0 0 1 4.377 2.727l.454 2.419a2.5 2.5 0 0 1-2.458 2.96zm1.533-5.196a2.5 2.5 0 0 0-3.126-1.948l-4.95 1.375a1 1 0 0 0-.716.78l-.224 1.195c-.053.283.162.664.558.828c.31.129.659.306 1.025.55c2.287 1.524 3.128 3.696 3.676 5.108l.008.02c.19.49.329.844.472 1.082c.069.115.12.17.151.195a.11.11 0 0 0 .016.01c.142 0 .245-.054.349-.203c.118-.173.216-.451.278-.83c.122-.75.077-1.697.005-2.417a16.374 16.374 0 0 0-.114-.897l-.009-.05l-.002-.013v-.003A.5.5 0 0 1 10 9h1.09a1.5 1.5 0 0 0 1.475-1.777z"
                    />
                  </svg>
                </div>
              </div>
              <div class="w-full flex bg-slate-50 border-black border-2 rounded-xl pl-2 outline-none hover:border-purple-700 hover:shadow-xl" >
                <input
                  @input="typeComment"
                  v-model="userComment"
                  type="text"
                  placeholder="comment..."
                  class="w-[95%] h-[35px] border-0 focus:ring-0"
                />
                <svg xmlns="http://www.w3.org/2000/svg"  @click="comment(post.data.id)"  v-if="finalComment " class="w-fit h-full pt-1 pr-1" width="25px" height="25px" viewBox="0 0 32 32"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M29 3L3 15l12 2.5M29 3L19 29l-4-11.5M29 3L15 17.5"/></svg>
              </div>
              <div class="grid place-items-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="25px"
                  height="25px"
                  viewBox="0 0 24 24"
                >
                  <path fill="none" stroke="currentColor" stroke-width="2" d="M5 1v21l7-5l7 5V1z" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


