<template>
    <section>
        <ul>
            <li v-for="hotel in hotels">
                <h1>{{ hotel.name }}</h1>
                <p>{{ hotel.price }}</p>
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
