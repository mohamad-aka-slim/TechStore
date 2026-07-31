<?php include 'includes/header.php'; ?>




<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_submit'])) {

  

}

?>



<main class="relative min-h-screen flex items-center justify-center py-10 px-4 bg-[#0a0a0f] overflow-hidden" dir="rtl">

  <!-- Subtle Ambient Lighting -->
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
        <i data-lucide="cpu" class="w-5 h-5 text-indigo-400"></i>
      </div>
      <h1 class="text-2xl font-semibold text-white tracking-tight">ورود به تک‌استور</h1>
      <p class="text-slate-400 text-sm mt-2">خوش آمدید! لطفا وارد حساب خود شوید</p>
    </div>

    <!-- Social Logins -->
    <div class="grid grid-cols-2 gap-3">
      <button type="button"
        class="flex items-center justify-center gap-2 py-2.5 bg-black/20 border border-white/10 rounded-xl hover:bg-white/5 transition-colors text-sm text-slate-300">
        <span class="text-lg leading-none">🔵</span> گوگل
      </button>
      <button type="button"
        class="flex items-center justify-center gap-2 py-2.5 bg-black/20 border border-white/10 rounded-xl hover:bg-white/5 transition-colors text-sm text-slate-300">
        <span class="text-lg leading-none">📘</span> فیسبوک
      </button>
    </div>

    <!-- Divider -->
    <div class="flex items-center my-6">
      <div class="flex-grow border-t border-white/5"></div>
      <span class="px-4 text-xs text-slate-500 font-medium">یا ورود با ایمیل</span>
      <div class="flex-grow border-t border-white/5"></div>
    </div>

    <!-- Form -->
    <form class="space-y-4" action="" method="POST" id="loginform">

      <!-- Email or Phone -->
      <div>
        <label class="text-xs text-slate-400 block mb-1.5 font-medium pr-1">ایمیل یا شماره موبایل</label>
        <div class="relative">
          <input type="text" placeholder="۰۹xxxxxxxxx" dir="ltr" required name="identifier"
            pattern="^09[0-9]{9}$|^[^@\s]+@[^@\s]+\.[^@\s]+$"
            class="auth-input w-full bg-black/20 border border-white/10 rounded-xl pl-4 pr-10 py-2.5 text-sm text-white text-right placeholder-slate-600 outline-none transition-colors" />
          <i data-lucide="mail" class="absolute right-3.5 top-[11px] w-4 h-4 text-slate-500 transition-colors"></i>
        </div>
      </div>

      <!-- Password -->
      <div>
        <label class="text-xs text-slate-400 block mb-1.5 font-medium pr-1">رمز عبور</label>
        <div class="relative">
          <input type="password" placeholder="••••••••" dir="ltr" required minlength="8" name="password"
            class="auth-input w-full bg-black/20 border border-white/10 rounded-xl pl-4 pr-10 py-2.5 text-sm text-white text-right placeholder-slate-600 outline-none transition-colors" />
          <i data-lucide="lock" class="absolute right-3.5 top-[11px] w-4 h-4 text-slate-500 transition-colors"></i>
        </div>
      </div>

      <!-- Checkbox & Forgot Password -->
      <div class="flex items-center justify-between pt-2 pb-1">
        <label class="flex items-center gap-3 text-sm text-slate-400 cursor-pointer group">
          <div class="relative flex items-center justify-center">
            <input type="checkbox" id="rememberMe" name="remember"
              class="peer appearance-none w-4 h-4 border border-slate-500 rounded bg-black/20 checked:bg-indigo-600 checked:border-indigo-600 transition-colors cursor-pointer" />
            <i data-lucide="check"
              class="absolute w-3 h-3 text-white opacity-0 peer-checked:opacity-100 pointer-events-none transition-opacity"></i>
          </div>

          <!-- Add the group-has-[:checked] classes here -->
          <span
            class="select-none transition-colors remember-text group-has-[:checked]:text-white group-has-[:checked]:font-medium">
            مرا به خاطر بسپار
          </span>
        </label>
        <a href="#" class="text-xs text-indigo-400 font-medium hover:text-indigo-300 transition-colors">فراموشی رمز؟</a>
      </div>
      <!-- Submit Button -->
      <button type="submit" name="login_submit"
        class="w-full mt-2 flex items-center justify-center gap-2 py-3 px-4 bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-semibold rounded-xl shadow-sm transition-colors duration-200 focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#0a0a0f] focus:ring-indigo-500">
        <i data-lucide="log-in" class="w-4 h-4"></i>
        ورود به حساب
      </button>
    </form>

    <!-- Footer Link -->
    <p class="text-center text-sm text-slate-400 mt-6 pt-6 border-t border-white/5">
      حساب کاربری ندارید؟
      <a href="register.php" class="text-indigo-400 font-medium hover:text-indigo-300 transition-colors mr-1">ثبت نام
        کنید</a>
    </p>
  </div>
</main>
<script>

  const submitBtn = document.querySelector('button[type="submit"]');
  submitBtn.addEventListener('click', () => {
    const identifierInput = document.querySelector('input[name="identifier"]');
    const passwordInput = document.querySelector('input[name="password"]');

    const identifierValue = identifierInput.value.trim();
    const passwordValue = passwordInput.value;

    const identifierRegex = /^09[0-9]{9}$|^[^@\s]+@[^@\s]+\.[^@\s]+$/;

    if (identifierValue === '') {
      showToast("خطا: فیلد ایمیل یا شماره موبایل نمی‌تواند خالی باشد.");
    } else if (!identifierRegex.test(identifierValue)) {
      showToast("خطا: فرمت ایمیل یا شماره موبایل نامعتبر است. (مثال معتبر: 09123456789 یا test@gmail.com)");
    } else {
    }

    // 2. Validate Password
    if (passwordValue === '') {
      showToast("خطا: فیلد رمز عبور نمی‌تواند خالی باشد.");
    } else if (passwordValue.length < 8) {
      showToast("خطا: رمز عبور باید حداقل ۸ کاراکتر باشد.");
    } else {
    }

  })


  document.getElementById('loginform').addEventListener('submit', function (event) {
    event.preventDefault();

    // Get the input elements
    const identifierInput = document.querySelector('input[name="identifier"]');
    const passwordInput = document.querySelector('input[name="password"]');

    // Get the values
    const identifierValue = identifierInput.value.trim();
    const passwordValue = passwordInput.value;
    let isValid = true;
    const identifierRegex = /^09[0-9]{9}$|^[^@\s]+@[^@\s]+\.[^@\s]+$/;

    if (identifierValue === '') {
      showToast("خطا: فیلد ایمیل یا شماره موبایل نمی‌تواند خالی باشد.");
      isValid = false;
    } else if (!identifierRegex.test(identifierValue)) {
      showToast("خطا: فرمت ایمیل یا شماره موبایل نامعتبر است. (مثال معتبر: 09123456789 یا test@gmail.com)");
      isValid = false;
    } else {
    }

    // 2. Validate Password
    if (passwordValue === '') {
      showToast("خطا: فیلد رمز عبور نمی‌تواند خالی باشد.");
      isValid = false;
    } else if (passwordValue.length < 8) {
      showToast("خطا: رمز عبور باید حداقل ۸ کاراکتر باشد.");
      isValid = false;
    } else {
    }


    if (isValid) {
      document.getElementById('loginform').submit()
    }



  });
</script>
<?php include 'includes/footer.php'; ?>

