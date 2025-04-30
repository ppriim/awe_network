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
  const fadeEls = document.querySelectorAll('.scroll-fadein');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('opacity-100', 'translate-y-0');
      }
    });
  }, { threshold: 0.3 });

  fadeEls.forEach(el => {
    el.classList.add('opacity-0', 'translate-y-4', 'transition', 'duration-700');
    observer.observe(el);
  });
});

// section 3
window.addEventListener('load', () => {
  const section = document.getElementById('awesome-section');
  const cards = document.querySelectorAll('.card');

  let targetRotation = 0;
  let currentRotation = 0;
  const maxRotation = 15;

  section.addEventListener('mousemove', (e) => {
    const rect = section.getBoundingClientRect();
    const mouseX = e.clientX - rect.left;
    const percent = (mouseX / rect.width - 0.5) * 2;
    targetRotation = percent * maxRotation;
  });

  section.addEventListener('mouseleave', () => {
    targetRotation = 0;
  });

  function animate() {
    currentRotation += (targetRotation - currentRotation) * 0.08; // ความลื่น
    cards.forEach(card => {
      card.style.transform = `perspective(1000px) rotateY(${currentRotation}deg)`;
    });
    requestAnimationFrame(animate);
  }

  animate();
});
