# 🛒 E-Commerce Platform with Admin Dashboard (Native PHP)

A comprehensive, full-stack E-Commerce web application built from scratch using **Native PHP (Procedural)** and **MySQL**. This project demonstrates core backend engineering concepts, complete database management, and safe data handling without relying on modern frameworks, showcases a solid understanding of vanilla PHP fundamentals.

---

## 🌟 Key Capabilities & Features

### 👤 Customer-Facing Storefront
* **Product Catalog:** Dynamic browsing of products fetched directly from the database with clean category filtering.
* **Product Details:** Single product view fetching specific item data using secure ID queries (`single-product-details.php`).
* **Shopping Cart & Checkout:** End-to-end shopping simulation allowing users to review selected items and proceed to the checkout interface.

### 💼 Admin Dashboard (`/admin`)
* **Full CRUD Operations:** Complete management system for store managers to **Create, Read, Update, and Delete** products dynamically.
* **Product Image Management:** File handling system that handles product image uploads, updating paths securely in the database, and replacing old images (`up.php`, `update.php`).
* **Modular Code Architecture:** Structured layout separation using a structural components pattern (`cut/header.php`, `cut/arrivals_area.php`) for reusable UI parts.

---

## 🛠️ Technical Stack

* **Backend Logic:** Native PHP (Procedural scripting)
* **Database Management:** MySQL (via phpMyAdmin)
* **Frontend Interfaces:** HTML5, CSS3, JavaScript, Bootstrap, SCSS / SASS
* **Security & Form Validation:** Structured server-side scripts (`val.php`) for inputs sanitation.

---

## 📁 Repository Structure Highlights

* `/admin` - Contains all admin panel logic (Product entry, deletions, and edits).
* `/cut` - Modular code components (Headers, specialized sections) included across views.
* `/css` & `/scss` - Compiled layouts and stylesheets for responsive UI design.
* `index.php` - The main user-facing homepage displaying dynamic catalog items.

---

## ⚙️ Local Setup Instructions

1. **Clone the project repository:**
   ```bash
   git clone [https://github.com/zeinak112/ecommerce-native-php.git](https://github.com/zeinak112/ecommerce-native-php.git)
