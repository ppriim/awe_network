import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init();

import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';


import Swiper from 'swiper';
import { Navigation, Pagination, A11y, EffectFade } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';


document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);
    Swiper.use([Navigation, Pagination, A11y, EffectFade]);

    // section 2
    // ตั้ง Timeline สำหรับ h2 และ p
    const tl = gsap.timeline({
        scrollTrigger: {
          trigger: ".motion-h2",
          start: "top 80%",
          toggleActions: "play none none none",
        }
      });
  
      // 1. Animate H2 (fade + blur)
      tl.from(".motion-h2", {
          opacity: 0,
          filter: "blur(10px)",
          duration: 2.2,
          ease: "power3.out",
          onUpdate: function(self) {
              const progress = self.progress;
              gsap.set(".motion-h2", {
                  filter: `blur(${10 - progress * 10}px)` // ทำให้ blur หายตาม progress
              });
          }
      })
  
      // 2. Animate P (scale up) ต่อจาก H2
      .from(".motion-p", {
          opacity: 0,
          scale: 0.8,
          duration: 2,
          ease: "power3.out"
      });

    // Swiper ของ Section 3
    const swiper = new Swiper('.our-customers-tab', {
        loop: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true,
        },
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            bulletClass: 'swiper-pagination-bullet bg-white opacity-40',
            bulletActiveClass: 'swiper-pagination-bullet-active opacity-100',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        speed: 600,
    });

    const flash = document.getElementById('flash-overlay');

    swiper.on('slideChangeTransitionStart', () => {
        flash.classList.remove('opacity-0');
        flash.classList.add('opacity-70');
    });

    swiper.on('slideChangeTransitionEnd', () => {
        flash.classList.remove('opacity-70');
        flash.classList.add('opacity-0');
    });



    // Swiper ของ Section 5: Testimonials
    new Swiper('.testimonial-swiper', {
        loop: false,
        slidesPerView: 1,
        centeredSlides: true,
        grabCursor: true,
        navigation: {
            nextEl: '.testimonial-button-next',
            prevEl: '.testimonial-button-prev',
        },
        pagination: {
            el: '.testimonial-pagination',
            clickable: true,
        },
    });

});



