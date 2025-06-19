<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : SITE_DESCRIPTION; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo SITE_URL; ?>/assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
     <!-- Dùng trực tiếp CDN, không cần tải về -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/header.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : SITE_DESCRIPTION; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm custom-navbar">
            <div class="container-fluid px-4">
                <!-- Logo Left -->
                <a class="navbar-brand d-flex align-items-center" href="<?php echo SITE_URL; ?>">
                    <img src="<?php echo SITE_URL; ?>/assets/images/logo-vi.png" alt="<?php echo SITE_NAME; ?>" height="40" class="me-2">
                </a>
                <!-- Center Menu -->
                <div class="d-none d-lg-block">
                    <ul class="navbar-nav main-nav">
                        <li class="nav-item"><a class="nav-link <?php echo is_active_page('index.php'); ?>" href="<?php echo SITE_URL; ?>">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo is_active_page('about.php'); ?>" href="<?php echo SITE_URL; ?>/about.php">Về chúng tôi</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo is_active_page('contact.php'); ?>" href="<?php echo SITE_URL; ?>/contact.php">Liên hệ</a></li>
                    </ul>
                </div>
                <!-- Right Icons & CTA -->
                <div class="d-flex align-items-center gap-3 ms-auto">
                    <!-- Language Switcher -->
                    <a href="#" class="lang-icon" title="English"><img src="<?php echo SITE_URL; ?>/assets/images/flag/flag-en.png" alt="EN" width="20"></a>
                    <a href="#" class="lang-icon" title="Vietnamese"><img src="<?php echo SITE_URL; ?>/assets/images/flag/flag-vn.png" alt="VN" width="20"></a>
                    
                    <!-- CTA Button -->
                    <a href="<?php echo SITE_URL; ?>/contact.php" class="btn btn-primary btn-cta ms-2 d-none d-lg-inline-flex align-items-center">
                        <i class="fa fa-phone"></i> Tư vấn miễn phí
                    </a>
                </div>
                <!-- Mobile Toggle -->
                <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavMobile">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Mobile Menu -->
                <!-- <div class="collapse navbar-collapse d-lg-none" id="navbarNavMobile">
                    <ul class="navbar-nav mt-3">
                        <li class="nav-item"><a class="nav-link <?php echo is_active_page('index.php'); ?>" href="<?php echo SITE_URL; ?>">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo is_active_page('about.php'); ?>" href="<?php echo SITE_URL; ?>/about.php">Về chúng tôi</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo is_active_page('contact.php'); ?>" href="<?php echo SITE_URL; ?>/contact.php">Liên hệ</a></li>
                        <li class="nav-item mt-2">
                            <a href="<?php echo SITE_URL; ?>/contact.php" class="btn btn-primary w-100">
                                <i class="fa fa-phone"></i> Tư vấn miễn phí
                            </a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </nav>
    </header>
    
    <!-- Main Content Wrapper -->
    <main class="main-content"> 