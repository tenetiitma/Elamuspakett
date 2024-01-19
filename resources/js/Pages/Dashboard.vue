<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import InputLabel from "@/Components/InputLabel.vue";
import InfoCard from "@/Components/InfoCard.vue";
import { ref } from "vue";

defineProps({
  data: Object,
});

const productPrice = ref(50);
</script>

<template>
  <Head title="Dashboard" />

  <GuestLayout>
    <template #header>
      <p class="text-5xl font-medium leading-tight text-center">
        ELAMUSTEENUSED
      </p>
    </template>

    <div class="py-12">
      <div class="max-w-screen mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden sm:rounded-lg">
          <div class="p-6 text-gray-900 grid grid-cols-12 gap-24">
            <div class="col-span-3 grid gap-6">
              <div
                class="bg-[#ffffff93] rounded-md grid px-6 pt-4 pb-6 border-[1px] border-[#c7c7c769] shadow-md"
              >
                <InputLabel class="mb-2" for="asukoht"
                  >Otsi märksõna järgi</InputLabel
                >
                <input
                  type="text"
                  class="text-sm rounded-md bg-[#ffffffa2] border-[1px] border-gray-300"
                />
              </div>
              <div
                class="bg-[#ffffff93] rounded-md grid px-6 pt-4 pb-6 border-[1px] border-[#c7c7c769] shadow-md"
              >
                <InputLabel class="mb-1" for="asukoht">Asukoht</InputLabel>
                <select
                  name="asukoht"
                  id=""
                  class="text-sm rounded-md bg-[#ffffffa2] border-[1px] border-gray-300"
                >
                  <option selected="true" disabled="disabled" class="text-xs"
                    >Vali koht</option
                  >
                  <option value="">Saaremaa</option>
                  <option value="">Muhumaa</option>
                  <option value="">Kuressaare linn</option>
                  <option value="">Kihelkonna</option>
                  <option value="">Laimjala</option>
                  <option value="">Lääne-Saare</option>
                  <option value="">Mustjala</option>
                  <option value="">Orissaare</option>
                  <option value="">Pihtla</option>
                  <option value="">Pöide</option>
                  <option value="">Salme</option>
                  <option value="">Torgu</option>
                  <option value="">Valjala</option>
                </select>
              </div>
              <div
                class="bg-[#ffffff93] rounded-md grid px-6 pt-4 pb-6 border-[1px] border-[#c7c7c769] shadow-md mb-4"
              >
                <InputLabel>Hind</InputLabel>
                <p class="text-center">0€ - {{ productPrice }}€</p>
                <input
                  type="range"
                  min="0"
                  max="500"
                  step="1"
                  v-model="productPrice"
                />
              </div>
              <Link
                class="bg-gradient-to-r from-[#ffae44] to-[#ffd45e] rounded-lg text-center py-1 border-[1px] border-[#ffbc64] shadow-sm font-medium"
                :href="route('matk')"
                >MATK</Link
              >
              <Link
                class="bg-gradient-to-r from-[#ffae44] to-[#ffd45e] rounded-lg text-center py-1 border-[1px] border-[#ffbc64] shadow-sm font-medium"
                :href="route('matk')"
                >RANNAPUHKUS</Link
              >
              <Link
                class="bg-gradient-to-r from-[#43B692] to-[#8fe4c5] rounded-lg text-center py-1 shadow-sm text-white font-black"
                :href="route('matk')"
                >RETRIIT LAAGER</Link
              >
              <Link
                class="bg-gradient-to-r from-[#43B692] to-[#8fe4c5] rounded-lg text-center py-1 shadow-sm text-white font-black"
                :href="route('matk')"
                >KULTUURIPUHKUS</Link
              >
              <Link
                class="bg-gradient-to-r from-[#62c3a4] to-[#8fe4c5] rounded-lg text-center py-1 shadow-sm text-white font-black"
                :href="route('matk')"
                >SEIKLUSRAJAD</Link
              >
              <Link
                class="bg-gradient-to-r from-[#ffae44] to-[#ffd45e] rounded-lg text-center py-1 border-[1px] border-[#ffbc64] shadow-sm font-medium"
                :href="route('matk')"
                >HOBUTEGEVUS</Link
              >
              <Link
                class="bg-gradient-to-r from-[#ffae44] to-[#ffd45e] rounded-lg text-center py-1 border-[1px] border-[#ffbc64] shadow-sm font-medium"
                :href="route('matk')"
                >SPORTMÄNGUD</Link
              >
              <Link
                class="bg-gradient-to-r from-[#ffae44] to-[#ffd45e] rounded-lg text-center py-1 border-[1px] border-[#ffbc64] shadow-sm font-medium"
                :href="route('matk')"
                >RATTARENT</Link
              >
              <Link
                class="bg-gradient-to-r from-[#ffae44] to-[#ffd45e] rounded-lg text-center py-1 border-[1px] border-[#ffbc64] shadow-sm font-medium"
                :href="route('matk')"
                >PEREPUHKUS</Link
              >
              <Link
                class="bg-gradient-to-r from-[#ffae44] to-[#ffd45e] rounded-lg text-center py-1 border-[1px] border-[#ffbc64] shadow-sm font-medium"
                :href="route('matk')"
                >EVENTS</Link
              >
            </div>
            <div class="col-start-4 col-span-9">
              <div class="grid grid-cols-4 gap-8">
                <template
                  v-for="(packet, index) in data.info_cards"
                  :key="index"
                >
                  <InfoCard :item="packet" />
                </template>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </GuestLayout>
</template>
