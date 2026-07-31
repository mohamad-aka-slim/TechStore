<?php include 'includes/header.php'; ?>
<main>
  <div class="container mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold text-white mb-8 flex items-center gap-3">
      <i data-lucide="shopping-cart" class="w-6 h-6 text-indigo-400"></i>
      سبد خرید
      <span id="header-badge" class="badge badge-primary badge-sm">۳ محصول</span>
    </h1>

    <div class="grid lg:grid-cols-3 gap-6">
      <div class="lg:col-span-2 space-y-4" id="cart-container">
        <!-- برای شناسایی محصول از کلاس cart-item استفاده شده و قیمت پایه در data-price اضافه شد -->
        <div class="glass-card cart-item rounded-2xl p-5 flex items-center gap-4" data-price="58000000">
          <div class="w-20 h-20 rounded-xl bg-[#12121A] flex items-center justify-center text-4xl shrink-0">
            📱
          </div>
          <div class="flex-1">
            <div class="font-semibold text-white">iPhone 15 Pro Max</div>
            <div class="text-xs text-slate-500 mt-1">
              رنگ: مشکی | حافظه: ۲۵۶G
            </div>
            <div class="flex items-center gap-3 mt-3">
              <div class="flex items-center gap-2">
                <div class="qty-btn" onclick="changeQty(this, -1)">
                  <i data-lucide="minus" class="w-3 h-3"></i>
                </div>
                <span class="w-6 text-center text-white text-sm qty-value">۱</span>
                <div class="qty-btn" onclick="changeQty(this, 1)">
                  <i data-lucide="plus" class="w-3 h-3"></i>
                </div>
              </div>
              <button onclick="deleteItem(this)"
                class="text-rose-400 hover:text-rose-300 text-xs flex items-center gap-1">
                <i data-lucide="trash-2" class="w-3 h-3"></i> حذف
              </button>
            </div>
          </div>
          <div class="text-left shrink-0">
            <div class="font-bold text-indigo-400 item-total-price">
              ۵۸,۰۰۰,۰۰۰ ت
            </div>
          </div>
        </div>

        <div class="glass-card cart-item rounded-2xl p-5 flex items-center gap-4" data-price="28000000">
          <div class="w-20 h-20 rounded-xl bg-[#12121A] flex items-center justify-center text-4xl shrink-0">
            ⌚
          </div>
          <div class="flex-1">
            <div class="font-semibold text-white">Apple Watch Ultra 2</div>
            <div class="text-xs text-slate-500 mt-1">رنگ: تیتانیوم</div>
            <div class="flex items-center gap-3 mt-3">
              <div class="flex items-center gap-2">
                <div class="qty-btn" onclick="changeQty(this, -1)">
                  <i data-lucide="minus" class="w-3 h-3"></i>
                </div>
                <span class="w-6 text-center text-white text-sm qty-value">۱</span>
                <div class="qty-btn" onclick="changeQty(this, 1)">
                  <i data-lucide="plus" class="w-3 h-3"></i>
                </div>
              </div>
              <button onclick="deleteItem(this)"
                class="text-rose-400 hover:text-rose-300 text-xs flex items-center gap-1">
                <i data-lucide="trash-2" class="w-3 h-3"></i> حذف
              </button>
            </div>
          </div>
          <div class="text-left shrink-0">
            <div class="font-bold text-indigo-400 item-total-price">
              ۲۸,۰۰۰,۰۰۰ ت
            </div>
          </div>
        </div>

        <div class="glass-card cart-item rounded-2xl p-5 flex items-center gap-4" data-price="8000000">
          <div class="w-20 h-20 rounded-xl bg-[#12121A] flex items-center justify-center text-4xl shrink-0">
            🏠
          </div>
          <div class="flex-1">
            <div class="font-semibold text-white">Google Nest Hub Max</div>
            <div class="text-xs text-slate-500 mt-1">رنگ: زغالی</div>
            <div class="flex items-center gap-3 mt-3">
              <div class="flex items-center gap-2">
                <div class="qty-btn" onclick="changeQty(this, -1)">
                  <i data-lucide="minus" class="w-3 h-3"></i>
                </div>
                <span class="w-6 text-center text-white text-sm qty-value">۲</span>
                <div class="qty-btn" onclick="changeQty(this, 1)">
                  <i data-lucide="plus" class="w-3 h-3"></i>
                </div>
              </div>
              <button onclick="deleteItem(this)"
                class="text-rose-400 hover:text-rose-300 text-xs flex items-center gap-1">
                <i data-lucide="trash-2" class="w-3 h-3"></i> حذف
              </button>
            </div>
          </div>
          <div class="text-left shrink-0">
            <div class="font-bold text-indigo-400 item-total-price">
              ۱۶,۰۰۰,۰۰۰ ت
            </div>
          </div>
        </div>

        <!-- باکس کد تخفیف -->
        <div id="discount-box" class="glass-card rounded-2xl p-5">
          <div class="flex gap-3">
            <input type="text" placeholder="کد تخفیف" class="input flex-1 input-dark rounded-xl text-sm" />
            <button
              class="btn btn-outline border-indigo-500 text-indigo-400 hover:bg-indigo-600 hover:text-white rounded-xl">
              اعمال
            </button>
          </div>
        </div>
      </div>

      <!-- ستون خلاصه سفارش -->
      <div>
        <div class="glass-card rounded-2xl p-6 glow sticky top-20" id="order-summary">
          <h2 class="font-bold text-white mb-5 text-lg">خلاصه سفارش</h2>
          <div class="space-y-3 text-sm">
            <div class="flex justify-between">
              <span class="text-slate-400">جمع کل</span><span class="text-white summary-val">۱۰۲,۰۰۰,۰۰۰ ت</span>
            </div>
            <div class="flex justify-between">
              <span class="text-slate-400">تخفیف</span><span class="text-green-400 summary-val">- ۵,۰۰۰,۰۰۰ ت</span>
            </div>
            <div class="flex justify-between">
              <span class="text-slate-400">هزینه ارسال</span><span class="text-green-400 summary-val">رایگان</span>
            </div>
            <div class="flex justify-between">
              <span class="text-slate-400">مالیات (۹٪)</span><span class="text-white summary-val">۸,۷۳۰,۰۰۰ ت</span>
            </div>
          </div>
          <div class="divider my-4 border-[#2A2A3E]"></div>
          <div class="flex justify-between font-bold text-lg mb-6">
            <span class="text-white">مبلغ نهایی</span><span class="text-indigo-400 final-price-val">۱۰۵,۷۳۰,۰۰۰ ت</span>
          </div>
          <a href="checkout.php" class="btn btn-primary w-full rounded-xl gap-2 block text-center mb-3">
            <i data-lucide="credit-card" class="w-4 h-4 inline"></i> ادامه
            خرید
          </a>
          <a href="shop.php" class="btn btn-ghost w-full rounded-xl text-slate-400 gap-2 text-sm block text-center">
            <i data-lucide="arrow-right" class="w-4 h-4 inline"></i> ادامه
            خرید
          </a>
        </div>
      </div>
    </div>
  </div>
</main>

<script>
  const faDigits = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];

  function toEnDigit(s) {
    return s.toString().replace(/[۰-۹]/g, (w) => faDigits.indexOf(w));
  }

  function toFaDigit(s) {
    return s.toString().replace(/\d/g, (w) => faDigits[w]);
  }

  // تغییر تعداد محصول
  function changeQty(btn, delta) {
    const qtySpan = btn.parentElement.querySelector(".qty-value");
    let qty = parseInt(toEnDigit(qtySpan.textContent));
    qty += delta;

    if (qty < 1) qty = 1;

    qtySpan.textContent = toFaDigit(qty);
    updateCart();
  }

  function deleteItem(btn) {
    const itemEl = btn.closest(".cart-item");
    const name = itemEl.querySelector(".font-semibold").textContent;
    itemEl.style.transition = "opacity 0.3s, transform 0.3s";
    itemEl.style.opacity = "0";
    itemEl.style.transform = "translateX(20px)";

    setTimeout(() => {
      itemEl.remove();
      updateCart();
      showToast(name + " از سبد حذف شد");
      checkEmptyCart();
    }, 300);
  }

  function updateCart() {
    const items = document.querySelectorAll(".cart-item");
    let total = 0;

    items.forEach((item) => {
      const unitPrice = parseInt(item.getAttribute("data-price"));
      const qtyEl = item.querySelector(".qty-value");

      if (qtyEl && !isNaN(unitPrice)) {
        const qty = parseInt(toEnDigit(qtyEl.textContent));
        const lineTotal = unitPrice * qty;
        total += lineTotal;

        const itemPriceDisplay = item.querySelector(".item-total-price");
        if (itemPriceDisplay) {
          itemPriceDisplay.textContent =
            toFaDigit(lineTotal.toLocaleString("en-US")) + " ت";
        }
      }
    });

    const discount = Math.round(total * 0.05);
    const shipping = total > 50000000 ? 0 : total === 0 ? 0 : 150000;
    const tax = Math.round(total * 0.09);
    const finalTotal = total > 0 ? total - discount + shipping + tax : 0;

    const formatNumber = (n) => toFaDigit(n.toLocaleString("en-US"));

    const summaryVals = document.querySelectorAll(".summary-val");
    if (summaryVals.length >= 4) {
      summaryVals[0].textContent = formatNumber(total) + " ت";
      summaryVals[1].textContent =
        (total > 0 ? "- " : "") + formatNumber(discount) + " ت";
      summaryVals[2].textContent =
        shipping === 0 && total > 0
          ? "رایگان"
          : total === 0
            ? "۰ ت"
            : formatNumber(shipping) + " ت";
      summaryVals[3].textContent = formatNumber(tax) + " ت";

      const finalSpan = document.querySelector(".final-price-val");
      if (finalSpan)
        finalSpan.textContent = formatNumber(finalTotal) + " ت";
    }

    updateBadge(items.length);
  }

  function updateBadge(count) {
    const badge = document.getElementById("cart-badge");
    const headerBadge = document.getElementById("header-badge");
    const countFa = toFaDigit(count);

    if (badge) badge.textContent = countFa;
    if (headerBadge) headerBadge.textContent = countFa + " محصول";
  }

  function checkEmptyCart() {
    const items = document.querySelectorAll(".cart-item");
    const container = document.getElementById("cart-container");

    if (items.length === 0) {
      container.innerHTML = `
            <div id="empty-cart" class="text-center py-20 glass-card rounded-2xl">
              <div class="text-6xl mb-4">🛒</div>
              <h2 class="text-2xl font-bold text-white mb-3">سبد خرید شما خالی است</h2>
              <p class="text-slate-500 mb-6">به فروشگاه بروید و محصولات را اضافه کنید</p>
              <a href="shop.php" class="btn btn-primary rounded-xl gap-2 inline-flex"><i data-lucide="shopping-bag" class="w-4 h-4"></i> ادامه خرید</a>
            </div>`;
      lucide.createIcons();
    }
  }

  function showToast(msg) {
    const t = document.getElementById("toast");
    document.getElementById("toast-msg").textContent = msg;
    t.classList.add("show");
    setTimeout(() => t.classList.remove("show"), 3000);
  }

  document.addEventListener("DOMContentLoaded", () => {
    lucide.createIcons();
    updateCart();
  });
</script>


<?php include 'includes/footer.php'; ?>

