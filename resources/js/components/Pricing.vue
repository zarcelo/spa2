<template>
  <!-- Pricing Section -->
  <div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
    <h3>PLANES</h3>
    <p class="w3-large">Elija el plan que se ajusta a sus necesidades.</p>
    <div class="w3-row-padding" style="margin-top:64px">

      <div v-for="(item, index) in price" :key="index" class="w3-third w3-section">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="w3-black w3-xlarge w3-padding-32">{{ item.name }}</li>
          <li class="w3-padding-16">
            <b>{{ item.storage }}GB</b> Storage
          </li>
          <li class="w3-padding-16">
            <b>{{ item.emails }}</b> Emails
          </li>
          <li class="w3-padding-16">
            <b>{{ item.domains }}</b> Domains
          </li>
          <li class="w3-padding-16">
            <b>{{ item.support }}</b> Support
          </li>
          <li class="w3-padding-16">
            <h2 class="w3-wide">$ {{ item.price }}</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-black w3-padding-large">Sign Up</button>
          </li>
        </ul>
      </div>


    </div>
  </div>
</template>
<script>
import axios from "axios";

export default {
  data() {
    return {
      price: []
    };
  },
  created() {
    this.getPrice();
  },
  methods: {
    async getPrice() {
      try {
        await axios.get("/api/price").then(res => {
          this.price = res.data;
        });
      } catch (error) {
        console.log(error);
        toastr.error("Error");
      }
    }
  }
};
</script>
