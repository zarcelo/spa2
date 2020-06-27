<template>
  <!-- About Section -->
  <div class="w3-container" style="padding:128px 16px" id="about">
    <h3 class="w3-center">SOBRE NOSOTROS</h3>
    <p class="w3-center w3-large">Las caracteristicas claves de nuestra componía</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
      <div v-for="(item, index) in about" :key="index" class="w3-quarter">
        <i v-bind:class="[ item.icon ]+' w3-margin-bottom w3-jumbo w3-center'"></i>
        <p class="w3-large">{{ item.name }}</p>
        <p>{{item.description}}</p>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";

export default {
  data() {
    return {
      about: []
    };
  },
  created() {
    this.getAbout();
  },
  methods: {
    async getAbout() {
      try {
        await axios.get("/api/about").then(res => {
          this.about = res.data;
        });
      } catch (error) {
        console.log(error);
        toastr.error("Error");
      }
    }
  }
};
</script>
