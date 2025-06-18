<?php
/**
 * Cấu hình chính cho website Thiên Cơ Trí Liên SEO
 */

// Cấu hình cơ sở dữ liệu
define('DB_HOST', 'localhost');
define('DB_NAME', 'thiencotrilien_seo');
define('DB_USER', 'root');
define('DB_PASS', '');

// Cấu hình website
define('SITE_NAME', 'Thiên Cơ Trí Liên');
define('SITE_DESCRIPTION', 'Công ty SEO hàng đầu Việt Nam - Tối ưu hóa website, tăng thứ hạng Google');
define('SITE_URL', 'http://localhost/webcty');
define('SITE_EMAIL', 'info@thiencotrilien.com');
define('SITE_PHONE', '0909.123.456');

// Cấu hình đường dẫn
define('ROOT_PATH', dirname(__FILE__));
define('ASSETS_PATH', ROOT_PATH . '/assets');
define('INCLUDES_PATH', ROOT_PATH . '/includes');
define('MODULES_PATH', ROOT_PATH . '/modules');
define('TEMPLATES_PATH', ROOT_PATH . '/templates');
define('UPLOADS_PATH', ROOT_PATH . '/uploads');

// Cấu hình thời gian
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Cấu hình session
session_start();

// Kết nối cơ sở dữ liệu
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
}

// Hàm helper
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function redirect($url) {
    header("Location: " . $url);
    exit();
}

function is_active_page($page) {
    $current_page = basename($_SERVER['PHP_SELF']);
    return ($current_page == $page) ? 'active' : '';
}
?> 