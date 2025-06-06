import './bootstrap';

document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(ScrollTrigger,TextPlugin);
  // Set FPS atau lag smoothing untuk GSAP
  gsap.ticker.lagSmoothing(1000, 33); // Membatasi ke 30 FPS
 });

// Smooth-scroll
// Smooth-scroll
// Smooth-scroll


// Smooth-scroll
// Smooth-scroll
// Smooth-scroll

// //header animation
// //header animation
// //header animation

// Timeline untuk mengatur semua animasi
const tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".grnd-overlay-slide", // Trigger animasi dimulai dari hero
    start: "top top", // Mulai saat hero di bagian atas viewport
    scrub: 2, // Animasi sinkron dengan scroll
    pin: true,
    end: () => `${window.innerHeight * 6}px`,
    anticipatePin: false, // Meminimalkan glitch pada pinning
  },
});

// Animasi untuk content
tl.to(".overlay-slide", {
  y: "-100%", // Geser content ke atas sebanyak tinggi hero
  duration: 1,
  invalidateOnRefresh: true,
});

//landing-page slide animation
//landing-page slide animation
//landing-page slide animation

//hero animation
gsap.to (".hero__video",{
  opacity: 1,
  delay: 4,
  duration: 3
  // invalidateOnRefresh: true
})

gsap.to (".hero__caption",{
  opacity: 1,
  delay: 4,
  duration: 2,
  y: -180
  // invalidateOnRefresh: true
})
//hero animation

gsap.fromTo(".about-us-headline h2",
  { opacity: 0 },
  {
    opacity: 1,
    duration: 1,
    ease: "power2.out",
    scrollTrigger: {
      trigger: ".about-us-headline h2",
      start: "top 100%",  // mulai animasi saat h2 hampir masuk layar
      end: "top 60%",    // selesai animasi sebelum h2 benar-benar penuh di layar
      toggleActions: "play reverse play reverse", // muncul saat scroll ke bawah, hilang saat scroll ke atas
    },
  }
);

gsap.utils.toArray(".about-us-items").forEach((item, i) => {
    gsap.fromTo(item,
        {
            y: 40,
            opacity: 0,
        },
        {
            y: 0,
            opacity: 1,
            duration: 0.6,
            delay: i * 0.2,
            ease: "power3.out",
            scrollTrigger: {
                trigger: ".about-us__right",
                start: "top 90%",
                end: "bottom 20%",
                toggleActions: "play reverse play reverse", // animasi akan reverse ketika scroll ke atas
            },
        }
    );
});


//landing-page-team
//landing-page-team
//landing-page-team

//our-team slider

// document.addEventListener("DOMContentLoaded", () => {
//   const slider = document.querySelector(".team__slider");
//   const slides = Array.from(slider.children);
//   const slideWidth = slides[0].offsetWidth + 48; // Lebar slider + jarak antar elemen
//   const totalSlides = slides.length;

//   // Gandakan elemen untuk menciptakan ilusi infinite scrolling
//   slides.forEach((slide) => {
//       const clone = slide.cloneNode(true);
//       slider.appendChild(clone); // Tambahkan salinan elemen ke akhir slider
//   });

//   // Membuat animasi infinite dengan gsap
//   const animation = gsap.to(slider, {
//       x: `-=${slideWidth * totalSlides}`, // Geser sejauh total lebar slider asli
//       duration: totalSlides * 5, // Durasi animasi
//       ease: "none", // Gerakan linear
//       repeat: -1, // Infinite loop
//       modifiers: {
//           x: (xValue) => {
//               const parsedX = parseFloat(xValue);
//               const maxOffset = slideWidth * totalSlides;
//               return `${parsedX % maxOffset}px`; // Modulo untuk menciptakan loop
//           },
//       },
//       paused: true // Mulai animasi dalam keadaan terjeda
//   });
  

//   // Membuat slider dapat draggable
//   Draggable.create(slider, {
//       type: "x",  // Hanya gerakan horizontal
//       edgeResistance: 0.65, // Resistensi saat menyeret
//       inertia: true, // Menambahkan efek inertial (lambat berhenti)
//       onDrag: () => {
//           animation.pause(); // Hentikan animasi saat drag dimulai
//       },
//       onRelease: () => {
//           gsap.to(slider, {
//               x: `-=${slideWidth * totalSlides}`, // Geser sejauh total lebar slider asli
//               duration: totalSlides * 5, // Durasi animasi
//               ease: "none", // Gerakan linear
//               repeat: -1, // Infinite loop
//               modifiers: {
//                   x: (xValue) => {
//                       const parsedX = parseFloat(xValue);
//                       const maxOffset = slideWidth * totalSlides;
//                       return `${parsedX % maxOffset}px`; // Modulo untuk menciptakan loop
//                   },
//               },
//           });
//       },
//   });

//   // Memulai animasi secara otomatis setelah drag selesai
//   animation.play();
// });


//our-team slider


//service-animation
//service-animation
//service-animation

document.addEventListener("DOMContentLoaded", () => {
  const serviceLinks = document.querySelectorAll(".services-item a");
  const images = document.querySelectorAll(".services-img-wrapper img");

  // Gambar default
  const defaultImage = document.querySelector(`.services-img-wrapper img[data-index="1"]`);

  serviceLinks.forEach(link => {
      link.addEventListener("mouseenter", () => {
          const index = link.getAttribute("data-index");

          // Hapus kelas aktif dari semua gambar
          images.forEach(img => img.classList.remove("active"));

          // Tambahkan kelas aktif ke gambar yang sesuai
          const relatedImage = document.querySelector(`.services-img-wrapper img[data-index="${index}"]`);
          if (relatedImage) relatedImage.classList.add("active");
      });
  });

  // Kembalikan ke gambar default saat mouse keluar dari daftar layanan
  const servicesWrapper = document.querySelector(".services__right");
  servicesWrapper.addEventListener("mouseleave", () => {
      images.forEach(img => img.classList.remove("active"));
      if (defaultImage) defaultImage.classList.add("active");
  });
});

//service-animation
//service-animation
//service-animation
  
// ARTIKEL CAROUSEL
// ARTIKEL CAROUSEL
// ARTIKEL CAROUSEL

const carousel = document.querySelector(".carousel");
const items = document.querySelectorAll(".carousel-item");
const desktopArrows = document.querySelectorAll(".arrow-artikel");
const mobileArrows = document.querySelectorAll(".arrow-artikel");

let currentIndex = 0;
let totalItems = items.length;

// Detect viewport for items per view
const itemsPerView = () => (window.innerWidth >= 768 ? 3 : 1);

// Update Arrow State (Enable/Disable)
const updateArrowState = () => {
  const maxIndex = totalItems - itemsPerView();
  
  desktopArrows.forEach((arrow) => {
    if (arrow.classList.contains("left")) {
      arrow.disabled = currentIndex === 0;
      arrow.style.color = currentIndex === 0 ? "gray" : "white";
      arrow.style.cursor = currentIndex === 0 ? "not-allowed" : "pointer";
    }
    if (arrow.classList.contains("right")) {
      arrow.disabled = currentIndex === maxIndex;
      arrow.style.color = currentIndex === maxIndex ? "gray" : "white";
      arrow.style.cursor = currentIndex === maxIndex ? "not-allowed" : "pointer";
    }
  });

  mobileArrows.forEach((arrow) => {
    if (arrow.classList.contains("left")) {
      arrow.disabled = currentIndex === 0;
      arrow.style.color = currentIndex === 0 ? "gray" : "white";
      arrow.style.cursor = currentIndex === 0 ? "not-allowed" : "pointer";
    }
    if (arrow.classList.contains("right")) {
      arrow.disabled = currentIndex === maxIndex;
      arrow.style.color = currentIndex === maxIndex ? "gray" : "white";
      arrow.style.cursor = currentIndex === maxIndex ? "not-allowed" : "pointer";
    }
  });
};

// Update Carousel Position
const updateCarouselPosition = () => {
  const itemWidth = items[0].offsetWidth;
  const newPosition = -currentIndex * itemWidth;
  carousel.style.transform = `translateX(${newPosition}px)`;
  updateArrowState(); // Update arrow state after position update
};

// Move to next/previous item
const moveCarousel = (direction) => {
  const maxIndex = totalItems - itemsPerView();
  currentIndex = Math.max(0, Math.min(currentIndex + direction, maxIndex));
  updateCarouselPosition();
};

// Event Listeners
desktopArrows.forEach((arrow) =>
  arrow.addEventListener("click", () =>
    moveCarousel(arrow.classList.contains("left") ? -1 : 1)
  )
);

mobileArrows.forEach((arrow) =>
  arrow.addEventListener("click", () =>
    moveCarousel(arrow.classList.contains("left") ? -1 : 1)
  )
);

// Update on resize
window.addEventListener("resize", updateCarouselPosition);

// Initialize
document.addEventListener("DOMContentLoaded", () => {
  updateCarouselPosition();
  updateArrowState(); // Set initial arrow state
});


// ARTIKEL CAROUSEL
// ARTIKEL CAROUSEL
// ARTIKEL CAROUSEL


//landing-page slide animation
//landing-page slide animation
//landing-page slide animation


ScrollTrigger.normalizeScroll(true);
window.addEventListener("load", () => {
  ScrollTrigger.refresh();
});

//for scroll to target
document.querySelectorAll('.scroll-link').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault(); // Mencegah perubahan hash di URL
    const targetId = this.getAttribute('href').substring(1); // Ambil ID elemen target
    const targetElement = document.getElementById(targetId);
    
    // Scroll ke elemen target
    targetElement.scrollIntoView({
      behavior: 'smooth' // Scroll dengan animasi
    });
  });
});




