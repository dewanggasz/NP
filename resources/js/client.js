//CLIENT SLIDER ANIMATION
//CLIENT SLIDER ANIMATION
//CLIENT SLIDER ANIMATION

// Ambil elemen container dan slide
const container = document.querySelector('.client__container');
const slides = Array.from(document.querySelectorAll('.client__slide'));

// Gandakan elemen secara terus-menerus (infinite cloning)
function infiniteClone() {
    const totalSlides = slides.length;

    // Duplikasi setiap slide dan tambahkan ke dalam container secara berulang
    slides.forEach((slide) => {
        const clone = slide.cloneNode(true);
        container.appendChild(clone); // Tambahkan clone ke container
    });

    // Ketika animasi telah bergerak, lakukan cloning lagi
    setTimeout(() => {
        infiniteClone(); // Lanjutkan cloning setelah animasi bergerak
    }, 20000); // Sesuaikan dengan durasi animasi
}

// Fungsi untuk memulai animasi
function startSliderAnimation() {
    // Hitung lebar total elemen dalam container
    const totalWidth = container.scrollWidth;

    // GSAP untuk animasi
    gsap.to(container, {
        x: -totalWidth / 2, // Gerakkan setengah panjang container
        duration: 20, // Durasi animasi
        ease: "none", // Animasi linear
        repeat: -1, // Ulangi animasi tanpa batas
    });

    // Mulai cloning setelah animasi dimulai
    infiniteClone();
}

// Panggil fungsi untuk memulai animasi
startSliderAnimation();

//CLIENT SLIDER ANIMATION
//CLIENT SLIDER ANIMATION
//CLIENT SLIDER ANIMATION