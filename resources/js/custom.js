(function () {
  'use strict';

  // 1. AOS (Animate On Scroll)
  window.addEventListener('load', function () {
  AOS.init({
    duration: 800,
    easing: 'slide',
    once: true
  });
});

  // 2. Parallax effect using Rellax
  var rellax = new Rellax('.rellax');

  // 3. Preloader
  var preloader = function () {
    var loader = document.querySelector('.loader');
    var overlay = document.getElementById('overlayer');

    function fadeOut(el) {
      el.style.opacity = 1;
      (function fade() {
        if ((el.style.opacity -= 0.1) < 0) {
          el.style.display = "none";
        } else {
          requestAnimationFrame(fade);
        }
      })();
    }

    setTimeout(function () {
      fadeOut(loader);
      fadeOut(overlay);
    }, 200);
  };
  preloader();

  // 4. Tiny Slider - for .destination-slider only
  var destinationSlider = document.querySelectorAll('.destination-slider');
  if (destinationSlider.length > 0) {
    tns({
      container: ".destination-slider",
      mouseDrag: true,
      items: 1,
      axis: "horizontal",
      swipeAngle: false,
      speed: 700,
      edgePadding: 50,
      nav: true,
      gutter: 30,
      autoplay: true,
      autoplayButtonOutput: false,
      controlsContainer: "#destination-controls",
      responsive: {
        350: { items: 1 },
        500: { items: 2 },
        600: { items: 3 },
        900: { items: 5 }
      },
    });
  }

  // 5. Hero Swiper
  document.addEventListener('DOMContentLoaded', function () {
    window.heroSwiper = new Swiper(".heroSwiper", {
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      effect: 'slide',
      fadeEffect: { crossFade: true },
      speed: 2000
    });

    const prevBtn = document.querySelector('#hero-swiper-controls .prev');
    const nextBtn = document.querySelector('#hero-swiper-controls .next');

    if (prevBtn && nextBtn && window.heroSwiper) {
      prevBtn.addEventListener('click', () => heroSwiper.slidePrev());
      nextBtn.addEventListener('click', () => heroSwiper.slideNext());
    }
  });

  // 6. Navbar scroll effect
  document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".site-nav");

    window.addEventListener("scroll", function () {
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });
  });

  // 7. Mobile menu cloning and toggle
  var siteMenuClone = function () {
    var jsCloneNavs = document.querySelectorAll('.js-clone-nav');
    var siteMobileMenuBody = document.querySelector('.site-mobile-menu-body');

    jsCloneNavs.forEach(nav => {
      var navCloned = nav.cloneNode(true);
      navCloned.setAttribute('class', 'site-nav-wrap');
      siteMobileMenuBody.appendChild(navCloned);
    });

    setTimeout(function () {
      var hasChildrens = document.querySelector('.site-mobile-menu').querySelectorAll('.has-children');
      var counter = 0;
      hasChildrens.forEach(hasChild => {
        var refEl = hasChild.querySelector('a');
        var newElSpan = document.createElement('span');
        newElSpan.setAttribute('class', 'arrow-collapse collapsed');
        hasChild.insertBefore(newElSpan, refEl);

        var arrowCollapse = hasChild.querySelector('.arrow-collapse');
        arrowCollapse.setAttribute('data-toggle', 'collapse');
        arrowCollapse.setAttribute('data-target', '#collapseItem' + counter);

        var dropdown = hasChild.querySelector('.dropdown');
        if (dropdown) {
          dropdown.setAttribute('class', 'collapse');
          dropdown.setAttribute('id', 'collapseItem' + counter);
        }

        counter++;
      });
    }, 1000);

    // Toggle button
    var menuToggle = document.querySelectorAll(".js-menu-toggle");
    var specifiedElement = document.querySelector(".site-mobile-menu");

    document.addEventListener('click', function (event) {
      var isClickInside = specifiedElement.contains(event.target);
      var mt = false;
      menuToggle.forEach(mtoggle => {
        if (mtoggle.contains(event.target)) {
          mt = true;
        }
      });

      if (!isClickInside && !mt) {
        if (document.body.classList.contains('offcanvas-menu')) {
          document.body.classList.remove('offcanvas-menu');
          menuToggle.forEach(mtoggle => mtoggle.classList.remove('active'));
        }
      }
    });

    menuToggle.forEach(mtoggle => {
      mtoggle.addEventListener("click", function (e) {
        if (document.body.classList.contains('offcanvas-menu')) {
          document.body.classList.remove('offcanvas-menu');
          mtoggle.classList.remove('active');
        } else {
          document.body.classList.add('offcanvas-menu');
          mtoggle.classList.add('active');
        }
      });
    });
  };
  siteMenuClone();

})();
