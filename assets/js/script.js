gsap.utils.toArray(".nav-link").forEach(link => {
  link.addEventListener("mouseenter", () => {
    gsap.to(link, { duration: 0.3, color: "#F97316", ease: "power2.out" });
  });
  link.addEventListener("mouseleave", () => {
    gsap.to(link, { duration: 0.3, color: "#FFFFFF", ease: "power2.in" });
  });
});

// Animasi hover pada Navbar Links
gsap.utils.toArray(".nav-text a").forEach(link => {
  link.addEventListener("mouseenter", () => {
    gsap.to(link, { duration: 0.3, backgroundColor: "#3E4E97", color: "#FFFFFF", ease: "power2.out" });
  });
  link.addEventListener("mouseleave", () => {
    gsap.to(link, { duration: 0.3, backgroundColor: "transparent", color: "#FFFFFF", ease: "power2.in" });
  });
});

// Animasi came pada Navbar Links
gsap.from(".navbar .nav-text", {
  duration: 0.5,
  y: -50,
  opacity: 0,
  stagger: 0.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".features-section",
    start: "top 80%"
  }
});

// Animasi came pada Login Link
gsap.from(".navbar .login-text", {
  duration: 0.5,
  y: -50,
  opacity: 0,
  stagger: 0.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".features-section",
    start: "top 80%"
  }
});

// Animasi pada Features Section
gsap.from(".features-section .flow-root", {
  duration: 0.5,
  y: 50,
  opacity: 0,
  stagger: 0.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".features-section",
    start: "top 80%"
  }
});

// Animasi pada Additional Sections
gsap.from(".additional-sections .flow-root", {
  duration: 0.5,
  y: 50,
  opacity: 0,
  stagger: 0.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".additional-sections",
    start: "top 80%"
  }
});

// Slide Show Hero
document.addEventListener("DOMContentLoaded", function () {
let currentIndex = 0;
const images = document.querySelectorAll('.slideshow-image');
const totalImages = images.length;

function showNextImage() {
  images[currentIndex].classList.remove('active');
  currentIndex = (currentIndex + 1) % totalImages;
  images[currentIndex].classList.add('active');
}

setInterval(showNextImage, 3000); // Change image every 3 seconds
});
