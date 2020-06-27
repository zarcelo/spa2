<template>
  <!-- Team Section -->
  <div class="w3-container" style="padding:128px 16px" id="team">
    <h3 class="w3-center">EL EQUIPO</h3>
    <p class="w3-center w3-large">Los miembros de nuestra compania</p>
    <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
      <div v-for="(item, index) in team" :key="index" class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img :src="item.images" class="img-rounded" :alt="item.name" style="width:100%" />
          <div class="w3-container">
            <h3>{{ item.name }}</h3>
            <p class="w3-opacity">{{ item.position }}</p>
            <p>{{ item.description }}</p>
            <p>
              <button class="w3-button w3-light-grey w3-block">
                <i class="fa fa-envelope"></i>
                Contact
              </button>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      team: []
    };
  },
  created() {
    this.getTeam();
  },
  methods: {
    async getTeam() {
      try {
        await axios.get("/api/team").then(res => {
          this.team = res.data;
        });
      } catch (error) {
        console.log(error);
        toastr.error("Error");
      }
    }
  }
};
</script>
