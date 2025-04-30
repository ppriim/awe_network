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

  section.addEventListener('mousemove', (e) => {
    const rect = section.getBoundingClientRect();
    const mouseX = e.clientX - rect.left;
    const percent = (mouseX / rect.width - 0.5) * 2; // -1 (left) → 1 (right)

    const rotateY = percent > 0 ? -25 : 25;  // หันออกขวา/ซ้าย
    const scaleLeft = percent > 0 ? 0.92 : 1.08;  // ถ้าหันขวา → มุมซ้ายเล็กลง
    const scaleRight = percent > 0 ? 1.08 : 0.92; // ถ้าหันขวา → มุมขวาใหญ่ขึ้น

    cards.forEach(card => {
      // ใช้ scale3d: scaleX, scaleY, scaleZ (จำลองความลึก + skew)
      card.style.transform = `perspective(800px) rotateY(${rotateY}deg) scale3d(${scaleLeft}, 1, ${scaleRight})`;
    });
  });

  section.addEventListener('mouseleave', () => {
    cards.forEach(card => {
      card.style.transform = `rotateY(0deg) scale3d(1, 1, 1)`;
    });
  });
});

