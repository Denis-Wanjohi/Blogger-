<script setup>
import { reactive, watch, ref } from 'vue'
import HeadNav from '../../Shared/HeadNav.vue'
import { router, useForm } from '@inertiajs/vue3'

const form = reactive(
  useForm({
    profilePicture: null,
    bio: router.page.props.auth.user.bio,
  })
)
let profile = ref(null)
let submit = () => {
  router.post('/profile/profileEdit', form, {
    forceFormData: true,
  })
}

watch(
  () => form.profilePicture,
  (a, b) => {
    console.log(a.name)
    profile = a
  }
)
</script>

<template >
  <HeadNav></HeadNav>
  <div
    class="sm:w-3/4 w-[100%] sm:h-[90%] h-[110vh] sm:mx-auto px-2 bg-sky-300 shadow border rounded-xl"
  >
    <form @submit.prevent="submit">
      <div v-if="$page.props.auth.user">
        <img
          :src="$page.props.auth.user.profilePicture"
          class="w-[200px] h-[200px] rounded-full mx-auto my-3"
          alt
        />
      </div>
      <div class="flex sm:w-1/2 mx-auto">
        <div class="flex">
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
      </div>

      <div class="mx-auto sm:w-1/2 my-2">
        <div class="flex flex-col">
          <label for="bio" class="pr-2 font-bold text-lg">
            Tell us about yourself:
            <span class="text-sm text-bold">(Bio)</span>
          </label>
          <!-- <textarea name="bio" id="" cols="30" required v-model="form.bio" rows="10" class="rounded-2xl"> </textarea> -->
          <!-- <input name="bio" id="" cols="30" required v-model="form.bio" rows="10" class="rounded-2xl"> -->
          <!-- <textarea name="bio" id="bio" cols="30" rows="10" class="max-h-[200px]"  v-model="form.bio">
                    $page.props.auth.user.profilePicture
          </textarea>-->
          <textarea rows="4" cols="50" v-model="form.bio"></textarea>
        </div>

        <InputError class="mt-2" :message="form.errors.bio" />
      </div>
      <div class="sm:w-fit mx-auto w-1/2 pb-2">
        <button
          class="mx-auto bg-blue-400 hover:bg-blue-600 py-3 px-2 font-bold text-xl rounded-xl sm:w-fit w-full"
          type="submit"
        >Update</button>
      </div>
    </form>
  </div>
</template>