<template>
  <!-- Promo Section "Statistics" -->
  <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
    <div v-for="(item, index) in statistic" :key="index" class="w3-quarter">
      <span class="w3-xxlarge">{{ item.value }}</span>
      <br />
      {{ item.name }}
    </div>
  </div>
</template>
<script>
import axios from "axios";

export default {
  data() {
    return {
      statistic: []
    };
  },
  created() {
    this.getStatistic();
  },
  methods: {
    async getStatistic() {
      try {
        await axios.get("/api/statistic").then(res => {
          this.statistic = res.data;
        });
      } catch (error) {
        console.log(error);
        toastr.error("Error");
      }
    }
  }
};
</script>
