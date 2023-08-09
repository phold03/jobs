

<script>
export default {
  data() {
    return {
      reason: '',
      check: false,
    };
  },
  methods: {
    cancel(value) {
      if (value.target.checked) {
        this.check = true;
      }else{
        this.check = false
      }
    },
  },
};
</script>

<style>
</style>