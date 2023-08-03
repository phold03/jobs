
<script>
import Loader from "./loader.vue";
import axios from "axios";
import $ from "jquery";

export default {
  data() {
    return {
      flagShowLoader: false,
    };
  },
  components: {
    Loader,
  },
  mounted() { },
  methods: {
    showAlert() {
      let that = this;
      this.$swal({
      }).then((result) => {
        if (result.value) {
          that.flagShowLoader = true;
          $(".loading-div").removeClass("hidden");
          axios
            .delete(that.deleteAction, {
              _token: Laravel.csrfToken,
            })
            .then(function (response) {
              that.flagShowLoader = false;
              $(".loading-div").addClass("hidden");
              that
            })
            .catch((error) => {
              that.flagShowLoader = false;
            });
        }
      });
    },
  },
};
</script>
