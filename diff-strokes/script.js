let vueConfig = {
  el: "#app",
  data() {
    return {
      showMobileMenu: false,
    }
  },
  created() {

  },
  methods: {
    toggleMobileMenu() {
      this.showMobileMenu = !this.showMobileMenu;
    }
  }
};

let app = new Vue(vueConfig);