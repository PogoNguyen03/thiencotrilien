</main>

<!-- Footer -->
<footer class="footer bg-dark text-light py-5">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/footer.css">
    <div class="container">
        <div class="row">
            <!-- Company Info -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="footer-section">
                    <h5 class="text-white mb-3">
                        <img src="<?php echo SITE_URL; ?>/assets/images/logo-vi-white.png" alt="<?php echo SITE_NAME; ?>"
                            height="30" class="me-2">
                        <?php echo SITE_NAME; ?>
                    </h5>
                    <p class="text-muted mb-3">
                        Công ty SEO hàng đầu Việt Nam, chuyên cung cấp dịch vụ tối ưu hóa website,
                        tăng thứ hạng Google và marketing trực tuyến hiệu quả.
                    </p>
                    <div class="social-links">
                        <a href="#" class="text-muted me-3"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-muted me-3"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-muted me-3"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a href="#" class="text-muted me-3"><i class="fa fa-youtube fa-lg"></i></a>
                        <a href="#" class="text-muted"><i class="fa fa-instagram fa-lg"></i></a>
                    </div>
                </div>
            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="footer-section">
                    <h6 class="text-white mb-3">Dịch vụ</h6>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo SITE_URL; ?>/services.php#seo"
                                class="text-muted text-decoration-none">SEO Onpage</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/services.php#offpage"
                                class="text-muted text-decoration-none">SEO Offpage</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/services.php#content"
                                class="text-muted text-decoration-none">Content Marketing</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/services.php#ads"
                                class="text-muted text-decoration-none">Google Ads</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/services.php#social"
                                class="text-muted text-decoration-none">Social Media</a></li>
                    </ul>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="footer-section">
                    <h6 class="text-white mb-3">Liên kết</h6>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo SITE_URL; ?>/about.php" class="text-muted text-decoration-none">Giới
                                thiệu</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/portfolio.php" class="text-muted text-decoration-none">Dự
                                án</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/blog.php" class="text-muted text-decoration-none">Blog</a>
                        </li>
                        <li><a href="<?php echo SITE_URL; ?>/contact.php" class="text-muted text-decoration-none">Liên
                                hệ</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/privacy.php" class="text-muted text-decoration-none">Chính
                                sách</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="footer-section">
                    <h6 class="text-white mb-3">Liên hệ</h6>
                    <div class="contact-info">
                        <div class="d-flex mb-2">
                            <i class="fa fa-map-marker text-primary me-2 mt-1"></i>
                            <span class="text-muted">123 Đường ABC, Quận 1, TP.HCM</span>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="fa fa-phone text-primary me-2 mt-1"></i>
                            <span class="text-muted"><?php echo SITE_PHONE; ?></span>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="fa fa-envelope text-primary me-2 mt-1"></i>
                            <span class="text-muted"><?php echo SITE_EMAIL; ?></span>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="fa fa-clock-o text-primary me-2 mt-1"></i>
                            <span class="text-muted">Thứ 2 - Thứ 6: 8:00 - 18:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="newsletter-section text-center">
                    <h6 class="text-white mb-3">Đăng ký nhận tin tức SEO</h6>
                    <form class="newsletter-form d-flex justify-content-center">
                        <input type="email" class="form-control me-2" placeholder="Nhập email của bạn"
                            style="max-width: 300px;">
                        <button type="submit" class="btn btn-primary">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row mt-4">
            <div class="col-12">
                <hr class="bg-secondary">
                <div class="text-center text-muted copyright">
                    <small>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Tất cả quyền được bảo lưu.</small>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button id="backToTop" class="btn btn-primary position-fixed" style="bottom: 20px; right: 20px; display: none;">
    <i class="fa fa-arrow-up"></i>
</button>

<!-- JavaScript Files -->
<script src="<?php echo SITE_URL; ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>

<!-- Custom Scripts -->
<script>
    // Back to top functionality
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#backToTop').fadeIn();
        } else {
            $('#backToTop').fadeOut();
        }
    });

    $('#backToTop').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function (event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
</script>
</body>

</html>