# Ram Hostels - Hostel Management System

A PHP-based web application for managing hostel operations at Ram Hostels, Kolkata. Established in 1990, this system provides an online portal for prospective students to apply for accommodation and for administrators to manage hostel facilities.

## Features

### Public/User Features
- **Homepage**: Responsive landing page with animated image carousel showcasing hostel facilities
- **About Section**: Information about the hostel's history (est. 1990) and accommodation options
- **Age Verification**: Age verification modal (users must be 18+ to apply)
- **Gender Selection**: Male/Female accommodation tracking
- **Online Application**: Complete registration form with:
  - Personal details (name, father's name, mother's name, guardian's name)
  - Date of birth validation (max date: 2006-08-04)
  - Email collection
  - Agreement confirmation checkbox
- **Contact Form**: Email-based contact form in the footer
- **Dynamic Background Images**: Admin can manage images displayed in carousel

### Admin Features
- **Admin Portal** (`submit.php`): 
  - Add new images via URL
  - Delete existing images
  - Select images for the "About" section background
- **Application ID System**: Auto-incrementing application IDs starting from 24001

## Project Structure

```
├── home.php              # Main homepage with carousel, about, and contact sections
├── admin.php             # Admin portal for image management
├── submit.php            # Student registration form handler
├── user.php              # User landing page (placeholder)
├── check.html            # Age and gender selection modal
├── Male.html             # Male student registration form
├── Female.php            # Female student landing page
├── home.css              # Homepage styling
├── home.js               # Date picker validation
├── male.js               # Male-specific carousel
├── update_background.php # Background image update handler
├── image.sql             # Database schema for image management
└── man-toilet-color-icon.png / women-toilet-color-icon.png
```

## Database Configuration

### Image Database (`image`)
**Server**: localhost | **Database**: image | **User**: root | **Password**: (empty)

**Table: `images`**
| Column | Type | Description |
|--------|------|-------------|
| id | int(11) | Primary key, auto-increment |
| image_url | varchar(255) | URL of hostel images |

### Hostel Database (`hostel`)
**Server**: localhost | **Database**: hostel | **User**: root | **Password**: (empty)

**Table: `requests`**
| Column | Type | Description |
|--------|------|-------------|
| Application ID | varchar | Unique application identifier |
| Name | varchar | Applicant's full name |
| Father_name | varchar | Father's name |
| Mother_name | varchar | Mother's name |
| Gurdian_name | varchar | Guardian's name |
| DOB | date | Date of birth |
| email | varchar | Contact email |

## Prerequisites

- **Web Server**: Apache/Nginx with PHP support
- **Database**: MySQL or MariaDB
- **PHP Version**: 8.2.0 or higher
- **PHP Extensions**: MySQLi

## Installation

1. Create the databases:
   ```sql
   CREATE DATABASE image;
   CREATE DATABASE hostel;
   ```

2. Import the schema:
   ```bash
   mysql -u root -p image < image.sql
   ```

3. Configure database credentials in each PHP file:
   ```php
   $server = "localhost";
   $username = "your_username";
   $password = "your_password";
   $dbname = "your_database";
   ```

4. Place all files in your web server's document root (e.g., `htdocs` or `www`)

5. Access the application via `http://localhost/home.php`

## Usage

### For Students
1. Visit the homepage at `home.php`
2. Click "Register Now" to begin application
2. Confirm age (must be 18+)
3. Select gender ( Male / Female )
4. Fill in personal details
5. Submit application (Application ID auto-generated starting from 24001)

### For Administrators
1. Navigate to `submit.php`
2. Add new images by entering their URLs
3. Delete outdated images from the gallery
4. Select featured images for the homepage "About" section

## Design Features

- **Responsive Design**: Adapts to various screen sizes using viewport units
- **Animated Carousel**: Auto-rotating image gallery (5-second intervals)
- **Visual Effects**: 
  - Fade-in animations for images
  - Hover effects on navigation and buttons
  - Red/wheat color scheme matching hostel branding
- **Custom Fonts**: Fjalla One for UI, Dancing Script for decorative text

## Security Considerations

- SQL injection vulnerabilities exist in current implementation
- No password protection on admin portal
- Input validation should be enhanced before production use
- Consider adding CSRF protection
- Use prepared statements for database queries

## License

This project is licensed under MIT License.

---

**Note**: This is a legacy project originally developed for Ram Hostels, Kolkata. It demonstrates basic PHP-MySQL CRUD operations and frontend design patterns.