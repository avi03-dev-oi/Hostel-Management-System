<div align="center">

  # 🏨 Hostel Management System

  <a href="#">
    <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Version">
  </a>
  <a href="#">
    <img src="https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL Version">
  </a>
  <a href="#">
    <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5">
  </a>
  <a href="#">
    <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3">
  </a>
  <a href="#">
    <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
  </a>
  <a href="#">
    <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
  </a>

  ### A Complete Web-Based Solution for Managing Hostel Operations

  <img src="https://capsule-render.vercel.app/api?type=waving&color=gradient&height=250&section=header&text=Hostel+Management&fontSize=80&animation=fadeIn&fontAlignY=35" alt="Header Banner"/>

</div>

---

## 📋 Table of Contents

- [About The Project](#-about-the-project)
- [✨ Key Features](#-key-features)
- [🛠️ Technology Stack](#️-technology-stack)
- [📁 Project Structure](#-project-structure)
- [⚙️ Database Schema](#️-database-schema)
- [🚀 Getting Started](#-getting-started)
- [💻 Usage Guide](#-usage-guide)
- [🎨 Design & UI](#-design--ui)
- [🔐 Security](#-security)
- [📝 License](#-license)
- [🤝 Contributing](#-contributing)
- [📧 Contact](#-contact)

---

## 📖 About The Project

<div align="center">
  <img src="https://via.placeholder.com/800x400/1a1a2e/ffffff?text=Hostel+Management+System" alt="Project Screenshot" width="100%" style="border-radius: 10px; margin: 20px 0;">
</div>

**Hostel Management System** is a comprehensive **PHP-based web application** designed to streamline hostel management operations. This system provides a complete solution for managing student accommodations, applications, and facilities.

This management system provides:

- 🎯 **Online Portal** for prospective students to apply for accommodation
- 👨‍💼 **Admin Dashboard** for managing hostel facilities and content
- 📊 **Application Tracking** with unique auto-generated IDs
- 🎨 **Dynamic Content** management for hostel images and galleries

> **Note:** This project demonstrates fundamental PHP-MySQL CRUD operations and modern frontend design patterns suitable for educational purposes and small-scale hostel management.

---

## ✨ Key Features

### 👥 Student/Visitor Features

| Feature | Description |
|---------|-------------|
| 🏠 **Responsive Homepage** | Beautiful landing page with animated image carousel showcasing hostel facilities |
| 📜 **About Section** | Detailed information about the hostel's accommodation options |
| ✅ **Age Verification** | Smart modal ensuring users are 18+ before applying |
| 🚻 **Gender Tracking** | Separate accommodation options for Male/Female students |
| 📝 **Online Application** | Complete registration form with comprehensive fields |
| 📧 **Contact Form** | Functional email-based contact system in footer |
| 🖼️ **Dynamic Gallery** | Auto-rotating image carousel managed by admin |

### 👨‍💼 Admin Features

| Feature | Description |
|---------|-------------|
| 🖼️ **Image Management** | Add/delete images via URL in the admin portal |
| 🎨 **Background Control** | Select featured images for homepage "About" section |
| 🆔 **Application IDs** | Auto-incrementing system starting from **24001** |
| 📊 **Application Tracking** | View and manage student applications |

---

## 🛠️ Technology Stack

<div align="center">

| Category | Technology |
|----------|------------|
| **Backend** | ![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php) |
| **Database** | ![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat-square&logo=mysql) |
| **Frontend** | ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat-square&logo=html5) |
| **Styling** | ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat-square&logo=css3) |
| **Scripting** | ![JavaScript](https://img.shields.io/badge/JavaScript-ES6+-F7DF1E?style=flat-square&logo=javascript) |
| **Web Server** | Apache / Nginx |
| **PHP Extensions** | MySQLi |

</div>

---

## 📁 Project Structure

```
hostelmanagement/
├── 📄 home.php              # Main homepage with carousel, about & contact sections
├── 📄 admin.php             # Admin portal for image management
├── 📄 submit.php            # Student registration form handler
├── 📄 user.php              # User landing page (placeholder)
├── 📄 check.html            # Age and gender selection modal
├── 📄 Male.html             # Male student registration form
├── 📄 Female.php            # Female student landing page
├── 🎨 home.css              # Complete homepage styling
├── 📜 home.js               # Date picker validation & carousel logic
├── 📜 male.js               # Male-specific carousel functionality
├── ⚙️ update_background.php # Background image update handler
├── 🗄️ image.sql             # Database schema for image management
├── 🖼️ man-toilet-color-icon.png    # Male facility icon
└── 🖼️ women-toilet-color-icon.png  # Female facility icon
```

---

## ⚙️ Database Schema

### 📊 Image Database (`image`)

**Server:** `localhost` | **User:** `root` | **Password:** *(empty)*

#### Table: `images`

| Column | Type | Constraints | Description |
|--------|------|-------------|-------------|
| `id` | INT(11) | PRIMARY KEY, AUTO_INCREMENT | Unique image identifier |
| `image_url` | VARCHAR(255) | NOT NULL | URL of hostel image |

### 🏨 Hostel Database (`hostel`)

**Server:** `localhost` | **User:** `root` | **Password:** *(empty)*

#### Table: `requests`

| Column | Type | Constraints | Description |
|--------|------|-------------|-------------|
| `Application ID` | VARCHAR(20) | PRIMARY KEY | Unique application identifier (e.g., 24001) |
| `Name` | VARCHAR(100) | NOT NULL | Applicant's full name |
| `Father_name` | VARCHAR(100) | NOT NULL | Father's name |
| `Mother_name` | VARCHAR(100) | NOT NULL | Mother's name |
| `Guardian_name` | VARCHAR(100) | NOT NULL | Guardian's name |
| `DOB` | DATE | NOT NULL | Date of birth |
| `email` | VARCHAR(100) | NOT NULL, UNIQUE | Contact email address |

---

## 🚀 Getting Started

### Prerequisites

Before you begin, ensure you have the following installed:

- ✅ **Web Server:** Apache/Nginx with PHP support
- ✅ **Database:** MySQL or MariaDB
- ✅ **PHP Version:** 8.2.0 or higher
- ✅ **PHP Extensions:** MySQLi enabled

### Installation Steps

#### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/hostelmanagement.git
cd hostelmanagement
```

#### 2. Set Up Databases

```sql
-- Create the image database
CREATE DATABASE image;
CREATE DATABASE hostel;
```

#### 3. Import Database Schemas

```bash
# Import image database schema
mysql -u root -p image < image.sql

# Note: Create the requests table in hostel database manually
-- SQL for requests table:
CREATE TABLE requests (
    `Application ID` VARCHAR(20) PRIMARY KEY,
    `Name` VARCHAR(100) NOT NULL,
    `Father_name` VARCHAR(100) NOT NULL,
    `Mother_name` VARCHAR(100) NOT NULL,
    `Guardian_name` VARCHAR(100) NOT NULL,
    `DOB` DATE NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE
);
```

#### 4. Configure Database Connection

Edit the database configuration in each PHP file:

```php
<?php
$server = "localhost";
$username = "root";      // Your MySQL username
$password = "";          // Your MySQL password
$dbname = "your_database";
?>
```

#### 5. Deploy to Web Server

Place all files in your web server's document root:

```bash
# For XAMPP (Windows)
cp -r * C:\xampp\htdocs\hostelmanagement\

# For XAMPP (Linux/Mac)
sudo cp -r * /opt/lampp/htdocs/hostelmanagement/

# For Nginx
sudo cp -r * /var/www/html/hostelmanagement/
```

#### 6. Access the Application

Open your browser and navigate to:

```
http://localhost/home.php
```

---

## 💻 Usage Guide

### 📝 For Students

```
1. Visit the homepage at http://localhost/home.php
2. Click "Register Now" to begin your application
3. ✅ Confirm your age (must be 18+)
4. 🚻 Select your gender (Male/Female)
5. 📝 Fill in all required personal details
6. 📧 Provide a valid email address
7. ☑️ Agree to the terms and conditions
8. ✅ Submit your application
   └── You'll receive a unique Application ID (starting from 24001)
```

### 👨‍💼 For Administrators

```
1. Navigate to http://localhost/submit.php
2. 📤 Add new images by entering their URLs
3. 🗑️ Delete outdated images from the gallery
4. 🎨 Select featured images for the homepage "About" section
5. 💾 Changes are saved automatically
```

---

## 🎨 Design & UI

### Visual Features

| Feature | Description |
|---------|-------------|
| 📱 **Responsive Design** | Fluid layout adapting to all screen sizes |
| 🎠 **Animated Carousel** | Auto-rotating gallery (5-second intervals) |
| ✨ **Visual Effects** | Smooth fade-in animations & hover effects |
| 🎨 **Color Scheme** | Elegant red/wheat palette matching hostel branding |
| 🔤 **Typography** | Fjalla One for UI, Dancing Script for decorative text |

### UI Components

- **Navigation Bar:** Fixed header with smooth scroll
- **Image Carousel:** Automatic rotation with manual controls
- **Modals:** Age verification and registration popups
- **Forms:** Clean, accessible input fields with validation
- **Footer:** Contact information and quick links

---

## 🔐 Security

> ⚠️ **Important Security Notes for Production Use:**

The current implementation is designed for educational purposes. Before deploying to production, consider implementing:

| Security Measure | Description |
|-----------------|-------------|
| 🔒 **Prepared Statements** | Replace all SQL queries with prepared statements to prevent SQL injection |
| 🔑 **Password Protection** | Add authentication for the admin portal |
| 🛡️ **CSRF Protection** | Implement anti-CSRF tokens for forms |
| ✅ **Input Validation** | Enhance server-side validation for all inputs |
| 🔐 **Session Management** | Implement secure session handling |
| 🌐 **HTTPS** | Enable SSL/TLS for encrypted connections |

---

## 📝 License

This project is licensed under the **MIT License** - see the [LICENSE](LICENSE) file for details.

```
MIT License

Copyright (c) 2025 Hostel Management System

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

---

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. **Fork** the repository
2. Create your feature branch: `git checkout -b feature/AmazingFeature`
3. **Commit** your changes: `git commit -m 'Add some AmazingFeature'`
4. **Push** to the branch: `git push origin feature/AmazingFeature`
5. Open a **Pull Request**

---

## 📧 Contact

<div align="center">

### Hostel Management System

---

For questions about this project, please open an issue or contact the repository maintainer.

---

<img src="https://capsule-render.vercel.app/api?type=waving&color=gradient&height=100&section=footer" alt="Footer Banner"/>

</div>