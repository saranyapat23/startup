document.addEventListener('DOMContentLoaded', () => {

  // ---------------- carousel ----------------
  const nextDom = document.getElementById('next');
  const prevDom = document.getElementById('prev');
  const carouselDom = document.querySelector('.carousel');
  const SliderDom = carouselDom.querySelector('.carousel .list');
  const thumbnailBorderDom = document.querySelector('.carousel .thumbnail');
  const thumbnailItemsDom = thumbnailBorderDom.querySelectorAll('.item');

  thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
  const timeRunning = 3000;
  const timeAutoNext = 7000;

  nextDom.onclick = () => showSlider('next');
  prevDom.onclick = () => showSlider('prev');

  let runTimeOut;
  let runNextAuto = setTimeout(() => nextDom.click(), timeAutoNext);

  function showSlider(type) {
    const SliderItemsDom = SliderDom.querySelectorAll('.carousel .list .item');
    const thumbnailItemsDom = document.querySelectorAll('.carousel .thumbnail .item');

    if (type === 'next') {
      SliderDom.appendChild(SliderItemsDom[0]);
      thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
      carouselDom.classList.add('next');
    } else {
      SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
      thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
      carouselDom.classList.add('prev');
    }

    clearTimeout(runTimeOut);
    runTimeOut = setTimeout(() => {
      carouselDom.classList.remove('next');
      carouselDom.classList.remove('prev');
    }, timeRunning);

    clearTimeout(runNextAuto);
    runNextAuto = setTimeout(() => nextDom.click(), timeAutoNext);
  }

  // ---------------- cinematic particles ----------------
  const canvas = document.getElementById('cinematic-bg');
  const ctx = canvas.getContext('2d');

  function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  }
  resizeCanvas();
  window.addEventListener('resize', resizeCanvas);

  const particles = [];
  const particleCount = Math.max(40, Math.floor(window.innerWidth / 30));
  let mouse = { x: -9999, y: -9999 };
  let scrollSpeed = 0;

  class Particle {
    constructor() { this.reset(true); }
    reset(init = false) {
      this.x = Math.random() * canvas.width;
      this.y = Math.random() * canvas.height + (init ? 0 : canvas.height * 0.1);
      this.size = Math.random() * 2.5 + 0.6;
      this.baseSpeed = Math.random() * 0.6 + 0.2;
      this.speed = this.baseSpeed;
      this.angle = Math.random() * Math.PI * 2;
      this.alpha = 0.03 + Math.random() * 0.07;
    }
    update(delta) {
      this.y -= (this.speed + scrollSpeed * 0.02) * (delta * 0.06);
      this.x += Math.sin(this.angle) * 0.3;
      this.angle += 0.01;

      const dx = mouse.x - this.x;
      const dy = mouse.y - this.y;
      const dist = Math.sqrt(dx * dx + dy * dy);
      if (dist < 120) {
        const force = (1 - dist / 120);
        this.x -= dx * 0.002 * force;
        this.y -= dy * 0.002 * force;
        this.size = Math.min(6, this.size + 0.08 * force);
        this.alpha = Math.min(0.25, this.alpha + 0.02 * force);
      } else {
        this.size = Math.max(0.6, this.size - 0.02);
        this.alpha = Math.max(0.03, this.alpha - 0.005);
      }

      if (this.y < -20) this.reset();
      if (this.x < -50 || this.x > canvas.width + 50)
        this.x = (this.x + canvas.width) % canvas.width;
    }
    draw() {
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(255,255,255,${this.alpha})`;
      ctx.fill();
    }
  }

  for (let i = 0; i < particleCount; i++) particles.push(new Particle(true));

  let lastTime = performance.now();
  function animateFrame(now) {
    const delta = now - lastTime;
    lastTime = now;

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    const g = ctx.createLinearGradient(0, 0, 0, canvas.height);
    g.addColorStop(0, 'rgba(10,12,18,0.02)');
    g.addColorStop(1, 'rgba(8,9,12,0.08)');
    ctx.fillStyle = g;
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    particles.forEach(p => { p.update(delta); p.draw(); });

    requestAnimationFrame(animateFrame);
  }
  requestAnimationFrame(animateFrame);

  window.addEventListener('mousemove', e => {
    const rect = canvas.getBoundingClientRect();
    mouse.x = e.clientX - rect.left;
    mouse.y = e.clientY - rect.top;
  });

  window.addEventListener('mouseleave', () => {
    mouse.x = -9999;
    mouse.y = -9999;
  });

  let lastScrollY = window.scrollY;
  window.addEventListener('scroll', () => {
    const dy = window.scrollY - lastScrollY;
    scrollSpeed = Math.max(-2, Math.min(8, dy));
    lastScrollY = window.scrollY;
    setTimeout(() => scrollSpeed *= 0.5, 150);
  });

  // ---------------- Scroll Fade-In ----------------
  const faders = document.querySelectorAll('.scroll-fade');
  const appearOnScroll = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    });
  }, { threshold: 0.25 });

  faders.forEach(fader => appearOnScroll.observe(fader));

  // ---------------- Product Hover Image Cycle ----------------
  document.querySelectorAll('.product-card').forEach(card => {
    const img = card.querySelector('.cycle-img');
    const images = card.dataset.images.split(',').map(src => src.trim());
    let i = 0;
    let interval;

    card.addEventListener('mouseenter', () => {
      interval = setInterval(() => {
        i = (i + 1) % images.length;
        img.src = images[i];
      }, 800);
    });

    card.addEventListener('mouseleave', () => {
      clearInterval(interval);
      img.src = images[0];
    });
  });

  // ---------------- Fade-in Collection Section ----------------
  const collectionSection = document.querySelector('.collection-section');
  if (collectionSection) {
    const collectionObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          collectionSection.classList.add('visible');
          collectionObserver.unobserve(collectionSection);
        }
      });
    }, { threshold: 0.25 });
    collectionObserver.observe(collectionSection);
  }
  
const fadeElements = document.querySelectorAll('.scroll-fade, .about-section, .collection-section');

window.addEventListener('scroll', () => {
  fadeElements.forEach(el => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight - 150) {
      el.classList.add('visible');
    }
  });
});
});
