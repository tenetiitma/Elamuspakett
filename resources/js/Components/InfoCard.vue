<script setup>
import { StarIcon } from "@heroicons/vue/24/solid";

defineProps({
  item: Object,
});
</script>

<template>
  <div
    class="pb-4 bg-white border-[1px] shadow-md hover:scale-[1.1] ease-in-out duration-300 p-1"
  >
    <img :src="item.img" />
    <div class="p-2">
      <p class="text-2xl font-bold">{{ item.activity }}</p>
      <div class="flex">
        <StarIcon class="w-6 h-6 text-yellow-400 mr-1" />
        <p class="text-xl text-yellow-400">{{ item.rating }}</p>
      </div>

      <p>{{ item.location }}</p>
      <p v-if="item.discounted_price" class="text-xl font-bold text-rose-600">
        {{ item.discounted_price }} EUR
      </p>
      <p
        :class="[
          item.discounted_price
            ? 'text-xl font-bold line-through'
            : 'text-xl font-bold',
        ]"
      >
        {{ item.full_price }} EUR
      </p>
    </div>
  </div>
</template>
