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
        title: that.messageConfirm,
        icon: "warning",
        confirmButtonText: "Xóa",
        cancelButtonText: "Đóng lại",
        showCancelButton: true,
      }).then((result) => {
        if (result.value) {
          }      });
    },
  },
};
</script>
