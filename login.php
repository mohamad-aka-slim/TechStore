<?php include 'includes/header.php'; ?>

<main>
  <div class="min-h-screen flex items-center justify-center py-10 px-4">
    <div class="w-full max-w-md">
      <div class="text-center mb-8">
        <div class="w-16 h-16 rounded-2xl bg-indigo-600 flex items-center justify-center mx-auto mb-4 glow">
          <i data-lucide="cpu" class="w-8 h-8 text-white"></i>
        </div>
        <h1 class="text-2xl font-bold text-white">ورود به تک‌استور</h1>
        <p class="text-slate-400 text-sm mt-1">خوش آمدید!</p>
      </div>

      <div class="glass-card rounded-3xl p-8 glow">
        <div class="grid grid-cols-2 gap-3 mb-6">
          <button class="btn btn-outline border-[#2A2A3E] text-slate-300 hover:bg-[#1A1A26] rounded-xl gap-2 text-sm">
            <span>🔵</span> گوگل
          </button>
          <button class="btn btn-outline border-[#2A2A3E] text-slate-300 hover:bg-[#1A1A26] rounded-xl gap-2 text-sm">
            <span>📘</span> فیسبوک
          </button>
        </div>
        <div class="divider text-slate-600 text-xs">یا با ایمیل</div>

        <div class="space-y-4">
          <div>
            <label class="text-sm text-slate-400 block mb-1">ایمیل یا شماره موبایل</label>
            <div class="relative">
              <input type="text" placeholder="09xxxxxxxxx" class="input w-full input-dark rounded-xl text-sm pr-10" />
              <i data-lucide="mail" class="w-4 h-4 text-slate-500 absolute top-3.5 right-3"></i>
            </div>
          </div>
          <div>
            <label class="text-sm text-slate-400 block mb-1">رمز عبور</label>
            <div class="relative">
              <input type="password" placeholder="••••••••" class="input w-full input-dark rounded-xl text-sm pr-10" />
              <i data-lucide="lock" class="w-4 h-4 text-slate-500 absolute top-3.5 right-3"></i>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <label class="flex items-center gap-2 text-sm text-slate-400 cursor-pointer"><input type="checkbox"
                class="checkbox checkbox-xs checkbox-primary" />
              مرا به خاطر بسپار</label>
            <a class="text-sm text-indigo-400 hover:text-indigo-300 cursor-pointer">فراموشی رمز</a>
          </div>
          <a href="dashboard.php" class="btn btn-primary w-full rounded-xl gap-2 block text-center">
            <i data-lucide="log-in" class="w-4 h-4"></i>
            ورود
          </a>
        </div>

        <p class="text-center text-sm text-slate-500 mt-6">
          حساب کاربری ندارید؟
          <a href="register.php" class="text-indigo-400 hover:text-indigo-300 cursor-pointer mr-1">ثبت نام کنید</a>
        </p>
      </div>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>

