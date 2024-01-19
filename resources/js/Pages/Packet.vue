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
    <div class="flex flex-col items-center">
      <p class="text-5xl font-bold">OUTDOOR ADVENTURE</p>
      <p class="font-bold">Mountain peak expedition</p>
      <div class="flex flex-row w-[580px]">
        <img class="border-2 rounded-lg"
          src="https://cdn.kingitus.ee/storage/photos/products/105749/17636.jpg?w=2000&h=2000"
          alt="saun"
        />
        <img class="border-2 rounded-lg"
          src="https://cdn.kingitus.ee/storage/photos/products/020402/7891.jpg?w=2000&h=2000"
          alt="langevari"
        />
        <img class="border-2 rounded-lg"
          src="https://wwwnc.cdc.gov/travel/images/mountain-biker.jpg"
          alt="langevari"
        />
      </div>
      <ul class="pb-4">
        <li class="text-2xl flex flex-row gap-4">Hind:<p class="text-2xl font-bold text-rose-600">120</p>€</li>
        <li class="text-2xl flex flex-row gap-4">Asukoht:<p class="text-2xl font-bold">Karujärve Saaremaa</p></li>
        <li class="text-2xl flex flex-row gap-4">Riietus:<p class="text-2xl font-bold">Vastavalt ilmale</p></li>
        <li class="text-2xl flex flex-row gap-4">Osalejad:<p class="text-2xl font-bold">2-4</p>inimest</li>
        <li class="text-2xl flex flex-row gap-4">Kestvus:<p class="text-2xl font-bold">120</p>min</li>
        <li class="text-2xl flex flex-row gap-4">Lisainfo:<p class="text-m font-bold"></p></li>
      </ul>
    </div>
  </GuestLayout>
</template>
