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
  // hero section
  const title = document.getElementById('about-hero-title');
  const desc = document.getElementById('about-hero-desc');

  const heroObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        title.classList.remove('opacity-0', 'scale-150');
        title.classList.add('opacity-100', 'scale-100');

        desc.classList.remove('opacity-0', 'scale-70');
        desc.classList.add('opacity-100', 'scale-100');
      }
    });
  }, { threshold: 0.3 });

  heroObserver.observe(title);

  const story = document.getElementById('story-block');

  // section 2
  const storyObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        story.classList.remove('opacity-0', 'scale-75', 'blur-sm');
        story.classList.add('opacity-100', 'scale-100', 'blur-0');
      }
    });
  }, { threshold: 0.3 });
  
  storyObserver.observe(story);
  

  // section 4
  const text = document.getElementById('bee-text');
  const name = document.getElementById('bee-name');
  const image = document.getElementById('bee-image');

  const beeObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        text.classList.remove('opacity-0', 'scale-110');
        text.classList.add('opacity-100', 'scale-100');

        setTimeout(() => {
          name.classList.remove('opacity-0', 'scale-110');
          name.classList.add('opacity-100', 'scale-100');
        }, 300);

        setTimeout(() => {
          image.classList.remove('opacity-0', 'blur-sm');
          image.classList.add('opacity-100', 'blur-0');
        }, 700);
      }
    });
  }, { threshold: 0.4 });

  beeObserver.observe(text);

  //section 5
  const kritText = document.getElementById('krit-text');
  const kritName = document.getElementById('krit-name');
  const kritImage = document.getElementById('krit-image');

  const kritObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        kritText.classList.remove('opacity-0', 'scale-110');
        kritText.classList.add('opacity-100', 'scale-100');

        setTimeout(() => {
          kritName.classList.remove('opacity-0', 'scale-110');
          kritName.classList.add('opacity-100', 'scale-100');
        }, 300);

        setTimeout(() => {
          kritImage.classList.remove('opacity-0', 'blur-sm');
          kritImage.classList.add('opacity-100', 'blur-0');
        }, 700);
      }
    });
  }, { threshold: 0.3 });

  kritObserver.observe(kritText);

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
