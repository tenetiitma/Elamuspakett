<template>
  <div class="pb-4 bg-white border-2 border-black">
    <img :src="item.img">
    <p class="text-2xl font-bold">{{ item.activity }}</p>
    <p class="text-xl text-yellow-400">{{ item.rating }}</p>
    <p>{{ item.location }}</p>

    <p v-if="item.discounted_price" class="text-xl font-bold text-rose-600">{{ item.discounted_price }} EUR</p>
    <p :class='[item.discounted_price ? "text-xl font-bold line-through": "text-xl font-bold"]'>{{ item.full_price }} EUR</p>
  </div>
</template>

<script>
export default {
  props: {
    item: Object,
  },
};
</script>
