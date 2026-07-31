<?php include 'includes/header.php'; ?>
<main>
  <div class="container mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold text-white mb-8">تکمیل سفارش</h1>

    <div class="flex items-center justify-center mb-10 gap-2">
      <div class="flex items-center gap-2">
        <div class="w-8 h-8 rounded-full bg-indigo-600 flex items-center justify-center text-white text-sm font-bold">
          ۱
        </div>
        <span class="text-white text-sm font-medium">اطلاعات</span>
      </div>
      <div class="h-px w-12 bg-[#2A2A3E]"></div>
      <div class="flex items-center gap-2">
        <div
          class="w-8 h-8 rounded-full bg-[#1A1A26] border-2 border-[#2A2A3E] flex items-center justify-center text-slate-400 text-sm">
          ۲
        </div>
        <span class="text-slate-400 text-sm">پرداخت</span>
      </div>
      <div class="h-px w-12 bg-[#2A2A3E]"></div>
      <div class="flex items-center gap-2">
        <div
          class="w-8 h-8 rounded-full bg-[#1A1A26] border-2 border-[#2A2A3E] flex items-center justify-center text-slate-400 text-sm">
          ۳
        </div>
        <span class="text-slate-400 text-sm">تأیید</span>
      </div>
    </div>

    <div class="grid lg:grid-cols-3 gap-6">
      <div class="lg:col-span-2 space-y-6">
        <div class="glass-card rounded-2xl p-6">
          <h2 class="font-bold text-white mb-5 flex items-center gap-2">
            <i data-lucide="map-pin" class="w-5 h-5 text-indigo-400"></i>
            اطلاعات ارسال
          </h2>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="text-sm text-slate-400 block mb-1">نام</label><input type="text" value="علی"
                class="input w-full input-dark rounded-xl text-sm" />
            </div>
            <div>
              <label class="text-sm text-slate-400 block mb-1">نام خانوادگی</label><input type="text" value="رضایی"
                class="input w-full input-dark rounded-xl text-sm" />
            </div>
            <div>
              <label class="text-sm text-slate-400 block mb-1">موبایل</label><input type="tel" value="09123456789"
                class="input w-full input-dark rounded-xl text-sm" />
            </div>
            <div>
              <label class="text-sm text-slate-400 block mb-1">استان</label><select
                class="select w-full bg-[#12121A] border-[#2A2A3E] text-slate-300 rounded-xl text-sm">
                <option>تهران</option>
                <option>اصفهان</option>
                <option>مشهد</option>
              </select>
            </div>
            <div class="col-span-2">
              <label class="text-sm text-slate-400 block mb-1">آدرس کامل</label><textarea rows="2"
                class="textarea w-full input-dark rounded-xl text-sm resize-none">
تهران، ولیعصر، پلاک ۱۰۲</textarea>
            </div>
            <div>
              <label class="text-sm text-slate-400 block mb-1">کد پستی</label><input type="text" value="1234567890"
                class="input w-full input-dark rounded-xl text-sm" />
            </div>
          </div>
        </div>

        <div class="glass-card rounded-2xl p-6">
          <h2 class="font-bold text-white mb-5 flex items-center gap-2">
            <i data-lucide="truck" class="w-5 h-5 text-indigo-400"></i> روش
            ارسال
          </h2>
          <div class="space-y-3">
            <label
              class="flex items-center justify-between p-4 rounded-xl border border-indigo-500/50 bg-indigo-600/10 cursor-pointer">
              <div class="flex items-center gap-3">
                <input type="radio" name="ship" class="radio radio-primary" checked />
                <div>
                  <div class="font-medium text-white text-sm">
                    ارسال عادی
                  </div>
                  <div class="text-xs text-slate-500">۳ تا ۵ روز کاری</div>
                </div>
              </div>
              <span class="text-green-400 font-medium text-sm">رایگان</span>
            </label>
            <label
              class="flex items-center justify-between p-4 rounded-xl border border-[#2A2A3E] cursor-pointer hover:border-indigo-500/30">
              <div class="flex items-center gap-3">
                <input type="radio" name="ship" class="radio radio-primary" />
                <div>
                  <div class="font-medium text-white text-sm">
                    ارسال سریع
                  </div>
                  <div class="text-xs text-slate-500">۱ تا ۲ روز کاری</div>
                </div>
              </div>
              <span class="text-white font-medium text-sm">۱۵۰,۰۰۰ ت</span>
            </label>
          </div>
        </div>

        <div class="glass-card rounded-2xl p-6">
          <h2 class="font-bold text-white mb-5 flex items-center gap-2">
            <i data-lucide="credit-card" class="w-5 h-5 text-indigo-400"></i>
            روش پرداخت
          </h2>
          <div class="space-y-3">
            <label
              class="flex items-center gap-3 p-4 rounded-xl border border-indigo-500/50 bg-indigo-600/10 cursor-pointer"><input
                type="radio" name="pay" class="radio radio-primary" checked /><span
                class="text-white text-sm font-medium">درگاه پرداخت آنلاین</span><span
                class="mr-auto text-2xl">💳</span></label>
            <label
              class="flex items-center gap-3 p-4 rounded-xl border border-[#2A2A3E] cursor-pointer hover:border-indigo-500/30"><input
                type="radio" name="pay" class="radio radio-primary" /><span
                class="text-white text-sm font-medium">پرداخت در محل</span><span
                class="mr-auto text-2xl">💵</span></label>
          </div>
        </div>
      </div>

      <div>
        <div class="glass-card rounded-2xl p-6 glow sticky top-20">
          <h2 class="font-bold text-white mb-5">سفارش شما</h2>
          <div class="space-y-3 mb-5">
            <div class="flex items-center gap-3">
              <span class="text-2xl">📱</span>
              <div class="flex-1">
                <div class="text-sm text-white">iPhone 15 Pro Max</div>
                <div class="text-xs text-slate-500">x۱</div>
              </div>
              <span class="text-sm text-slate-300">۵۸M ت</span>
            </div>
            <div class="flex items-center gap-3">
              <span class="text-2xl">⌚</span>
              <div class="flex-1">
                <div class="text-sm text-white">Apple Watch Ultra 2</div>
                <div class="text-xs text-slate-500">x۱</div>
              </div>
              <span class="text-sm text-slate-300">۲۸M ت</span>
            </div>
            <div class="flex items-center gap-3">
              <span class="text-2xl">🏠</span>
              <div class="flex-1">
                <div class="text-sm text-white">Google Nest Hub Max</div>
                <div class="text-xs text-slate-500">x۲</div>
              </div>
              <span class="text-sm text-slate-300">۱۶M ت</span>
            </div>
          </div>
          <div class="divider border-[#2A2A3E] my-4"></div>
          <div class="space-y-2 text-sm mb-5">
            <div class="flex justify-between">
              <span class="text-slate-400">جمع</span><span class="text-white">۱۰۲M ت</span>
            </div>
            <div class="flex justify-between">
              <span class="text-slate-400">تخفیف</span><span class="text-green-400">-۵M ت</span>
            </div>
            <div class="flex justify-between font-bold text-base mt-2">
              <span class="text-white">مجموع</span><span class="text-indigo-400">۱۰۵.۷M ت</span>
            </div>
          </div>
          <button class="btn btn-primary w-full rounded-xl gap-2" onclick="showToast('سفارش شما ثبت شد! 🎉')">
            <i data-lucide="shield-check" class="w-4 h-4"></i> ثبت و پرداخت
          </button>
          <div class="flex items-center justify-center gap-2 mt-4 text-xs text-slate-500">
            <i data-lucide="lock" class="w-3 h-3"></i> پرداخت امن SSL
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>

