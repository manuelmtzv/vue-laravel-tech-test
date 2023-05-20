<template>
  <article class="hotel">
    <img
      class="hotel__image"
      :src="hotel.image"
      alt="Hotel ilustrative image"
    />

    <div class="hotel__details">
      <h3 class="hotel__title">{{ hotel.name }}</h3>
      <p class="hotel__property hotel__property--rating">
        Rating: <span>{{ hotel.rating }}</span>
      </p>
      <p class="hotel__property">
        City: <span>{{ hotel.city.name }}</span>
      </p>
      <p class="hotel__property hotel__property--price">
        Price:
        <span>
          {{ hotel.price }}
        </span>
      </p>
      <p class="hotel__description">
        Description:
        <span>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum
          accusantium totam magnam, similique, vel blanditiis aperiam ad
          placeat...
        </span>
      </p>
    </div>
  </article>

  <a :href="route('hotels.index')" class="return">Return</a>
</template>

<script setup>
const props = defineProps({
  hotel: {
    type: Object,
    required: true,
  },
});
</script>

<style scoped lang="css">
.hotel {
  @apply flex flex-col overflow-hidden rounded-md shadow-md sm:flex-row;
}
.hotel__image {
  @apply w-full h-auto object-cover rounded-t-md sm:rounded-none sm:rounded-l-md sm:max-w-sm aspect-square;
}
.hotel__details {
  @apply p-6 flex gap-2 flex-col justify-around;
}
.hotel__details span {
  @apply font-normal;
}
.hotel__title {
  @apply text-2xl font-semibold;
}
.hotel__property {
  @apply text-lg font-semibold;
}
.hotel__property--price {
  @apply text-center;
}
.hotel__property--price span {
  @apply text-green-900;
}
.hotel__property--rating span {
  @apply text-yellow-600;
}
.hotel__description {
  @apply text-justify font-semibold;
}
.hotel__description span {
  @apply font-normal;
}

/* return button */
.return {
  @apply inline-block p-2 mt-4 text-lg rounded-md border hover:bg-blue-200 transition-colors duration-300;
}
</style>
