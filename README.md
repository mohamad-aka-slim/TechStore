# تک‌استور (TechStore)

An online electronics store e-commerce website built with **HTML, CSS (Tailwind CSS + DaisyUI), and vanilla JavaScript**. No framework, no build tools — pure static files.

## Pages

| File | Page | Description |
|------|------|-------------|
| `index.php` | Home | Landing page with hero section, categories strip, featured products, and promo banner |
| `shop.php` | Shop | Product listing with sidebar filters (category, brand, price, rating) and pagination |
| `product.php` | Product Detail | Single product view with image variants, specs, reviews, add-to-cart, and quick buy |
| `category.php` | Categories | Browse product categories (phones, watches, smart home) and subcategories |
| `about.php` | About Us | Company information, team, stats, and values |
| `contact.php` | Contact | Contact form with phone, email, address info and a message form |
| `login.php` | Login | User login with social login buttons and email/password form |
| `register.php` | Register | New account creation form with personal details |
| `cart.php` | Shopping Cart | Cart items with quantity controls, delete function, coupon, and order summary |
| `checkout.php` | Checkout | Multi-step checkout with shipping info, delivery method, payment, and order review |
| `dashboard.php` | Dashboard | User account dashboard with overview stats, order history, wishlist, addresses, and profile settings |

## Technologies Used

- **HTML5** — Semantic page structure
- **Tailwind CSS** — Utility-first CSS framework (via CDN)
- **DaisyUI** — Component library for Tailwind (via CDN)
- **Lucide Icons** — Icon library (via CDN)
- **Anime.js** — Animation library for micro-interactions (via CDN)
- **Vazirmatn Font** — Persian/Arabic font (via Google Fonts)

## Features

- RTL (right-to-left) layout for Persian language
- Dark theme with glassmorphism design
- Responsive layout (mobile, tablet, desktop)
- Client-side page navigation (no server routing)
- Toast notifications for user actions
- Floating orb animations on the home page hero
- Product card hover effects with shadow transitions
- Cart management: add, delete items, update quantities
- Dynamic cart summary with tax calculation
- Empty cart state with redirect option
- Dashboard tabs (overview, orders, wishlist, addresses, profile)
- Sticky header with mobile hamburger menu
- Gradient text effects and glow shadows

## How to Run

1. Clone or download this repository
2. Open any `.php` file in a browser (no server needed)

```
file:///C:/Users/you/path/to/techNeon/index.php
```

All pages link to each other via standard `<a href="...">` — no JavaScript redirect required.

## Project Structure

```
techNeon/
├── index.php       (Home)
├── shop.php        (Shop / Product listing)
├── product.php     (Product detail)
├── category.php    (Categories)
├── about.php       (About us)
├── contact.php     (Contact)
├── login.php       (Login)
├── register.php    (Register)
├── cart.php        (Shopping cart)
├── checkout.php    (Checkout)
├── dashboard.php   (User dashboard)
└── README.md
```

## Design Choices

- Each page is a standalone HTML file — no single-page app (SPA) routing
- No `navigate()` function or client-side page switching — all navigation is native `<a>` links
- Shared styles are duplicated in each file (no build step or templates)
- All icons are loaded via Lucide CDN and initialized on `DOMContentLoaded`
- Toast notifications use CSS transitions + `setTimeout`
