<template>
  <form @submit.prevent="submit" method="POST">
    <button class="delete" type="submit">Delete</button>
  </form>
</template>

<script setup>
import { router } from "@inertiajs/vue3";

const props = defineProps({
  hotel: {
    type: Object,
    required: true,
  },
});

function submit() {
  router.delete(route("hotels.destroy", props.hotel));
}
</script>

<style scoped lang="css">
.delete {
  @apply inline-block p-2 text-lg rounded-md border hover:bg-red-400 transition-colors duration-300;
}
</style>
