<template>
  <header class="header">
    <div class="header__content content">
      <h1 class="header__logo">Technical test Jr.</h1>

      <nav class="header__nav">
        <a :href="route('hotels.index')" class="header__link">Hotels</a>
      </nav>
    </div>
  </header>
</template>

<script setup></script>

<style scoped lang="css">
.header {
  @apply py-10 shadow-md;
}
.header__content {
  @apply flex gap-2 justify-between items-center;
}
.header__logo {
  @apply text-3xl font-semibold;
}
.header__nav {
  @apply flex;
}
.header__link {
  @apply text-lg font-semibold p-2 border rounded-md text-gray-600 hover:text-black hover:bg-gray-200 transition-colors duration-[250ms];
}
</style>
