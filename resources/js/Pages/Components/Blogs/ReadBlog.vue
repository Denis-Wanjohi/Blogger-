<script setup>

const emit = defineEmits(["CloseBlogOverLay"])


const ReadBlogOverlay = () =>{
  emit("CloseBlogOverLay")
}


</script>

<template>
  <div>
    <div class="bg-zinc-300 rounded-t-3xl w-3/4 h-[90%] mx-auto">
      <div class="border-b border-black flex justify-between px-5 py-2">
        <div class="text-red cursor-pointer" @click.prevent="ReadBlogOverlay" >
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
        <div>Reading ...</div>
        <div>
          <span class="font-bold">Share</span>
        </div>
      </div>
      <div class="w-full h-[90%] my-2 px-2 flex">
        <div class="w-1/2 h-full flex flex-col">
          <img src="cat.jpeg" class="h-full w-full" alt />
        </div>
        <div class="w-1/2 h-[100%]">
          <div class="flex flex-col">
            <p class="font-bold text-3xl text-center border-b border-b-black pb-2">WILD HOT</p>
            <p class="text-center font-bold text-xl my-2">who is that??...</p>
          </div>
          <div class="w-[90%] mx-auto max-h-[100%] bg-green-400">
            <div id="one" class="w-full min-h-[10%] h-fit overflow-scroll" style="scrollbar-color: white white;k">
              <div class="flex justify-between align-middle px-2 py-1 bg-red-200">
                <div class="flex">
                  <div>
                    <img src="cat.jpeg" class="w-10 rounded-full" alt />
                  </div>
                  <div class="px-2">
                    <p class="font-bold flex">
                      Kim Kinuthia
                      <svg
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
                      <span class="text-sm font-bold mt-1">Follow</span>
                    </p>
                    <p class="text-xs">12:00pm 12-03-2024</p>
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
              <div class="h-[100%] overflow-y-scroll bg-blue-400">
                <div class="h-[200px] overflow-y-scroll pl-2">
                  <p>Lorem wipsum dolor sit amet consectetur adipisicing elit. Nulla necessitatibus magni eveniet, illo eaque labore dolor accusantium consequatur assumenda? Sint, illum odio. Voluptas consectetur amet atque obcaecati eos sequi sint iure vitae! Fugit quisquam eum sit assumenda voluptatum harum maxime quas neque sequi! Rerum debitis modi ea dolores consequuntur, error voluptatibus. Voluptas, neque. Ex molestiae eos consequatur, dolorum architecto ipsa natus, expedita quos et, suscipit eum officia perspiciatis quas. Deserunt necessitatibus enim magni voluptatum debitis dolor cupiditate magnam illo consequatur? Ut beatae eligendi odit ex id eaque, soluta quibusdam expedita, ipsam necessitatibus delectus sit corrupti obcaecati nostrum labore, laborum rerum assumenda qui. Debitis pariatur blanditiis nisi corporis. Delectus mollitia sint voluptatem numquam explicabo iste nobis quisquam officia minus voluptates quos quidem quaerat doloribus accusantium repellendus quis quibusdam inventore, voluptatum aspernatur. Eaque, quidem aspernatur velit dignissimos temporibus tempora, atque eveniet facere blanditiis autem impedit repellat ab provident itaque! Consequuntur, temporibus ratione quam incidunt neque corporis debitis nostrum quidem excepturi esse! Voluptatum, magni, laudantium nihil eligendi ut consequatur maiores quasi velit ipsum animi ipsam cupiditate, libero expedita sunt voluptas temporibus iusto repudiandae quos asperiores natus. Commodi incidunt fugit sed reiciendis! Commodi sequi doloremque incidunt nisi rerum atque sapiente, vel ratione facilis obcaecati odit consequatur architecto quas explicabo, aliquid, pariatur odio? Velit veniam fugiat, facilis nobis optio commodi cum magnam ea, dolorum ratione eaque, similique voluptatibus ipsum. Nulla expedita ratione doloremque minus. Doloribus debitis aspernatur dolorum porro ut voluptatibus numquam qui deleniti amet assumenda fuga accusantium nemo, quos eum voluptatum asperiores enim corrupti? Nulla voluptatem quod tempora magni nostrum nobis ipsam odio dolor adipisci minima esse deserunt consequatur, eos velit a deleniti est! Architecto beatae enim nostrum asperiores facere incidunt rem, voluptatum perferendis fugit, iusto dolorum corrupti est nobis exercitationem quia illum necessitatibus earum voluptatem provident. Officia, soluta molestiae ab tempore cupiditate quo.</p>
                </div>
                <div class="w-[100%]  bg-green-400 h-[100px] overflow-y-scroll">
                  
                  <div class="flex mt-1 border-t  border-t-black bg-red-300 max-h-[70px]">
                    <div>
                      <img src="cat.jpeg" class="w-8 rounded-full ml-1" alt />
                    </div>
                    <div class="w-full">
                      <div class="flex justify-between text-xs w-[100%] px-2">
                        <p class="font-bold text-sm">
                          Kim Kimanis
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
                      <div class="overflow-y-scroll">
                        <p
                          class="text-xs max-h-[30px] pl-1"
                        >Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum modi odio temporibus rerum expedita quasi sequi. Facere officiis totam hic? ipsum dolor sit amet consectetur adipisicing elit. Ipsa, inventore!</p>
                      </div>
                    </div>
                  </div>

                  
                  

                
                </div>
              </div>
            </div>

            <div class="w-full h-[40px] flex justify-between">
              <div class="flex">
                <div id="like" class="grid place-items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25px"
                    height="25px"
                    viewBox="0 0 48 48"
                  >
                    <path
                      fill="currentColor"
                      d="M24.844 3.87c.427-1.165 1.735-2.37 3.383-1.881c1.651.489 2.726 1.668 3.364 3.097c.624 1.396.857 3.075.87 4.764c.023 2.72-.525 5.71-1.24 8.15h5.04c3.463 0 5.977 3.292 5.066 6.632L37.993 36.85a9.25 9.25 0 0 1-11.079 6.56l-14.07-3.37a7.25 7.25 0 0 1-5.295-5.107L6.315 30.5c-.759-2.727.79-5.417 3.205-6.525c6.324-2.902 9.707-7.127 12.357-12.526c.84-1.71 1.455-3.409 2.289-5.715c.21-.58.433-1.198.678-1.864m2.583.544a.65.65 0 0 0-.236.317c-.231.63-.447 1.225-.652 1.793c-.84 2.325-1.512 4.182-2.417 6.027c-2.831 5.766-6.578 10.493-13.56 13.696c-1.46.67-2.222 2.203-1.838 3.582l1.233 4.433a4.75 4.75 0 0 0 3.47 3.346l14.07 3.37a6.75 6.75 0 0 0 8.084-4.787l3.334-12.217a2.75 2.75 0 0 0-2.653-3.474H29.5a1.25 1.25 0 0 1-1.175-1.677c.884-2.432 1.662-5.935 1.637-8.953c-.012-1.511-.226-2.806-.654-3.765c-.414-.926-.996-1.484-1.791-1.72c-.013-.003-.017-.003-.022-.002a.195.195 0 0 0-.068.03"
                    />
                  </svg>
                </div>
                <div id="dislike" class="grid place-items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25px"
                    height="25px"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill="currentColor"
                      d="M10.578 10c.016.133.034.285.05.45c.074.74.131 1.793-.013 2.677c-.072.44-.201.887-.442 1.237c-.257.372-.647.635-1.173.635c-.516 0-.83-.37-1.024-.69c-.192-.321-.36-.756-.533-1.201l-.013-.034c-.547-1.41-1.295-3.317-3.307-4.658a4.979 4.979 0 0 0-.853-.458c-.697-.289-1.322-1.057-1.157-1.936l.224-1.196a2 2 0 0 1 1.43-1.558l4.95-1.375a3.5 3.5 0 0 1 4.377 2.727l.454 2.419a2.5 2.5 0 0 1-2.458 2.96zm1.533-5.196a2.5 2.5 0 0 0-3.126-1.948l-4.95 1.375a1 1 0 0 0-.716.78l-.224 1.195c-.053.283.162.664.558.828c.31.129.659.306 1.025.55c2.287 1.524 3.128 3.696 3.676 5.108l.008.02c.19.49.329.844.472 1.082c.069.115.12.17.151.195a.11.11 0 0 0 .016.01c.142 0 .245-.054.349-.203c.118-.173.216-.451.278-.83c.122-.75.077-1.697.005-2.417a16.374 16.374 0 0 0-.114-.897l-.009-.05l-.002-.013v-.003A.5.5 0 0 1 10 9h1.09a1.5 1.5 0 0 0 1.475-1.777z"
                    />
                  </svg>
                </div>
              </div>
              <div class="w-full">
                <input
                  type="text" placeholder="comment..."
                  class="w-[100%] h-[35px] border-black border-2 rounded-xl pl-2 outline-none focus:border-purple-700 focus:shadow-xl"
                />
              </div>
              <div class="grid place-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" d="M5 1v21l7-5l7 5V1z"/></svg>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</template>


