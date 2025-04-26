import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init();

import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

import Swiper from 'swiper';
import { Navigation, Pagination, A11y } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

Swiper.use([Navigation, Pagination, A11y]);

document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.our-customers-tab', {
        loop: false,
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



