<script setup>
import { Head } from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<template>
  <Head title="Cart" />

  <GuestLayout>
    <template #header>
      <p
        class="text-5xl font-medium leading-tight text-center text-transparent bg-clip-text bg-gradient-to-r from-[#FF9000] to-[#FFBA00]"
      >
        OSTUKORV
      </p>
    </template>
  </GuestLayout>
</template>
