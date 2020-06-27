<template>
  <!-- Promo Section - "We know design" -->
  <div class="w3-container w3-light-grey" style="padding:128px 16px">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3>{{ promo.name }}</h3>
        <p>{{promo.description}}</p>
        <p>
          <a href="#work" class="w3-button w3-black">
            <i class="fa fa-th"></i> View Our Works
          </a>
        </p>
      </div>
      <div class="w3-col m6">
        <img
          :src="promo.images"
          class="w3-image w3-round-large"
          :alt="promo.name"
          width="700"
          height="394"
        />
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      promo: []
    };
  },
  created() {
    this.getPromo();
  },
  methods: {
    async getPromo() {
      try {
        await axios.get("/api/promo").then(res => {
          this.promo = res.data;
        });
      } catch (error) {
        console.log(error);
        toastr.error("Error");
      }
    }
  }
};
</script>
