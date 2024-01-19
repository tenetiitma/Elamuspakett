<script setup>
import { Head } from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<template>
  <Head title="Company" />

  <GuestLayout>
    <template #header>
      <div class="text-5xl font-medium leading-tight text-center">
        LOGI SISSE
      </div>
    </template>
  </GuestLayout>
</template>
