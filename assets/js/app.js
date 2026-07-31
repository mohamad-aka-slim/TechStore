function toggleMobileMenu() {
  const m = document.getElementById("mobile-menu");
  m.classList.toggle("hidden");
}

function showToast(msg) {
  const t = document.getElementById("toast");
  document.getElementById("toast-msg").textContent = msg;
  t.classList.add("show");
  setTimeout(() => t.classList.remove("show"), 3000);
}

function initAnimations() {
  // Floating orbs
  anime({
    targets: "#orb1",
    translateX: [-20, 20],
    translateY: [-15, 15],
    duration: 4000,
    direction: "alternate",
    loop: true,
    easing: "easeInOutSine",
  });
  anime({
    targets: "#orb2",
    translateX: [20, -20],
    translateY: [10, -20],
    duration: 5000,
    direction: "alternate",
    loop: true,
    easing: "easeInOutSine",
  });

  anime({
    targets: "#hero-text > * > *",
    opacity: [0, 1],
    translateY: [3000, 0],
    delay: anime.stagger(120),
    duration: 700,
    easing: "easeOutQuart",
  });
  anime({
    targets: "#hero-text > *",
    opacity: [0, 1],
    translateY: [300, 0],
    delay: anime.stagger(150),
    duration: 700,
    easing: "easeOutQuart",
  });

  anime({
    targets: "#hero-visual",
    opacity: [0, 1],
    scale: [0.85, 1],
    duration: 800,
    delay: 300,
    easing: "easeOutQuart",
  });

  anime({
    targets: "#hero-visual .glass-card",
    translateY: [-8, 8],
    duration: 3000,
    direction: "alternate",
    loop: true,
    easing: "easeInOutSine",
  });
}

document.addEventListener("DOMContentLoaded", () => {
  lucide.createIcons();
});
