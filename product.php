<?php include 'includes/header.php'; ?>




<main>
  <div class="container mx-auto px-4 py-10">
    <div class="text-sm text-slate-500 mb-8 flex items-center gap-2">
      <span class="hover:text-indigo-400 cursor-pointer"><a href="index.php">خانه</a></span>
      <i data-lucide="chevron-left" class="w-3 h-3"></i>
      <span class="hover:text-indigo-400 cursor-pointer"><a href="shop.php">فروشگاه</a></span>
      <i data-lucide="chevron-left" class="w-3 h-3"></i>
      <span class="text-slate-300">iPhone 15 Pro Max</span>
    </div>

    <div class="grid md:grid-cols-2 gap-10">
      <div>
        <div class="glass-card rounded-3xl p-10 flex items-center justify-center h-80 mb-4 glow">
          <span class="text-9xl" id="product-emoji">📱</span>
        </div>
        <div class="grid grid-cols-4 gap-2">
          <div
            class="glass-card rounded-xl p-3 flex items-center justify-center cursor-pointer hover:border-indigo-500/50 transition-all text-3xl"
            onclick="setEmoji('📱')">
            📱
          </div>
          <div
            class="glass-card rounded-xl p-3 flex items-center justify-center cursor-pointer hover:border-indigo-500/50 transition-all text-3xl"
            onclick="setEmoji('🔲')">
            🔲
          </div>
          <div
            class="glass-card rounded-xl p-3 flex items-center justify-center cursor-pointer hover:border-indigo-500/50 transition-all text-3xl"
            onclick="setEmoji('📸')">
            📸
          </div>
          <div
            class="glass-card rounded-xl p-3 flex items-center justify-center cursor-pointer hover:border-indigo-500/50 transition-all text-3xl"
            onclick="setEmoji('🔋')">
            🔋
          </div>
        </div>
      </div>

      <div>
        <div class="flex items-start justify-between mb-3">
          <span class="badge badge-primary badge-sm">موجود در انبار</span>
          <button class="btn btn-ghost btn-sm btn-circle text-slate-400 hover:text-rose-400">
            <i data-lucide="heart" class="w-5 h-5"></i>
          </button>
        </div>
        <h1 class="text-3xl font-bold text-white mb-2">
          iPhone 15 Pro Max
        </h1>
        <div class="flex items-center gap-2 mb-4">
          <span class="stars">★★★★★</span>
          <span class="text-slate-400 text-sm">(۱۲۴ نظر)</span>
        </div>
        <div class="flex items-end gap-3 mb-6">
          <span class="text-3xl font-black text-indigo-400">۵۸,۰۰۰,۰۰۰ ت</span>
          <span class="text-slate-500 line-through text-lg">۶۵,۰۰۰,۰۰۰ ت</span>
          <span class="badge badge-error badge-sm">۱۱٪ تخفیف</span>
        </div>

        <div class="mb-5">
          <div class="text-sm text-slate-400 mb-2">رنگ</div>
          <div class="flex gap-2">
            <div class="w-8 h-8 rounded-full bg-slate-900 border-2 border-indigo-500 cursor-pointer"></div>
            <div
              class="w-8 h-8 rounded-full bg-white border-2 border-transparent cursor-pointer hover:border-indigo-500">
            </div>
            <div
              class="w-8 h-8 rounded-full bg-yellow-700 border-2 border-transparent cursor-pointer hover:border-indigo-500">
            </div>
            <div
              class="w-8 h-8 rounded-full bg-slate-500 border-2 border-transparent cursor-pointer hover:border-indigo-500">
            </div>
          </div>
        </div>
        <div class="mb-6">
          <div class="text-sm text-slate-400 mb-2">حافظه</div>
          <div class="flex gap-2">
            <button class="btn btn-outline btn-xs border-[#2A2A3E] text-slate-300 hover:border-indigo-500 rounded-lg">
              ۱۲۸G
            </button>
            <button class="btn btn-primary btn-xs rounded-lg">۲۵۶G</button>
            <button class="btn btn-outline btn-xs border-[#2A2A3E] text-slate-300 hover:border-indigo-500 rounded-lg">
              ۵۱۲G
            </button>
            <button class="btn btn-outline btn-xs border-[#2A2A3E] text-slate-300 hover:border-indigo-500 rounded-lg">
              ۱TB
            </button>
          </div>
        </div>

        <div class="flex items-center gap-4 mb-6">
          <div class="text-sm text-slate-400">تعداد</div>
          <div class="flex items-center gap-2">
            <div class="qty-btn" onclick="changeQty(-1)">
              <i data-lucide="minus" class="w-3 h-3"></i>
            </div>
            <span id="qty-display" class="w-8 text-center text-white font-bold">۱</span>
            <div class="qty-btn" onclick="changeQty(1)">
              <i data-lucide="plus" class="w-3 h-3"></i>
            </div>
          </div>
        </div>

        <div class="flex gap-3">
          <button class="btn btn-primary flex-1 rounded-xl gap-2" onclick="addToCart('iPhone 15 Pro Max')">
            <i data-lucide="shopping-cart" class="w-4 h-4"></i>
            افزودن به سبد
          </button>
          <a href="checkout.php"
            class="btn btn-outline border-[#2A2A3E] text-slate-300 hover:bg-indigo-600 hover:border-indigo-600 rounded-xl gap-2 flex-1 text-center">
            <i data-lucide="zap" class="w-4 h-4"></i>
            خرید سریع
          </a>
        </div>

        <div class="mt-6 glass-card rounded-2xl p-4 space-y-3">
          <div class="flex justify-between text-sm">
            <span class="text-slate-500">پردازنده</span><span class="text-slate-200">Apple A17 Pro</span>
          </div>
          <div class="flex justify-between text-sm">
            <span class="text-slate-500">نمایشگر</span><span class="text-slate-200">۶.۷ اینچ Super Retina XDR</span>
          </div>
          <div class="flex justify-between text-sm">
            <span class="text-slate-500">باتری</span><span class="text-slate-200">۴۴۲۲ mAh</span>
          </div>
          <div class="flex justify-between text-sm">
            <span class="text-slate-500">دوربین</span><span class="text-slate-200">۴۸ مگاپیکسل پرو</span>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-16">
      <h2 class="text-xl font-bold text-white mb-6">نظرات کاربران</h2>
      <div class="grid md:grid-cols-3 gap-4">
        <div class="glass-card rounded-2xl p-4">
          <div class="flex items-center gap-3 mb-3">
            <div
              class="w-10 h-10 rounded-full bg-indigo-600/30 flex items-center justify-center text-indigo-400 font-bold">
              ع
            </div>
            <div>
              <div class="text-sm font-semibold text-white">علی رضایی</div>
              <div class="stars text-xs">★★★★★</div>
            </div>
          </div>
          <p class="text-slate-400 text-sm leading-relaxed">
            عالی بود، دوربینش فوق‌العاده‌ست. به همه پیشنهاد می‌کنم.
          </p>
        </div>
        <div class="glass-card rounded-2xl p-4">
          <div class="flex items-center gap-3 mb-3">
            <div
              class="w-10 h-10 rounded-full bg-purple-600/30 flex items-center justify-center text-purple-400 font-bold">
              س
            </div>
            <div>
              <div class="text-sm font-semibold text-white">سارا محمدی</div>
              <div class="stars text-xs">★★★★☆</div>
            </div>
          </div>
          <p class="text-slate-400 text-sm leading-relaxed">
            باتری خوبه ولی قیمتش یکم گرونه. در کل راضیم.
          </p>
        </div>
        <div class="glass-card rounded-2xl p-4">
          <div class="flex items-center gap-3 mb-3">
            <div
              class="w-10 h-10 rounded-full bg-green-600/30 flex items-center justify-center text-green-400 font-bold">
              م
            </div>
            <div>
              <div class="text-sm font-semibold text-white">محمد کریمی</div>
              <div class="stars text-xs">★★★★★</div>
            </div>
          </div>
          <p class="text-slate-400 text-sm leading-relaxed">
            سرعت پردازنده‌اش حرف نداره. خیلی خوشم اومد.
          </p>
        </div>
      </div>
    </div>
  </div>
</main>



<script>
  function setEmoji(e) {
    document.getElementById("product-emoji").textContent = e;
  }
  let qty = 1;
  function changeQty(d) {
    qty = Math.max(1, qty + d);
    const digits = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];
    document.getElementById("qty-display").textContent = qty
      .toString()
      .replace(/\d/g, (d) => digits[d]);
  }
  function toggleMobileMenu() {
    document.getElementById("mobile-menu").classList.toggle("hidden");
  }
  function showToast(msg) {
    const t = document.getElementById("toast");
    document.getElementById("toast-msg").textContent = msg;
    t.classList.add("show");
    setTimeout(() => t.classList.remove("show"), 3000);
  }
  function addToCart(name) {
    showToast(name + " به سبد اضافه شد");
    const badge = document.getElementById("cart-badge");
    const cur = parseInt(badge.textContent) || 0;
    badge.textContent = cur + 1;
    anime({
      targets: badge,
      scale: [1.4, 1],
      duration: 300,
      easing: "easeOutBounce",
    });
  }
  document.addEventListener("DOMContentLoaded", () => {
    lucide.createIcons();
  });
</script>
</body>

<?php include 'includes/footer.php'; ?>

