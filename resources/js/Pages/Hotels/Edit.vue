<template>
  <form class="form" ref="form" @submit.prevent="submit" method="POST">
    <h1 class="form__title">Edit hotel</h1>

    <label class="label" for="name">
      Name:
      <input
        class="input"
        type="text"
        name="name"
        placeholder="e.g. Holiday Inn..."
        :value="hotel.name"
      />
      <span class="error" v-if="errors.name">{{ errors.name }}</span>
    </label>

    <label class="label" for="rating">
      Rating:
      <select class="select" name="rating" v-model="hotel.rating">
        <option selected value="">- select a rating -</option>
        <option value="3 stars">3 stars</option>
        <option value="4 stars">4 stars</option>
        <option value="5 stars">5 stars</option>
      </select>
      <span class="error" v-if="errors.rating">{{ errors.rating }}</span>
    </label>

    <label class="label" for="price">
      Price:
      <input
        class="input"
        type="text"
        name="price"
        placeholder="e.g. 2,300"
        :value="hotel.price"
      />
      <span class="error" v-if="errors.price">{{ errors.price }}</span>
    </label>

    <label class="label" for="image">
      Image URL:
      <input
        class="input"
        type="text"
        name="image"
        placeholder="e.g. www.image.com"
        :value="hotel.image"
      />
      <span class="error" v-if="errors.image">{{ errors.image }}</span>
    </label>

    <label class="label" for="city_id">
      City:
      <select class="select" name="city_id" v-model="hotel.city_id">
        <option value="">- select a city -</option>
        <option v-for="city in cities" :value="city.id">
          {{ city.name }}
        </option>
      </select>
      <span class="error" v-if="errors.city_id">{{ errors.city_id }}</span>
    </label>

    <nav class="form__nav">
      <a class="return" :href="route('hotels.show', hotel)">Return</a>

      <button class="submit" type="submit">Submit</button>
    </nav>
  </form>
</template>

<script setup>
import { ref } from "vue";
import { router } from "@inertiajs/vue3";

const form = ref(null);

const props = defineProps({
  errors: {
    type: Object,
    required: true,
  },
  hotel: {
    type: Object,
    required: true,
  },
  cities: {
    type: Array,
    required: true,
  },
});

function getValues() {
  const formData = new FormData(form.value);

  return Object.fromEntries(formData.entries());
}

function submit() {
  router.patch(route("hotels.update", props.hotel), getValues());
}
</script>

<style scoped lang="css">
.form__title {
  @apply text-xl;
}
.form__nav {
  @apply flex items-center justify-between gap-4;
}
/* return button */
.return {
  @apply w-fit p-2 rounded-md border hover:bg-blue-200 transition-colors duration-300;
}
</style>
