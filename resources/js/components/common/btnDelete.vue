<template>
  <i
    class="fas fa-trash-alt custom-icon-blue"
    @click="showAlert"
    style="cursor: pointer"
  ></i>
  <loader :flag-show="flagShowLoader"></loader>
</template>

<script>
import Loader from "./loader.vue";
import axios from "axios";
import $ from "jquery";
import { Notyf } from "notyf";

export default {
  data() {
    return {
      flagShowLoader: false,
    };
  },
  components: {
    Loader,
  },
  mounted() {},
  methods: {
    showAlert() {
      let that = this;
     
        if (result.value) {
          that.flagShowLoader = true;
          window.$(".loading-div").removeClass("hidden");
          axios
            .delete(that.deleteAction, {
              _token: Laravel.csrfToken,
            })
            .then(function (response) {
              const notyf = new Notyf({
                duration: 6000,
                position: {
                  x: "right",
                  y: "bottom",
                },
               
              });
              setTimeout(function () {
                location.reload();
              }, 1100);
              return notyf.success(response.data.message);
            })
            .catch((error) => {
              that.flagShowLoader = false;
            });
    }},
  },
};
</script>
<style>
.custom-icon-blue {
  color: rgb(93, 135, 255);
}
</style>
