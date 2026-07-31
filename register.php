<?php include 'includes/header.php'; ?>

<main class="relative min-h-screen flex items-center justify-center py-10 px-4 bg-[#0a0a0f] overflow-hidden" dir="rtl">

  <!-- Subtle Ambient Lighting (Professional, not overpowering) -->
  <div
    class="absolute top-0 right-1/4 w-[500px] h-[500px] bg-indigo-600/10 rounded-full mix-blend-screen filter blur-[120px] pointer-events-none">
  </div>

  <!-- Main Card -->
  <div
    class="w-full max-w-md relative z-10 bg-[#12121A]/80 backdrop-blur-xl border border-white/[0.05] shadow-2xl shadow-black/50 rounded-2xl p-8 sm:p-10">

    <!-- Header Section -->
    <div class="text-center mb-8">
      <div
        class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-indigo-500/10 border border-indigo-500/20 mb-4">
        <i data-lucide="user-plus" class="w-5 h-5 text-indigo-400"></i>
      </div>
      <h1 class="text-2xl font-semibold text-white tracking-tight">
        ایجاد حساب کاربری
      </h1>
      <p class="text-slate-400 text-sm mt-2">
        برای شروع، اطلاعات خود را وارد کنید
      </p>
    </div>

    <!-- Form -->
    <form class="space-y-4" action="#" method="POST">

      <!-- Name Grid -->
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="text-xs text-slate-400 block mb-1.5 font-medium pr-1">نام</label>
          <input type="text" placeholder="علی"
            class="w-full bg-black/20 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" />
        </div>
        <div>
          <label class="text-xs text-slate-400 block mb-1.5 font-medium pr-1">نام خانوادگی</label>
          <input type="text" placeholder="رضایی"
            class="w-full bg-black/20 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" />
        </div>
      </div>

      <!-- Phone -->
      <div>
        <label class="text-xs text-slate-400 block mb-1.5 font-medium pr-1">شماره موبایل</label>
        <input type="tel" placeholder="۰۹xxxxxxxxx" dir="ltr"
          class="w-full bg-black/20 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white text-right placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" />
      </div>

      <!-- Email -->
      <div>
        <label class="text-xs text-slate-400 block mb-1.5 font-medium pr-1">ایمیل (اختیاری)</label>
        <input type="email" placeholder="example@email.com" dir="ltr"
          class="w-full bg-black/20 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white text-right placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" />
      </div>

      <!-- Passwords -->
      <div>
        <label class="text-xs text-slate-400 block mb-1.5 font-medium pr-1">رمز عبور</label>
        <input type="password" placeholder="حداقل ۸ کاراکتر"
          class="w-full bg-black/20 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" />
      </div>
      <div>
        <label class="text-xs text-slate-400 block mb-1.5 font-medium pr-1">تکرار رمز عبور</label>
        <input type="password" placeholder="تکرار رمز عبور"
          class="w-full bg-black/20 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors" />
      </div>

      <!-- Checkbox -->
      <div class="pt-2 pb-1">
        <label class="flex items-center gap-3 text-sm text-slate-400 cursor-pointer group">
          <div class="relative flex items-center justify-center">
            <input type="checkbox"
              class="peer appearance-none w-4 h-4 border border-slate-500 rounded bg-black/20 checked:bg-indigo-600 checked:border-indigo-600 transition-colors cursor-pointer" />
            <i data-lucide="check"
              class="absolute w-3 h-3 text-white opacity-0 peer-checked:opacity-100 pointer-events-none transition-opacity"></i>
          </div>
          <span class="select-none">با <a href="#"
              class="text-indigo-400 hover:text-indigo-300 transition-colors">قوانین و مقررات</a> موافقم</span>
        </label>
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full mt-2 flex items-center justify-center gap-2 py-3 px-4 bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-semibold rounded-xl shadow-sm transition-colors duration-200 focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#0a0a0f] focus:ring-indigo-500">
        ثبت نام
      </button>
    </form>

    <!-- Footer Link -->
    <p class="text-center text-sm text-slate-400 mt-6 pt-6 border-t border-white/5">
      حساب کاربری دارید؟
      <a href="login.php" class="text-indigo-400 font-medium hover:text-indigo-300 transition-colors mr-1">وارد
        شوید</a>
    </p>
  </div>
</main>
<?php include 'includes/footer.php'; ?>

