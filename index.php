<?php include 'includes/header.php'; ?>
<main>
  <section class="hero-bg min-h-[90vh] flex items-center relative overflow-hidden">
    <div class="absolute top-20 left-20 w-64 h-64 rounded-full bg-indigo-600/10 blur-3xl" id="orb1"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 rounded-full bg-purple-600/8 blur-3xl" id="orb2"></div>

    <div class="container mx-auto px-4 py-20">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div id="hero-text">
          <div
            class="inline-flex items-center gap-2 bg-indigo-600/10 border border-indigo-500/20 rounded-full px-4 py-1.5 text-xs text-indigo-400 mb-6">
            <i data-lucide="zap" class="w-3 h-3"></i>
            جدیدترین فناوری روز دنیا
          </div>
          <h1 class="text-5xl md:text-6xl font-black leading-tight mb-6">
            آینده‌ی<br />
            <span class="gradient-text">هوشمند</span><br />
            در دستان شماست
          </h1>
          <p class="text-slate-400 text-lg leading-relaxed mb-8">
            بهترین گوشی‌ها، ساعت‌های هوشمند و دستگاه‌های خانه هوشمند را با
            قیمت استثنایی تجربه کنید.
          </p>
          <div class="flex gap-3 flex-wrap">
            <a href="shop.php" class="btn btn-primary rounded-xl gap-2 px-6">
              <i data-lucide="shopping-bag" class="w-4 h-4"></i>
              خرید کنید
            </a>
            <a href="category.php"
              class="btn btn-outline border-[#2A2A3E] text-slate-300 hover:text-white hover:bg-[#1A1A26] hover:border-indigo-500 rounded-xl gap-2 px-6">
              <i data-lucide="grid-3x3" class="w-4 h-4"></i>
              دسته‌بندی‌ها
            </a>
          </div>
          <!-- Stats -->
          <div class="flex gap-8 mt-12">
            <div>
              <div class="text-2xl font-bold text-white">+۵۰۰</div>
              <div class="text-xs text-slate-500">محصول</div>
            </div>
            <div class="border-r border-[#2A2A3E] pr-8">
              <div class="text-2xl font-bold text-white">+۱۲K</div>
              <div class="text-xs text-slate-500">مشتری</div>
            </div>
            <div class="border-r border-[#2A2A3E] pr-8">
              <div class="text-2xl font-bold text-white">۴.۹</div>
              <div class="text-xs text-slate-500">امتیاز</div>
            </div>
          </div>
        </div>

        <!-- Hero Product Visual -->
        <div class="flex justify-center" id="hero-visual">
          <div class="relative w-72 h-72">
            <div class="absolute inset-0 rounded-full bg-indigo-600/20 blur-2xl"></div>
            <div class="relative glass-card rounded-3xl p-8 glow flex flex-col items-center justify-center h-full">
              <div class="text-8xl mb-4">📱</div>
              <div class="text-white font-bold text-lg">iPhone 15 Pro</div>
              <div class="text-indigo-400 font-bold text-xl mt-1">
                ۴۵,۰۰۰,۰۰۰ ت
              </div>
              <button class="btn btn-primary btn-sm rounded-xl mt-4 gap-2" onclick="addToCart('iPhone 15 Pro')">
                <i data-lucide="plus" class="w-3 h-3"></i>افزودن
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-12 border-y border-[#2A2A3E]">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-3 gap-4">
        <a href="category.php"
          class="glass-card rounded-2xl p-6 text-center cursor-pointer hover:border-indigo-500/40 transition-all">
          <div class="text-4xl mb-3">📱</div>
          <div class="font-semibold text-white">گوشی هوشمند</div>
          <div class="text-xs text-slate-500 mt-1">۱۲۰+ مدل</div>
        </a>
        <a href="category.php"
          class="glass-card rounded-2xl p-6 text-center cursor-pointer hover:border-indigo-500/40 transition-all">
          <div class="text-4xl mb-3">⌚</div>
          <div class="font-semibold text-white">ساعت هوشمند</div>
          <div class="text-xs text-slate-500 mt-1">۸۰+ مدل</div>
        </a>
        <a href="category.php"
          class="glass-card rounded-2xl p-6 text-center cursor-pointer hover:border-indigo-500/40 transition-all">
          <div class="text-4xl mb-3">🏠</div>
          <div class="font-semibold text-white">خانه هوشمند</div>
          <div class="text-xs text-slate-500 mt-1">۲۰۰+ مدل</div>
        </a>
      </div>
    </div>
  </section>

  <section class="py-16">
    <div class="container mx-auto px-4">
      <div class="flex items-center justify-between mb-10">
        <div>
          <h2 class="text-2xl font-bold text-white">محصولات ویژه</h2>
          <p class="text-slate-500 text-sm mt-1">
            پرفروش‌ترین‌های این هفته
          </p>
        </div>
        <a href="shop.php"
          class="btn btn-outline btn-sm border-[#2A2A3E] text-slate-400 hover:border-indigo-500 hover:text-indigo-400 rounded-xl gap-2">
          همه محصولات
          <i data-lucide="arrow-left" class="w-4 h-4"></i>
        </a>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4" id="featured-products">



        <a href="product.php" class="product-card glass-card rounded-2xl overflow-hidden">
          <div class="relative">
            <?php if (!empty($p['badge'])): ?>
              <span class="absolute top-2 right-2 badge badge-primary badge-xs z-10">
                <?= $p['badge'] ?>
              </span>
            <?php endif; ?>

            <?php if (!empty($p['discount'])): ?>
              <span class="absolute top-2 left-2 badge badge-error badge-xs z-10">-
                <?= $p['discount'] ?>
              </span>
            <?php endif; ?>

            <div class="h-36 bg-[#12121A] flex items-center justify-center text-5xl">
              <?= $p['emoji'] ?>
            </div>
          </div>
          <div class="p-4">
            <div class="text-xs text-slate-500 mb-1">
              <?= $p['brand'] ?>
            </div>
            <div class="font-semibold text-white text-sm mb-1 line-clamp-1">
              <?= $p['name'] ?>
            </div>
            <div class="text-xs text-yellow-400 mb-2">
              <?= $p['rating'] ?>
            </div>
            <div class="flex items-center justify-between">
              <div>
                <div class="text-indigo-400 font-bold text-sm">
                  <?= $p['price'] ?> ت
                </div>
                <?php if (!empty($p['oldPrice'])): ?>
                  <div class="text-slate-600 line-through text-xs">
                    <?= $p['oldPrice'] ?> ت
                  </div>
                <?php endif; ?>
              </div>
              <button class="btn btn-primary btn-xs rounded-lg"
                onclick="event.stopPropagation();addToCart('<?= $p['name'] ?>')">
                <i data-lucide="plus" class="w-3 h-3"></i>
              </button>
            </div>
          </div>
        </a>



      </div>
    </div>
  </section>

  <section class="py-8">
    <div class="container mx-auto px-4">
      <div class="glass-card rounded-3xl p-10 glow relative overflow-hidden">
        <div class="absolute left-0 top-0 bottom-0 w-1/2 bg-gradient-to-r from-indigo-600/20 to-transparent"></div>
        <div class="relative z-10 max-w-lg">
          <span class="badge badge-primary badge-outline mb-4">تخفیف ویژه</span>
          <h2 class="text-3xl font-bold text-white mb-3">
            تا ۴۰٪ تخفیف<br />در فروش پاییزه
          </h2>
          <p class="text-slate-400 mb-6">
            فرصت محدود برای خرید بهترین گجت‌های روز دنیا
          </p>
          <a href="shop.php" class="btn btn-primary rounded-xl gap-2">
            <i data-lucide="tag" class="w-4 h-4"></i>
            مشاهده تخفیف‌ها
          </a>
        </div>
        <div class="absolute left-10 top-1/2 -translate-y-1/2 text-8xl hidden md:block">
          🎉
        </div>
      </div>
    </div>
  </section>

  <section class="py-16">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="glass-card rounded-2xl p-5 text-center">
          <div class="w-12 h-12 rounded-xl bg-indigo-600/20 flex items-center justify-center mx-auto mb-3">
            <i data-lucide="truck" class="w-6 h-6 text-indigo-400"></i>
          </div>
          <div class="font-semibold text-white text-sm">ارسال رایگان</div>
          <div class="text-xs text-slate-500 mt-1">
            برای سفارش بالای ۵۰۰K
          </div>
        </div>
        <div class="glass-card rounded-2xl p-5 text-center">
          <div class="w-12 h-12 rounded-xl bg-green-600/20 flex items-center justify-center mx-auto mb-3">
            <i data-lucide="shield-check" class="w-6 h-6 text-green-400"></i>
          </div>
          <div class="font-semibold text-white text-sm">ضمانت اصالت</div>
          <div class="text-xs text-slate-500 mt-1">۱۰۰٪ اصل و اورجینال</div>
        </div>
        <div class="glass-card rounded-2xl p-5 text-center">
          <div class="w-12 h-12 rounded-xl bg-purple-600/20 flex items-center justify-center mx-auto mb-3">
            <i data-lucide="rotate-ccw" class="w-6 h-6 text-purple-400"></i>
          </div>
          <div class="font-semibold text-white text-sm">۷ روز مرجوعی</div>
          <div class="text-xs text-slate-500 mt-1">بدون دردسر</div>
        </div>
        <div class="glass-card rounded-2xl p-5 text-center">
          <div class="w-12 h-12 rounded-xl bg-rose-600/20 flex items-center justify-center mx-auto mb-3">
            <i data-lucide="headphones" class="w-6 h-6 text-rose-400"></i>
          </div>
          <div class="font-semibold text-white text-sm">پشتیبانی ۲۴/۷</div>
          <div class="text-xs text-slate-500 mt-1">همیشه در دسترس</div>
        </div>
      </div>
    </div>
  </section>
</main>


<script>
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
    initAnimations();
  });

</script>
<?php include 'includes/footer.php'; ?>

