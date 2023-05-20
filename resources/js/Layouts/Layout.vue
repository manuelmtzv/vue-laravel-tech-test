<template>
  <div>
    <Header />

    <main class="content main-container">
      <slot />
    </main>
  </div>
</template>

<script setup>
import Header from "../Components/Header.vue";
</script>

<style scoped lang="css">
.main-container {
  @apply py-8;
}
</style>
