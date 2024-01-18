<!-- resources/js/components/InfoCard.vue -->

<template>
  <div>
    <p>{{ item.activity }}</p>
    <p>{{ item.rating }}</p>
    <p>{{ item.location }}</p>
    <p>{{ item.full_price }}</p>
    <p>{{ item.discounted_price }}</p>
    <!-- Add more details or customize as needed -->
  </div>
</template>

<script>
export default {
  props: {
    item: Object,
  },
};
</script>
