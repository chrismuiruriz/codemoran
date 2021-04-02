let vueConfig = {
  data() {
    return {
      showMenu: false,
      faqs: FAQS
    }
  },
  methods: {
    toggleMenu() {
      this.showMenu = !this.showMenu;
    }
  }
};

const app = new Vue(vueConfig);
app.$mount("#app");