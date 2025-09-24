document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".portfolio-swiper", {
        loop: true,
        speed: 800,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        on: {
            init: function () {
                updateHeadingThumb(this);
                updateCounter(this);
            },
            slideChange: function () {
                updateHeadingThumb(this);
                updateCounter(this);
            },
        },
    });

    function updateHeadingThumb(swiper) {
        const activeSlide = swiper.slides[swiper.activeIndex];
        if (!activeSlide) return;
      
        const thumbUrl = activeSlide.getAttribute("data-thumb");
        const headingThumb = document.querySelector(".heading-thumb img");
      
        if (thumbUrl && headingThumb) {
            headingThumb.src = thumbUrl;
        }
    }      
  
    function updateCounter(swiper) {
        const current = document.querySelector(".slide-counter .current");
        if (current) {
            current.textContent = String(swiper.realIndex + 1).padStart(2, "0");
        }
    }
});
  
  