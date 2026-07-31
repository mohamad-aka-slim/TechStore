<?php include 'includes/header.php'; ?>

<main>
  <div class="container mx-auto px-4 py-16">
    <div class="text-center mb-12">
      <h1 class="text-3xl font-bold text-white mb-3">تماس با ما</h1>
      <p class="text-slate-400">
        در هر ساعتی از شبانه‌روز آماده پاسخگویی هستیم
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-6 mb-12">
      <div class="glass-card rounded-2xl p-6 text-center">
        <div class="w-14 h-14 rounded-2xl bg-indigo-600/20 flex items-center justify-center mx-auto mb-4">
          <i data-lucide="phone" class="w-7 h-7 text-indigo-400"></i>
        </div>
        <div class="font-bold text-white mb-1">تلفن</div>
        <div class="text-slate-400 text-sm">021-12345678</div>
        <div class="text-slate-400 text-sm">021-87654321</div>
      </div>
      <div class="glass-card rounded-2xl p-6 text-center">
        <div class="w-14 h-14 rounded-2xl bg-purple-600/20 flex items-center justify-center mx-auto mb-4">
          <i data-lucide="mail" class="w-7 h-7 text-purple-400"></i>
        </div>
        <div class="font-bold text-white mb-1">ایمیل</div>
        <div class="text-slate-400 text-sm">info@techstore.ir</div>
        <div class="text-slate-400 text-sm">support@techstore.ir</div>
      </div>
      <div class="glass-card rounded-2xl p-6 text-center">
        <div class="w-14 h-14 rounded-2xl bg-green-600/20 flex items-center justify-center mx-auto mb-4">
          <i data-lucide="map-pin" class="w-7 h-7 text-green-400"></i>
        </div>
        <div class="font-bold text-white mb-1">آدرس</div>
        <div class="text-slate-400 text-sm">تهران، خیابان ولیعصر</div>
        <div class="text-slate-400 text-sm">پلاک ۱۰۲۳</div>
      </div>
    </div>

    <div class="glass-card rounded-3xl p-8 max-w-2xl mx-auto">
      <h2 class="text-xl font-bold text-white mb-6">ارسال پیام</h2>
      <div class="space-y-4">
        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="text-sm text-slate-400 block mb-1">نام</label><input type="text" placeholder="نام شما"
              class="input w-full input-dark rounded-xl text-sm" />
          </div>
          <div>
            <label class="text-sm text-slate-400 block mb-1">نام خانوادگی</label><input type="text"
              placeholder="نام خانوادگی" class="input w-full input-dark rounded-xl text-sm" />
          </div>
        </div>
        <div>
          <label class="text-sm text-slate-400 block mb-1">ایمیل</label><input type="email"
            placeholder="example@email.com" class="input w-full input-dark rounded-xl text-sm" />
        </div>
        <div>
          <label class="text-sm text-slate-400 block mb-1">موضوع</label><select
            class="select w-full bg-[#12121A] border-[#2A2A3E] text-slate-300 rounded-xl text-sm">
            <option>انتخاب کنید...</option>
            <option>پشتیبانی فنی</option>
            <option>سوال درباره محصول</option>
            <option>شکایت</option>
            <option>پیشنهاد</option>
          </select>
        </div>
        <div>
          <label class="text-sm text-slate-400 block mb-1">پیام</label><textarea rows="4"
            placeholder="پیام خود را بنویسید..."
            class="textarea w-full input-dark rounded-xl text-sm resize-none"></textarea>
        </div>
        <button class="btn btn-primary w-full rounded-xl gap-2" onclick="showToast('پیام شما ارسال شد!')">
          <i data-lucide="send" class="w-4 h-4"></i> ارسال پیام
        </button>
      </div>
    </div>
  </div>
</main>
<?php include 'includes/footer.php'; ?>

