function toggleMobileMenu() {
  const m = document.getElementById("mobile-menu");
  m.classList.toggle("hidden");
}

function showToast(msg) {
  const container = document.getElementById("toast-container");

  // 1. Create a brand new element for this specific message
  const toast = document.createElement("div");

  // Add your styling classes here (using Tailwind based on your previous code)
  // We start with opacity-0 to animate it in
  toast.className =
    "flex items-center gap-8 bg-gray-800 text-white px-4 py-3 rounded-xl shadow-lg transition-opacity duration-300 opacity-0";

  // 2. Insert the HTML
  toast.innerHTML = `
    <i data-lucide="check-circle" class="w-4 h-4 text-green-400"></i>
    <span>${msg}</span>
  `;

  // 3. Add the new toast to the container
  container.appendChild(toast);

  // 4. IMPORTANT: Since we added new HTML dynamically, we must tell Lucide to render the icon!
  if (typeof lucide !== "undefined") {
    lucide.createIcons({ root: toast });
  }

  // 5. Animate it IN (slight delay is needed for CSS transitions to work on newly created elements)
  setTimeout(() => {
    toast.classList.remove("opacity-0");
    toast.classList.add("opacity-100");

  }, 10);

  // 6. Animate it OUT and remove it from the page after 3 seconds
  setTimeout(() => {
    toast.classList.remove("opacity-100");
    toast.classList.add("opacity-0");

    // Wait for the fade-out animation to finish (300ms), then delete the HTML element entirely
    setTimeout(() => {
      toast.remove();
    }, 500);
  }, 3000);
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
