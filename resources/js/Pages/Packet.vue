<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<template>
  <GuestLayout>
    <template #header>
      <p class="text-5xl font-medium leading-tight text-center">
        ELAMUSTEENUSED
      </p>
    </template>
    <div>
      <h3 class="font-bold text-center flex">OUTDOOR ADVENTURE</h3>
      <p class="font-bold">Mountain peak expedition</p>
      <div class="max-w-7xl max-h-96">
        <img
          src="https://cdn.kingitus.ee/storage/photos/products/105749/17636.jpg?w=2000&h=2000"
          alt="saun"
        />
      </div>
      <ul>
        <li>€</li>
        <li>Asukoht:</li>
        <li>Riietus:</li>
        <li>Osalejad:</li>
        <li>Kestvus:</li>
        <li>Lisainfo:</li>
      </ul>
    </div>
  </GuestLayout>
</template>
