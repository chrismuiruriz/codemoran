let vueConfig = {
  el: "#app",
  data() {
    return {
      showMenu: false,
    };
  },
  created() {
    console.log("App Created");
  },
  mounted() {
    let self = this;

    var testimonialSlider = new Swiper(".swiper-testimonial", {
      slidesPerView: 1,
      Observer: true,
      loop: true,
      ObserveParents: true,
      autoplay: { delay: 3500 },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  },
};

let app = new Vue(vueConfig);
