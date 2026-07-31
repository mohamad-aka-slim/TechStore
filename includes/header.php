<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>تک‌استور | فروشگاه هوشمند</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Tailwind + DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

    <!-- Anime.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ["Vazirmatn", "sans-serif"] },
                    colors: {
                        base: "#0A0A0F",
                        surface: "#12121A",
                        card: "#1A1A26",
                        border: "#2A2A3E",
                        accent: "#6366f1",
                        "accent-light": "#818cf8",
                    },
                },
            },
        };
    </script>
    <link rel="stylesheet" href="/assets/css/main.css">

</head>

<body class="min-h-screen">
    <!-- ===== TOAST ===== -->
   <div id="toast-container" class="fixed bottom-5 right-5 flex flex-col-reverse gap-3 z-50 max-w-sm w-full "></div>

    <header class="sticky top-0 z-50 glass-card border-b border-[#2A2A3E]">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center gap-2 cursor-pointer">
                    <a href="index.php">
                        <div class="w-9 h-9 rounded-xl bg-indigo-600 flex items-center justify-center glow-sm">
                            <i data-lucide="cpu" class="w-5 h-5 text-white"></i>
                        </div>
                        <span class="text-xl font-bold gradient-text">تک‌استور</span>
                    </a>
                </div>

                <!-- Desktop Nav -->
                <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-slate-400">
                    <a href="index.php" class="nav-link active">خانه</a>
                    <a href="shop.php" class="nav-link">فروشگاه</a>
                    <a href="category.php" class="nav-link">دسته‌بندی</a>
                    <a href="about.php" class="nav-link">درباره ما</a>
                    <a href="contact.php" class="nav-link">تماس</a>
                </nav>

                <!-- Actions -->
                <div class="flex items-center gap-3">
                    <!-- Search -->
                    <a href="shop.php" class="btn btn-ghost btn-circle btn-sm text-slate-400 hover:text-indigo-400">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </a>
                    <?php if (false): ?>



                        <!-- Cart -->
                        <a href="cart.php"
                            class="btn btn-ghost btn-circle btn-sm text-slate-400 hover:text-indigo-400 relative">
                            <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                            <span id="cart-badge"
                                class="absolute -top-1 -left-1 w-5 h-5 bg-indigo-600 rounded-full text-xs flex items-center justify-center text-white badge-pulse">3</span>
                        </a>


                    <?php else: ?>
                        <a href="login.php" class="btn btn-ghost btn-circle btn-sm text-slate-400 hover:text-indigo-400">
                            <i data-lucide="user" class="w-5 h-5"></i>
                        </a>
                    <?php endif; ?>
                    <!-- Mobile menu -->
                    <button class="btn btn-ghost btn-circle btn-sm text-slate-400 md:hidden"
                        onclick="toggleMobileMenu()">
                        <i data-lucide="menu" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-[#2A2A3E] px-4 py-3 space-y-2">
            <a href="index.php" class="block py-2 text-sm text-slate-400 hover:text-indigo-400"
                onclick="toggleMobileMenu()">خانه</a>
            <a href="shop.php" class="block py-2 text-sm text-slate-400 hover:text-indigo-400"
                onclick="toggleMobileMenu()">فروشگاه</a>
            <a href="category.php" class="block py-2 text-sm text-slate-400 hover:text-indigo-400"
                onclick="toggleMobileMenu()">دسته‌بندی</a>
            <a href="about.php" class="block py-2 text-sm text-slate-400 hover:text-indigo-400"
                onclick="toggleMobileMenu()">درباره ما</a>
            <a href="contact.php" class="block py-2 text-sm text-slate-400 hover:text-indigo-400"
                onclick="toggleMobileMenu()">تماس</a>
        </div>
    </header>
