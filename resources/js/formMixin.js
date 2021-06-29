import GoogleReCaptchaV3 from './components/googlerecaptchav3/GoogleReCaptchaV3.vue';
export default {
  components: { GoogleReCaptchaV3 },
  data() {
    return {
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      fields: {},
      errors: {},
      success: false,
      loaded: true,
      action: '',
    }
  },
  methods: {
    formSubmit() {
      if(this.loaded){
        this.loaded = false;
        this.success = false;
        this.errors = {};
        axios.post(this.action, this.fields).then(response => {
          this.$refs.captcha.execute();
          this.fields = {}; //clear input fields
          this.loaded = true;
          this.success = true;
        }).catch(error => {
          this.$refs.captcha.execute();
          this.loaded = true;
          if(error.response.status === 422){
            this.errors = error.response.data.errors || {};
          }
        });
      }
    },
    authSubmit() {
      if(this.loaded){
        this.loaded = false;
        this.success = false;
        this.errors = {};
        axios.post(this.action, this.fields).then(response => {
          this.$refs.captcha.execute();
          this.fields = {}; //clear input fields
          this.loaded = true;
          this.success = true;
          window.location.href = '/home';
        }).catch(error => {
          this.$refs.captcha.execute();
          this.loaded = true;
          if(error.response.status === 422){
            this.errors = error.response.data.errors || {};
          }
        });
      }
    },
  },
}