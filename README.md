# Thiên Cơ Trí Liên SEO - Website

Website giới thiệu công ty SEO "Thiên Cơ Trí Liên" với thiết kế hiện đại, responsive và tối ưu SEO.

## 🚀 Tính Năng

- **Thiết kế hiện đại**: Dựa trên theme Gutenify Exosphere với màu sắc chuyên nghiệp
- **Responsive**: Tương thích với mọi thiết bị (desktop, tablet, mobile)
- **Tối ưu SEO**: Cấu trúc HTML semantic, meta tags đầy đủ
- **Hiệu ứng mượt mà**: Animation và transition đẹp mắt
- **Form liên hệ**: Validation và xử lý form chuyên nghiệp
- **Tốc độ tải nhanh**: Tối ưu hóa CSS, JS và hình ảnh

## 📁 Cấu Trúc Thư Mục

```
/assets/           # Tài nguyên tĩnh
├── /css/         # Stylesheet
├── /js/          # JavaScript
└── /images/      # Hình ảnh
/includes/         # File include PHP
/modules/          # Các module chức năng
/templates/        # Template header, footer
/admin/           # Khu vực quản trị
/uploads/         # File upload
config.php        # Cấu hình chính
index.php         # Trang chủ
about.php         # Trang giới thiệu
contact.php       # Trang liên hệ
README.md         # Hướng dẫn sử dụng
```

## 🛠️ Cài Đặt

### Yêu Cầu Hệ Thống

- PHP 7.4 trở lên
- MySQL 5.7 trở lên
- Web server (Apache/Nginx)
- Laragon/XAMPP/WAMP

### Bước 1: Cài Đặt Cơ Sở Dữ Liệu

1. Tạo database mới tên `thiencotrilien_seo`
2. Import file SQL (nếu có) hoặc tạo bảng cần thiết

### Bước 2: Cấu Hình

1. Mở file `config.php`
2. Cập nhật thông tin database:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'thiencotrilien_seo');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   ```
3. Cập nhật thông tin website:
   ```php
   define('SITE_URL', 'http://localhost/webcty');
   define('SITE_EMAIL', 'info@thiencotrilien.com');
   define('SITE_PHONE', '0909.123.456');
   ```

### Bước 3: Cài Đặt Dependencies

1. Tải Bootstrap CSS/JS:
   ```bash
   # Tải Bootstrap 5
   wget https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css -O assets/css/bootstrap.min.css
   wget https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js -O assets/js/bootstrap.bundle.min.js
   ```

2. Tải Font Awesome:
   ```bash
   # Tải Font Awesome 4.7
   wget https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css -O /assets/css/font-awesome.min.css
   ```

3. Tải jQuery:
   ```bash
   # Tải jQuery 3.6
   wget https://code.jquery.com/jquery-3.6.0.min.js -O /assets/js/jquery.min.js
   ```

### Bước 4: Cấu Hình Web Server

#### Apache (.htaccess)
Tạo file `.htaccess` trong thư mục :
```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [QSA,L]

# Bảo mật
<Files "config.php">
    Order allow,deny
    Deny from all
</Files>
```

#### Nginx
Thêm vào cấu hình nginx:
```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

## 🎨 Tùy Chỉnh

### Thay Đổi Màu Sắc

Mở file `/assets/css/style.css` và cập nhật CSS variables:
```css
:root {
    --primary-color: #1e40af;      /* Màu chính */
    --secondary-color: #059669;    /* Màu phụ */
    --accent-color: #f59e0b;       /* Màu nhấn */
}
```

### Thay Đổi Logo

1. Thay thế file `/assets/images/logo.png`
2. Cập nhật đường dẫn trong `templates/header.php`

### Thêm Trang Mới

1. Tạo file PHP mới (ví dụ: `services.php`)
2. Thêm vào navigation menu trong `templates/header.php`
3. Tạo template tương ứng

## 📱 Responsive Design

Website được thiết kế responsive với các breakpoint:
- **Desktop**: 1200px+
- **Tablet**: 768px - 1199px
- **Mobile**: < 768px

## 🔧 Tính Năng JavaScript

- **Navbar scroll effect**: Thay đổi style khi scroll
- **Smooth scrolling**: Cuộn mượt cho anchor links
- **Form validation**: Kiểm tra form client-side
- **Counter animation**: Hiệu ứng đếm số
- **Back to top**: Nút quay về đầu trang
- **Mobile menu**: Menu responsive cho mobile

## 📊 SEO Optimization

- **Meta tags**: Title, description, keywords
- **Open Graph**: Social media sharing
- **Structured data**: Schema markup
- **Sitemap**: XML sitemap
- **Robots.txt**: Hướng dẫn crawler

## 🚀 Performance

- **CSS minification**: Tối ưu file CSS
- **JS minification**: Tối ưu file JavaScript
- **Image optimization**: Nén hình ảnh
- **Lazy loading**: Tải hình ảnh theo nhu cầu
- **Caching**: Cache static files

## 🔒 Bảo Mật

- **SQL Injection**: Sử dụng PDO prepared statements
- **XSS Protection**: Escape output
- **CSRF Protection**: Token validation
- **File upload**: Validate file types
- **HTTPS**: SSL certificate

## 📞 Hỗ Trợ

Nếu có vấn đề hoặc cần hỗ trợ, vui lòng liên hệ:
- **Email**: info@thiencotrilien.com
- **Phone**: 0909.123.456
- **Website**: https://thiencotrilien.com

## 📄 License

Dự án này được phát triển cho Thiên Cơ Trí Liên SEO. Mọi quyền được bảo lưu.

---

**Thiên Cơ Trí Liên SEO** - Đối tác tin cậy trong hành trình tối ưu hóa website và tăng thứ hạng Google. 