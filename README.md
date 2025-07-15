# niche programmer 🌐

This is a simple WordPress website built to provide information and articles about various programming languages. The website includes essential pages like Home, About Us, Contact Us, and Blog.

## 🌟 Features

- **Home Page**: Introduction to the website and featured articles.
- **About Us Page**: Overview of the site's purpose and the people behind it.
- **Contact Us Page**: Contact form for visitors to get in touch.
- **Blog Page**: Posts related to programming languages including tutorials, comparisons, and tips.

## 🛠️ Technologies Used

- **WordPress CMS**
- **PHP & MySQL (via XAMPP for local development)**
- **HTML/CSS**
- Optional: **Custom Theme** or **Free Theme like Astra or Neve**
- Optional: Plugins like:
  - **Contact Form 7** (for contact page)
  - **Yoast SEO** (for optimization)
  - **Elementor** or **Gutenberg** (for page building)

## 🖥️ How to Run Locally (Using XAMPP)

1. **Start Apache and MySQL** in XAMPP Control Panel.
2. Place the WordPress folder inside `htdocs/` (e.g., `C:/xampp/htdocs/programming-site`).
3. Access the site at: `http://localhost/programming-site/`
4. Import the WordPress database using **phpMyAdmin** and configure the `wp-config.php` file accordingly.

## 📁 Folder Structure
programming-site/

├── wp-content/

│ ├── themes/

│ └── plugins/

├── wp-admin/

├── wp-includes/

├── index.php

└── wp-config.php

## 🧠 Topic Coverage

The blog will include content such as:

- Basics of Programming Languages (Python, Java, C++, etc.)
- Comparing Languages
- Best Practices
- Career Tips in Programming

## 📬 Contact

Feel free to reach out via the [Contact Us](http://localhost/programming-site/contact-us) page on the website or via email.

---

### 📦 Deployment

For deployment on a live server:

- Export database from phpMyAdmin.
- Upload all files to cPanel/hosting via FTP or File Manager.
- Import database and configure domain + `wp-config.php`.

---

## 📃 License

This project is for educational purposes only. You are free to modify and expand upon it.

