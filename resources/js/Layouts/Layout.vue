<template>
  <div>
    <Header />

    <main class="content">
      <slot />
    </main>
  </div>
</template>

<script setup>
import Header from "../Components/Header.vue";
</script>
