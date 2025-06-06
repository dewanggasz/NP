/// Ambil elemen header
const navBig = document.querySelector(".navbigIndex");
const megaMenu= document.querySelector(".dropdown-menuIndex");
const navMobile = document.querySelector(".navmobile");
const logoBig1 = document.getElementById("logoBigIndex");
const logoMobile1 = document.getElementById("logoMobileIndex");

// Variabel untuk menyimpan posisi scroll sebelumnya
let lastScrollY = window.scrollY;

// Fungsi untuk memperbarui animasi header
function updateHeader() {
  const currentScroll = window.scrollY;

  // Desktop logo change
  if (currentScroll > 50) {
    navBig.classList.remove("transparent");
    megaMenu.classList.remove("transparent");
    navBig.classList.add("scrolled");
    logoBig1.src = "/resources/img/LOGO NPS GREEN.png";
  } else {
    navBig.classList.remove("scrolled");
    navBig.classList.add("transparent");
    megaMenu.classList.add("transparent");
    logoBig1.src = "/resources/img/LOGO NPS WHITE.png";
  }

  // Mobile logo change
  if (currentScroll > 50) {
    navMobile.classList.remove("transparent");
    navMobile.classList.add("scrolled");
    logoMobile1.src = "/resources/img/LOGO NPS GREEN.png";
  } else {
    navMobile.classList.remove("scrolled");
    navMobile.classList.add("transparent");
    logoMobile1.src = "/resources/img/LOGO NPS WHITE.png";
  }

  lastScrollY = currentScroll;
}

// Jalankan logika saat DOM selesai dimuat
document.addEventListener("DOMContentLoaded", () => {
  if (window.scrollY <= 50) {
    navBig.classList.add("transparent");
    navMobile.classList.add("transparent");
  }
  updateHeader(); // Periksa kondisi awal
});

// Tambahkan event listener untuk scroll
window.addEventListener("scroll", updateHeader);



//mobile nav
const hamburger = document.getElementById("hamburger");
const mobileMenu = document.getElementById("mobileMenu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("open");
    mobileMenu.classList.toggle("open");
    
    // Toggle teks tombol hamburger
    const hamburgerText = hamburger.querySelector("a");
    if (mobileMenu.classList.contains("open")) {
        hamburgerText.textContent = "Close"; // Ubah menjadi "Close" saat menu terbuka
    } else {
        hamburgerText.textContent = "Menu"; // Kembali ke "Menu" saat menu tertutup
    }
});

const navmobile = document.querySelector(".navmobile");

function updateNavMobile() {
    const currentScroll = window.scrollY;
    if (currentScroll > 0) {
        navmobile.classList.add("scrolled");
    } else {
        navmobile.classList.remove("scrolled");
    }
}

document.addEventListener("DOMContentLoaded", () => {
    updateNavMobile();
});

window.addEventListener("scroll", updateNavMobile);

//header animation
//header animation
//header animation