<template>
  <div>
    <!-- Work Section -->
    <div class="w3-container" style="padding:128px 16px" id="work">
      <h3 class="w3-center">NUESTRO TRABAJO</h3>
      <p class="w3-center w3-large">Lo que hacemos por nuestra gente.</p>

      <div class="w3-row-padding" style="margin-top:64px">
        <div v-for="(item, index) in work" :key="index" class="w3-col l3 m6">
          <img
            :src="item.images"
            class="w3-hover-opacity"
            :alt="item.name"
            onclick="onClick(this)"
            style="width:100%"
          />
        </div>
      </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
      <span
        class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright"
        title="Close Modal Image"
      >×</span>
      <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image" />
        <p id="caption" class="w3-opacity w3-large"></p>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";

export default {
  data() {
    return {
      work: []
    };
  },
  created() {
    this.getWork();
  },
  methods: {
    async getWork() {
      try {
        await axios.get("/api/work").then(res => {
          this.work = res.data;
        });
      } catch (error) {
        console.log(error);
        toastr.error("Error");
      }
    }
  }
};
</script>
