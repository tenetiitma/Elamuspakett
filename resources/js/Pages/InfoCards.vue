<script>
import InfoCard from "@/components/InfoCard.vue";

export default {
  props: {
    data: Object,
  },
  components: {
    InfoCard,
  },
  mounted() {
    console.log("Data in InfoCards.vue:", this.data);
  },
};
</script>
<template>
  <div>
    <h1>Info Cards</h1>
    <info-card
      v-for="item in data.info_cards.info_cards"
      :key="item.id"
      :item="item"
    ></info-card>
  </div>
</template>
