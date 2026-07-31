<?php include 'includes/header.php'; ?>
<?php

include "includes/db.php";

// دریافت مقادیر از URL
$cat = $_GET['cat'] ?? '';
$brand = $_GET['brand'] ?? '';
$price = $_GET['price'] ?? '';
$rating = $_GET['rating'] ?? '';

// یک کوئری پایه می‌نویسیم و شرط‌ها را به مرور به آن می‌چسبانیم
$sql = "SELECT * FROM `Products` WHERE 1=1";

// ----------------------------------------------------
// ۱. فیلتر دسته‌بندی
// ----------------------------------------------------
if ($cat != '') {
  // جاوااسکریپت مقادیر را اینطور می‌فرستد: گوشی هوشمند,ساعت هوشمند
  // ما با این کد آن را تبدیل می‌کنیم به: 'گوشی هوشمند','ساعت هوشمند'
  $cat_list = "'" . str_replace(",", "','", $cat) . "'";
  $sql .= " AND `cat` IN ($cat_list)";
}

// ----------------------------------------------------
// ۲. فیلتر برند
// ----------------------------------------------------
if ($brand != '') {
  $brand_list = "'" . str_replace(",", "','", $brand) . "'";
  $sql .= " AND `brand` IN ($brand_list)";
}

// ----------------------------------------------------
// ۳. فیلتر امتیاز
// ----------------------------------------------------
if ($rating != '') {
  // چون امتیاز در دیتابیس عدد اعشاری است، ساده مقایسه می‌کنیم
  $sql .= " AND `rating` >= '$rating'";
}

// ----------------------------------------------------
// ۴. فیلتر قیمت
// ----------------------------------------------------
if ($price != '') {
  // جاوااسکریپت قیمت را بر اساس میلیون می‌فرستد (مثلاً 70)
  $price_in_tomans = $price * 1000000;

  // چون در دیتابیس قیمت را به صورت متنی (مثلاً "85,000,000 تومان") ذخیره کردید،
  // با دستور REPLACE در SQL اول کاما و کلمه " تومان" را حذف می‌کنیم تا تبدیل به عدد شود و بتوانیم مقایسه کنیم
  $sql .= " AND REPLACE(REPLACE(`price`, ',', ''), ' تومان', '') + 0 <= $price_in_tomans";
}






$sort = $_GET['sort'] ?? 'default';

// اضافه کردن شرط مرتب‌سازی (ORDER BY) به انتهای کوئری قبلی
switch ($sort) {
  case 'price_asc':
    // ارزان‌ترین (صعودی)
    $sql .= " ORDER BY REPLACE(REPLACE(`price`, ',', ''), ' تومان', '') + 0 ASC";
    break;

  case 'price_desc':
    // گران‌ترین (نزولی)
    $sql .= " ORDER BY REPLACE(REPLACE(`price`, ',', ''), ' تومان', '') + 0 DESC";
    break;

  case 'bestseller':
    // پرفروش‌ترین (در اینجا بر اساس بالاترین امتیاز فرض کردیم)
    $sql .= " ORDER BY `rating` DESC";
    break;

  case 'newest':
    // جدیدترین (آی‌دی‌های بزرگتر یعنی جدیدتر ثبت شده‌اند)
    $sql .= " ORDER BY `id` DESC";
    break;

  default:
    // پیش‌فرض (مثلا به ترتیب آی‌دی)
    // در حالت دیفالت نیاز به نوشتن ORDER BY نداریم
    break;
}








$limit = 12; // تعداد محصول در هر صفحه
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
if ($page < 1)
  $page = 1;
$offset = ($page - 1) * $limit;

// 2. پیدا کردن تعداد کل محصولاتی که فیلتر شده‌اند (برای محاسبه تعداد صفحات)
// با یک ترفند، کلمه SELECT * را به SELECT COUNT(*) تبدیل می‌کنیم تا تعداد را بشمارد
$count_sql = str_replace("SELECT *", "SELECT COUNT(*)", $sql);
$total_records = $pdo->query($count_sql)->fetchColumn();
$total_pages = ceil($total_records / $limit); // گرد کردن به بالا

// 3. اضافه کردن LIMIT به کوئری اصلی و اجرای آن
$sql .= " LIMIT $limit OFFSET $offset";
// ----------------------------------------------------
// در نهایت کوئری را اجرا می‌کنیم
// ----------------------------------------------------
$products = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);


// 4. یک تابع ساده برای اینکه وقتی روی صفحه ۲ کلیک کردیم، فیلترهای قبلی از آدرس پاک نشوند
function getPageUrl($pageNumber)
{
  $params = $_GET; // گرفتن تمام فیلترهای فعلی از URL
  $params['page'] = $pageNumber; // آپدیت کردن شماره صفحه
  return '?' . http_build_query($params); // ساخت لینک جدید
}






?>

<main>
  <div class="container mx-auto px-4 py-10">
    <div class="flex flex-col md:flex-row gap-6">
      <aside class="w-full md:w-64 shrink-0">
        <div class="glass-card rounded-2xl p-5 sticky top-20">
          <h3 class="font-bold text-white mb-4 flex items-center gap-2">
            <i data-lucide="sliders-horizontal" class="w-4 h-4 text-indigo-400"></i> فیلترها
          </h3>

          <!-- دسته‌بندی -->
          <div class="mb-5">
            <div class="text-xs text-slate-500 mb-2 font-semibold uppercase tracking-wider">دسته‌بندی</div>
            <div class="space-y-2">
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="checkbox" value="all" class="cat-filter checkbox checkbox-xs checkbox-primary" checked />
                همه
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="checkbox" value="گوشی هوشمند" class="cat-filter checkbox checkbox-xs checkbox-primary" />
                گوشی هوشمند
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="checkbox" value="ساعت هوشمند" class="cat-filter checkbox checkbox-xs checkbox-primary" />
                ساعت هوشمند
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="checkbox" value="خانه هوشمند" class="cat-filter checkbox checkbox-xs checkbox-primary" />
                خانه هوشمند
              </label>
            </div>
          </div>

          <!-- برند -->
          <div class="mb-5">
            <div class="text-xs text-slate-500 mb-2 font-semibold uppercase tracking-wider">برند</div>
            <div class="space-y-2">
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="checkbox" value="all" class="brand-filter checkbox checkbox-xs checkbox-primary" checked />
                همه
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="checkbox" value="اپل" class="brand-filter checkbox checkbox-xs checkbox-primary" /> Apple
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="checkbox" value="سامسونگ" class="brand-filter checkbox checkbox-xs checkbox-primary" />
                Samsung
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="checkbox" value="شیائومی" class="brand-filter checkbox checkbox-xs checkbox-primary" />
                Xiaomi
              </label>
            </div>
          </div>

          <!-- قیمت -->
          <div class="mb-5">
            <div class="text-xs text-slate-500 mb-3 font-semibold uppercase tracking-wider">محدوده قیمت</div>
            <input type="range" id="priceFilter" min="0" max="100" value="100"
              class="range range-primary range-xs w-full" />
            <div class="flex justify-between text-xs text-slate-500 mt-2">
              <span>۰</span><span><span id="priceLabel">100</span>M ت</span>
            </div>
          </div>

          <!-- امتیاز -->
          <div class="mb-5">
            <div class="text-xs text-slate-500 mb-2 font-semibold uppercase tracking-wider">امتیاز</div>
            <div class="space-y-1">
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="radio" name="rating" value="5" class="rating-filter radio radio-xs radio-primary" /> ★★★★★
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="radio" name="rating" value="4" class="rating-filter radio radio-xs radio-primary" /> ★★★★ و
                بالاتر
              </label>
              <label class="flex items-center gap-2 cursor-pointer text-sm text-slate-300">
                <input type="radio" name="rating" value="0" class="rating-filter radio radio-xs radio-primary"
                  checked /> همه
              </label>
            </div>
          </div>

          <button id="applyFilterBtn" class="btn btn-primary w-full mt-5 rounded-xl btn-sm">
            اعمال فیلتر
          </button>
        </div>
      </aside>

      <?php if (!empty($products)): ?>
        <div class="flex-1">
          <div class="flex items-center justify-between mb-6">
            <div class="text-slate-400 text-sm">
              <span class="text-white font-semibold"><?= $total_records ?></span> محصول یافت شد
            </div>
            <div class="flex items-center gap-2">
              <?php $current_sort = $_GET['sort'] ?? 'default'; ?>
              <select id="sortSelect"
                class="select select-sm bg-[#1A1A26] border-[#2A2A3E] text-slate-300 rounded-xl text-sm">
                <option value="default" <?= $current_sort == 'default' ? 'selected' : '' ?>>مرتب‌سازی: پیش‌فرض</option>
                <option value="price_asc" <?= $current_sort == 'price_asc' ? 'selected' : '' ?>>ارزان‌ترین</option>
                <option value="price_desc" <?= $current_sort == 'price_desc' ? 'selected' : '' ?>>گران‌ترین</option>
                <option value="bestseller" <?= $current_sort == 'bestseller' ? 'selected' : '' ?>>پرفروش‌ترین</option>
                <option value="newest" <?= $current_sort == 'newest' ? 'selected' : '' ?>>جدیدترین</option>
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

            <?php foreach ($products as $p): ?>
              <a href="product.php" class="product-card glass-card rounded-2xl overflow-hidden">
                <div class="relative">
                  <?php if ($p['badge']): ?>
                    <span class="absolute top-2 right-2 badge badge-primary badge-xl z-10"><?= $p['badge'] ?></span>
                  <?php endif ?>
                  <?php if ($p['discount']): ?>
                    <span
                      class="absolute top-2 left-2 badge badge-error badge-xl z-10 text-white "><?= $p['discount'] ?></span>
                  <?php endif ?>
                  <div class="h-36 bg-[#12121A] flex items-center justify-center text-5xl"><?= $p['emoji'] ?></div>
                </div>
                <div class="p-4">
                  <div class="text-xs text-slate-500 mb-1"><?= $p['cat'] ?></div>
                  <div class="font-semibold text-white text-sm mb-1 line-clamp-1"><?= $p['name'] ?></div>
                  <div class="text-xs text-yellow-400 mb-2"><?= $p['rating'] ?></div>
                  <div class="flex items-center justify-between">
                    <div>
                      <div class="text-indigo-400 font-bold text-sm"><?= $p['price'] ?> </div>
                      <div class="text-slate-600 line-through text-xs"><?= $p['oldPrice'] ?> </div>
                    </div>
                    <button class="btn btn-primary btn-xs rounded-lg" onclick="event.preventDefault(); event.stopPropagation();
                      showToast( ' <?= $p['name'] ?>  به سبد خرید اضافه شد  ');">
                      
                      <i data-lucide="plus" class="w-3 h-3"></i>
                    </button>
                  </div>
                </div>
              </a>
            <?php endforeach; ?>



          </div>
          <!-- فقط اگر بیشتر از 1 صفحه داشتیم، دکمه‌های صفحه‌بندی را نشان بده -->
          <?php if ($total_pages > 1): ?>
            <div class="flex justify-center mt-10 w-full">
              <div class="join">

                <!-- دکمه صفحه قبل («) -->
                <?php if ($page > 1): ?>
                  <a href="<?= getPageUrl($page - 1) ?>"
                    class="join-item btn btn-sm bg-[#1A1A26] border-[#2A2A3E] text-slate-400 hover:bg-[#2A2A3E]">
                    «
                  </a>
                <?php else: ?>
                  <!-- اگر در صفحه اول بودیم دکمه قبل را غیرفعال کن -->
                  <button disabled
                    class="join-item btn btn-sm bg-[#1A1A26] border-[#2A2A3E] text-slate-600 opacity-50 cursor-not-allowed">
                    «
                  </button>
                <?php endif; ?>


                <!-- تولید شماره صفحات (۱, ۲, ۳ ...) -->
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                  <?php if ($i == $page): ?>
                    <!-- صفحه فعال (رنگ آبی) -->
                    <button class="join-item btn btn-sm bg-indigo-600 border-indigo-600 text-white">
                      <?= $i ?>
                    </button>
                  <?php else: ?>
                    <!-- صفحات دیگر (رنگ تیره) -->
                    <a href="<?= getPageUrl($i) ?>"
                      class="join-item btn btn-sm bg-[#1A1A26] border-[#2A2A3E] text-slate-400 hover:bg-[#2A2A3E]">
                      <?= $i ?>
                    </a>
                  <?php endif; ?>
                <?php endfor; ?>


                <!-- دکمه صفحه بعد (») -->
                <?php if ($page < $total_pages): ?>
                  <a href="<?= getPageUrl($page + 1) ?>"
                    class="join-item btn btn-sm bg-[#1A1A26] border-[#2A2A3E] text-slate-400 hover:bg-[#2A2A3E]">
                    »
                  </a>
                <?php else: ?>
                  <!-- اگر در صفحه آخر بودیم دکمه بعد را غیرفعال کن -->
                  <button disabled
                    class="join-item btn btn-sm bg-[#1A1A26] border-[#2A2A3E] text-slate-600 opacity-50 cursor-not-allowed">
                    »
                  </button>
                <?php endif; ?>

              </div>
            </div>
          <?php endif; ?>


        <?php else: ?>
          <div class="flex-1">
            <div class="flex flex-col justify-center items-center h-full text-center p-8">
              <!-- آیکون یا ایموجی -->
              <div class="text-5xl mb-4 opacity-70">
                🔍
              </div>

              <!-- عنوان اصلی -->
              <h2 class="text-xl font-bold text-slate-200 mb-2">
                محصولی پیدا نشد!
              </h2>

              <!-- متن دوستانه و راهنما -->
              <p class="text-sm text-slate-400 max-w-sm">
                متأسفانه با فیلترهایی که انتخاب کردی، هیچ محصولی تو فروشگاه پیدا نکردیم.
                پیشنهاد می‌کنیم بعضی از فیلترها رو تغییر بدی یا محدوده قیمت رو بیشتر کنی.
              </p>
            </div>
          </div>

        <?php endif; ?>
      </div>

    </div>
  </div>
</main>
<script>
  document.addEventListener("DOMContentLoaded", function () {

    // 1. نمایش عدد لحظه‌ای رنج قیمت
    const priceFilter = document.getElementById("priceFilter");
    const priceLabel = document.getElementById("priceLabel");
    priceFilter.addEventListener("input", function () {
      priceLabel.innerText = this.value;
    });

    // 2. مدیریت منطق تیک "همه" (برای دسته‌بندی‌ها و برندها)
    function handleAllCheckboxLogic(checkboxClass) {
      const checkboxes = document.querySelectorAll(`.${checkboxClass}`);
      const allCheckbox = document.querySelector(`.${checkboxClass}[value="all"]`);

      checkboxes.forEach(cb => {
        cb.addEventListener('change', function () {
          if (this.value === 'all' && this.checked) {
            // اگر "همه" تیک خورد، بقیه تیک‌ها برداشته شود
            checkboxes.forEach(c => { if (c !== this) c.checked = false; });
          } else if (this.value !== 'all' && this.checked) {
            // اگر گزینه دیگری تیک خورد، تیک "همه" برداشته شود
            if (allCheckbox) allCheckbox.checked = false;
          }
        });
      });
    }

    handleAllCheckboxLogic('cat-filter');
    handleAllCheckboxLogic('brand-filter');

    // 3. گرفتن اطلاعات و ارسال به URL (بدون Fetch)
    document.getElementById("applyFilterBtn").addEventListener("click", function () {
      // ساختن یک شیء URL بر اساس آدرس فعلی
      const url = new URL(window.location.href);
      url.search = ''; // پاک کردن فیلترهای قبلی از آدرس

      // دریافت دسته‌های انتخاب شده (به جز همه)
      const selectedCats = Array.from(document.querySelectorAll('.cat-filter:checked'))
        .map(cb => cb.value)
        .filter(val => val !== 'all');

      if (selectedCats.length > 0) {
        url.searchParams.set('cat', selectedCats.join(',')); // خروجی مثلا: cat=ساعت,گوشی
      }

      // دریافت برندهای انتخاب شده
      const selectedBrands = Array.from(document.querySelectorAll('.brand-filter:checked'))
        .map(cb => cb.value)
        .filter(val => val !== 'all');

      if (selectedBrands.length > 0) {
        url.searchParams.set('brand', selectedBrands.join(','));
      }

      // دریافت قیمت
      if (priceFilter.value < 100) {
        url.searchParams.set('price', priceFilter.value);
      }

      // دریافت امتیاز
      const selectedRating = document.querySelector('.rating-filter:checked').value;
      if (selectedRating > 0) {
        url.searchParams.set('rating', selectedRating);
      }

      // انتقال مرورگر به لینک جدید (همان متد GET کلاسیک بدون API)
      window.location.href = url.toString();
    });



    const sortSelect = document.getElementById('sortSelect');

    if (sortSelect) {
      sortSelect.addEventListener('change', function () {
        const url = new URL(window.location.href);

        // تنظیم مرتب‌سازی جدید در آدرس
        url.searchParams.set('sort', this.value);

        // وقتی مرتب‌سازی عوض می‌شود، منطقی است که کاربر را به صفحه اول برگردانیم
        url.searchParams.set('page', 1);

        // رفرش صفحه
        window.location.href = url.toString();
      });
    }
  });
</script>
<?php include('includes/footer.php'); ?>

