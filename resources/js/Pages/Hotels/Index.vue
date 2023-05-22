<template>
  <nav>
    <a class="add-hotel" :href="route('hotels.create')">Add Hotel</a>
  </nav>

  <section v-if="hotels.length > 1" class="hotels">
    <a
      v-for="hotel in sortedHotels"
      :href="route('hotels.show', hotel)"
      class="hotels__entry"
      :key="hotel.id"
    >
      <img
        :src="hotel.image"
        alt="Hotel ilustrative image"
        class="hotels__image"
        loading="lazy"
      />
      <div class="hotels__details">
        <h3 class="hotels__title">{{ hotel.name }}</h3>
        <p class="hotels__property">
          City: <span>{{ hotel.city.name }}</span>
        </p>
        <p class="hotels__property hotels__property--rating">
          Rating: <span>{{ hotel.rating }}</span>
        </p>
        <p class="hotels__property hotels__property--price">
          Price:
          <span> {{ hotel.price }} MXN </span>
        </p>
      </div>
    </a>
  </section>

  <p v-else>No hotels to show</p>
</template>

<script setup>
import { computed } from "vue";

const props = defineProps({
  hotels: {
    type: Array,
    required: true,
  },
  errors: Object,
});

const sortedHotels = computed(() => {
  return props.hotels.sort((a, b) => a.created_at < b.created_at);
});
</script>

<style scoped lang="css">
nav {
  @apply w-full;
}
.add-hotel {
  @apply w-fit block ml-auto p-2 mb-4 border rounded-md hover:bg-green-300 transition-colors duration-300;
}
.hotels {
  @apply grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4;
}
.hotels__entry {
  @apply flex flex-col border rounded-lg hover:shadow-md hover:bg-gray-100 transition-all duration-300 cursor-pointer;
}
.hotels__image {
  @apply w-full object-cover aspect-square;
}
.hotels__details {
  @apply flex flex-col gap-2 h-full p-2 justify-between;
}
.hotels__title {
  @apply text-xl font-semibold;
}
.hotels__property {
  @apply text-lg font-semibold;
}
.hotels__property--price {
  @apply text-center;
}
.hotels__property--price span {
  @apply text-green-900;
}
.hotels__property--rating span {
  @apply text-yellow-600;
}
.hotels__entry:hover .hotels__property--price span,
.hotels__entry:hover .hotels__property--rating span {
  @apply font-semibold;
}
.hotels__details span {
  @apply font-normal;
}
</style>
