<template>
    <section>
        <ul class="list-disc px-10">
            <li v-for="hotel in hotels">
                <article class="flex flex-col gap-4">
                    <h1 class="text-2xl">{{ hotel.name }}</h1>
                    <p class="text-lg">{{ hotel.price }}</p>
                </article>
            </li>
        </ul>
    </section>
</template>

<script setup>
const props = defineProps({
    hotels: {
        type: Array,
        required: true,
    },
});
</script>
