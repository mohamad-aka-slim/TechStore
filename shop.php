<?php include 'includes/header.php'; ?>

<main>
  <div class="container mx-auto px-4 py-10">
    <div class="flex flex-col md:flex-row gap-6">
      <aside class="w-full md:w-64 shrink-0">
        <div class="glass-card rounded-2xl p-5 sticky top-20">
          <h3 class="font-bold text-white mb-4 flex items-center gap-2">
            <i data-lucide="sliders-horizontal" class="w-4 h-4 text-indigo-400"></i>
            فیلترها
          </h3>
          <div class="mb-5">
            <div class="text-xs text-slate-500 mb-2 font-semibold uppercase tracking-wider">
              دسته‌بندی
            </div>
            <div class="space-y-2">
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300 hover:text-indigo-400">
                <input type="checkbox" class="checkbox checkbox-xs checkbox-primary" checked />
                همه
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300 hover:text-indigo-400">
                <input type="checkbox" class="checkbox checkbox-xs checkbox-primary" />
                گوشی هوشمند
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300 hover:text-indigo-400">
                <input type="checkbox" class="checkbox checkbox-xs checkbox-primary" />
                ساعت هوشمند
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300 hover:text-indigo-400">
                <input type="checkbox" class="checkbox checkbox-xs checkbox-primary" />
                خانه هوشمند
              </label>
            </div>
          </div>
          <div class="mb-5">
            <div class="text-xs text-slate-500 mb-2 font-semibold uppercase tracking-wider">
              برند
            </div>
            <div class="space-y-2">
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300 hover:text-indigo-400">
                <input type="checkbox" class="checkbox checkbox-xs checkbox-primary" checked />
                همه
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300 hover:text-indigo-400">
                <input type="checkbox" class="checkbox checkbox-xs checkbox-primary" />
                Apple
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300 hover:text-indigo-400">
                <input type="checkbox" class="checkbox checkbox-xs checkbox-primary" />
                Samsung
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300 hover:text-indigo-400">
                <input type="checkbox" class="checkbox checkbox-xs checkbox-primary" />
                Xiaomi
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300 hover:text-indigo-400">
                <input type="checkbox" class="checkbox checkbox-xs checkbox-primary" />
                Google
              </label>
            </div>
          </div>
          <div class="mb-5">
            <div class="text-xs text-slate-500 mb-3 font-semibold uppercase tracking-wider">
              محدوده قیمت
            </div>
            <input type="range" min="0" max="100" value="70" class="range range-primary range-xs w-full" />
            <div class="flex justify-between text-xs text-slate-500 mt-1">
              <span>۰</span><span>۱۰۰M ت</span>
            </div>
          </div>
          <div>
            <div class="text-xs text-slate-500 mb-2 font-semibold uppercase tracking-wider">
              امتیاز
            </div>
            <div class="space-y-1">
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="radio" name="rating" class="radio radio-xs radio-primary" checked />
                <span class="stars text-xs">★★★★★</span> و بالاتر
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="radio" name="rating" class="radio radio-xs radio-primary" />
                <span class="stars text-xs">★★★★</span> و بالاتر
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="radio" name="rating" class="radio radio-xs radio-primary" />
                <span class="stars text-xs">★★★</span> و بالاتر
              </label>
            </div>
          </div>
          <button class="btn btn-primary w-full mt-5 rounded-xl btn-sm">
            اعمال فیلتر
          </button>
        </div>
      </aside>

      <div class="flex-1">
        <div class="flex items-center justify-between mb-6">
          <div class="text-slate-400 text-sm">
            <span class="text-white font-semibold">۲۴</span> محصول یافت شد
          </div>
          <div class="flex items-center gap-2">
            <select class="select select-sm bg-[#1A1A26] border-[#2A2A3E] text-slate-300 rounded-xl text-sm">
              <option>مرتب‌سازی: پیش‌فرض</option>
              <option>ارزان‌ترین</option>
              <option>گران‌ترین</option>
              <option>پرفروش‌ترین</option>
              <option>جدیدترین</option>
            </select>
            <button class="btn btn-ghost btn-sm btn-square text-slate-400 hover:text-indigo-400">
              <i data-lucide="grid-2x2" class="w-4 h-4"></i>
            </button>
            <button class="btn btn-ghost btn-sm btn-square text-slate-400 hover:text-indigo-400">
              <i data-lucide="list" class="w-4 h-4"></i>
            </button>
          </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4" id="shop-products">

          <a href="product.php" class="product-card glass-card rounded-2xl overflow-hidden">
            <div class="relative">
              <span class="absolute top-2 right-2 badge badge-primary badge-xl z-10">پرفروش</span>
              <span class="absolute top-2 left-2 badge badge-error badge-xl z-10 text-white ">-۱۱٪</span>
              <div class="h-36 bg-[#12121A] flex items-center justify-center text-5xl">📱</div>
            </div>
            <div class="p-4">
              <div class="text-xs text-slate-500 mb-1">Google</div>
              <div class="font-semibold text-white text-sm mb-1 line-clamp-1">Google Pixel 8 Pro</div>
              <div class="text-xs text-yellow-400 mb-2">★★★★★</div>
              <div class="flex items-center justify-between">
                <div>
                  <div class="text-indigo-400 font-bold text-sm">۴۰,۰۰۰,۰۰۰ ت</div>
                  <div class="text-slate-600 line-through text-xs">۴۵,۰۰۰,۰۰۰ ت</div>
                </div>
                <button class="btn btn-primary btn-xs rounded-lg">
                  <i data-lucide="plus" class="w-3 h-3"></i>
                </button>
              </div>
            </div>
          </a>


        </div>
        <div class="flex justify-center mt-10">
          <div class="join">
            <button class="join-item btn btn-sm bg-[#1A1A26] border-[#2A2A3E] text-slate-400">
              «
            </button>
            <button class="join-item btn btn-sm bg-indigo-600 border-indigo-600 text-white">
              ۱
            </button>
            <button class="join-item btn btn-sm bg-[#1A1A26] border-[#2A2A3E] text-slate-400">
              ۲
            </button>
            <button class="join-item btn btn-sm bg-[#1A1A26] border-[#2A2A3E] text-slate-400">
              ۳
            </button>
            <button class="join-item btn btn-sm bg-[#1A1A26] border-[#2A2A3E] text-slate-400">
              »
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>

