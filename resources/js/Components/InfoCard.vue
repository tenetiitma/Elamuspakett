<script setup>
import { StarIcon } from "@heroicons/vue/24/solid";
import { Link } from "@inertiajs/vue3";

defineProps({
  item: Object,
});
</script>

<template>
  <Link
    :href="route('packet')"
    class="pb-4 bg-white border-[1px] shadow-md hover:scale-[1.1] ease-in-out duration-300 p-1"
  >
    <img :src="item.img" />
    <div class="p-2">
      <p class="text-xl font-bold mb-2">{{ item.activity }}</p>
      <div class="flex mb-2">
        <StarIcon class="w-6 h-6 text-yellow-400 mr-1" />
        <p class="text-xl text-yellow-400">{{ item.rating }}</p>
      </div>

      <p class="mb-3">{{ item.location }}</p>
      <div class="grid grid-cols-2">
        <p v-if="item.discounted_price" class="text-xl font-bold text-rose-600">
          {{ item.discounted_price }} EUR
        </p>
        <p
          :class="[
            item.discounted_price
              ? 'text-sm font-bold line-through text-end'
              : 'text-xl font-bold',
          ]"
        >
          {{ item.full_price }} EUR
        </p>
      </div>
    </div>
  </Link>
</template>
