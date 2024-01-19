<template>
  <div class="pb-4 bg-white">
    <p class="text-2xl font-bold">{{ item.activity }}</p>
    <p>{{ item.rating }}</p>
    <p>{{ item.location }}</p>
    <p class="text-xl font-bold">{{ item.full_price }}</p>
    <p class="text-xl font-bold text-rose-700">{{ item.discounted_price }}</p>
  </div>
</template>

<script>
export default {
  props: {
    item: Object,
  },
};
</script>
