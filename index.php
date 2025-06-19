<?php
$page_title = "Trang chủ";
$page_description = "Thiên Cơ Trí Liên - Công ty SEO hàng đầu Việt Nam, chuyên cung cấp dịch vụ tối ưu hóa website, tăng thứ hạng Google và marketing trực tuyến hiệu quả.";
require_once 'templates/header.php';
?>
<link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/home.css">
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="hero-title">Giải pháp SEO & Marketing<br>Đột phá cho doanh nghiệp</h1>
        <p class="hero-subtitle">Tối ưu website, tăng trưởng thứ hạng Google, bứt phá doanh thu với đội ngũ chuyên gia của Thiên Cơ Trí Liên</p>
        <a href="<?php echo SITE_URL; ?>/contact.php" class="hero-btn">Tư vấn miễn phí</a>
        <a href="<?php echo SITE_URL; ?>/about.php" class="hero-btn">Tìm hiểu thêm</a>
    </div>
</section>
<!-- Core Values Section -->
<section class="section">
    <div class="container">
        <div class="section-title">Giá trị cốt lõi</div>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <!-- <img src="<?php echo SITE_URL; ?>/assets/images/core-values.jpg" alt="Core Values" class="img-fluid rounded shadow"> -->
                <img src="https://seoking.vn/wp-content/uploads/2018/02/1440886164_interaction.png" alt="Core Values" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-title">Tầm nhìn</div>
                    <div class="card-text mb-3">Đưa doanh nghiệp Việt vươn tầm quốc tế bằng giải pháp SEO hiện đại, minh bạch, hiệu quả.</div>
                    <ul class="mb-3">
                        <li>Không ngừng đổi mới</li>
                        <li>Cam kết với khách hàng</li>
                        <li>Chất lượng là số 1</li>
                    </ul>
                    <a href="<?php echo SITE_URL; ?>/about.php" class="btn-yellow">Learn More</a>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-5 flex-lg-row-reverse">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <!-- <img src="<?php echo SITE_URL; ?>/assets/images/mission.jpg" alt="Mission" class="img-fluid rounded shadow"> -->
                <img src="https://tenten.vn/tin-tuc/wp-content/uploads/2022/05/Tai-sao-doanh-nghiep-can-thiet-ke-website-chuan-SEO.jpg" alt="Mission" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-title">Sứ mệnh</div>
                    <div class="card-text mb-3">Giúp doanh nghiệp tăng trưởng bền vững, tối ưu chi phí marketing, xây dựng thương hiệu mạnh trên môi trường số.</div>
                    <ul class="mb-3">
                        <li>Đồng hành cùng khách hàng</li>
                        <li>Chia sẻ tri thức</li>
                        <li>Hiệu quả thực tế</li>
                    </ul>
                    <a href="<?php echo SITE_URL; ?>/about.php" class="btn-yellow">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6 mb-4">
                <div class="stat-item">500+<div class="stat-label">Dự án thành công</div></div>
            </div>
            <div class="col-lg-3 col-6 mb-4">
                <div class="stat-item">98%<div class="stat-label">Khách hàng hài lòng</div></div>
            </div>
            <div class="col-lg-3 col-6 mb-4">
                <div class="stat-item">5+<div class="stat-label">Năm kinh nghiệm</div></div>
            </div>
            <div class="col-lg-3 col-6 mb-4">
                <div class="stat-item">24/7<div class="stat-label">Hỗ trợ khách hàng</div></div>
            </div>
        </div>
    </div>
</section>
<!-- Projects Section -->
<!-- <section class="section">
    <div class="container">
        <div class="section-title">Dự án tiêu biểu</div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img src="<?php echo SITE_URL; ?>/assets/images/project1.jpg" alt="Project 1" class="img-fluid rounded mb-3">
                    <div class="card-title">SEO Ngành Tài chính</div>
                    <div class="card-text">Tăng trưởng 300% traffic tự nhiên cho website tài chính lớn tại Việt Nam.</div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img src="<?php echo SITE_URL; ?>/assets/images/project2.jpg" alt="Project 2" class="img-fluid rounded mb-3">
                    <div class="card-title">SEO Thương mại điện tử</div>
                    <div class="card-text">Đưa 50+ từ khóa lên top 3 Google cho sàn TMĐT lớn.</div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img src="<?php echo SITE_URL; ?>/assets/images/project3.jpg" alt="Project 3" class="img-fluid rounded mb-3">
                    <div class="card-title">SEO Bất động sản</div>
                    <div class="card-text">Tăng trưởng leads và chuyển đổi cho doanh nghiệp BĐS.</div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Testimonials Section -->
<section class="section" style="background:#f8fafc;">
    <div class="container">
        <div class="section-title">Khách hàng nói gì</div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-text mb-3">"Dịch vụ SEO rất chuyên nghiệp, website của tôi tăng trưởng rõ rệt chỉ sau 3 tháng!"</div>
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <!-- <img src="<?php echo SITE_URL; ?>/assets/images/avatar1.jpg" alt="Avatar" class="rounded-circle" width="48"> -->
                        <img src="https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2020/11/20/856165/Img2904-159927756318.jpg" alt="Avatar" class="rounded-circle" width="48" heigh="48">
                        <div>
                            <div class="fw-bold">Nguyễn Văn A</div>
                            <div class="text-muted" style="font-size:0.95rem;">CEO ABC Corp</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-text mb-3">"Đội ngũ hỗ trợ tận tâm, giải pháp SEO minh bạch, hiệu quả thực tế."</div>
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <!-- <img src="<?php echo SITE_URL; ?>/assets/images/avatar2.jpg" alt="Avatar" class="rounded-circle" width="48"> -->
                        <img src="https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2020/11/20/856165/Img2904-159927756318.jpg" alt="Avatar" class="rounded-circle" width="48" heigh="48">
                        <div>
                            <div class="fw-bold">Trần Thị B</div>
                            <div class="text-muted" style="font-size:0.95rem;">Marketing Manager</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-text mb-3">"Tôi rất hài lòng với kết quả SEO, doanh thu tăng trưởng vượt mong đợi."</div>
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <!-- <img src="<?php echo SITE_URL; ?>/assets/images/avatar3.jpg" alt="Avatar" class="rounded-circle" width="48"> -->
                        <img src="https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2020/11/20/856165/Img2904-159927756318.jpg" alt="Avatar" class="rounded-circle" width="48" heigh="48">
                        <div>
                            <div class="fw-bold">Lê Văn C</div>
                            <div class="text-muted" style="font-size:0.95rem;">Founder Startup X</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section -->
<section class="section">
    <div class="container">
        <div class="section-title">Đội ngũ chuyên gia</div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card text-center">
                    <img src="<?php echo SITE_URL; ?>/assets/images/staff/team1.jpg" alt="Team 1" class="img-fluid team rounded-circle mb-3" width="96" height="96">
                    <div class="fw-bold">Nguyễn Văn A</div>
                    <div class="text-muted mb-2">SEO Leader</div>
                    <div>
                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card text-center">
                    <img src="<?php echo SITE_URL; ?>/assets/images/staff/team2.jpg" alt="Team 2" class="img-fluid team rounded-circle mb-3" width="96" height="96">
                    <div class="fw-bold">Trần Thị B</div>
                    <div class="text-muted mb-2">Content Manager</div>
                    <div>
                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card text-center">
                    <img src="<?php echo SITE_URL; ?>/assets/images/staff/team3.jpg" alt="Team 3" class="img-fluid team rounded-circle mb-3" width="96" height="96">
                    <div class="fw-bold">Lê Văn C</div>
                    <div class="text-muted mb-2">Technical SEO</div>
                    <div>
                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card text-center">
                    <img src="<?php echo SITE_URL; ?>/assets/images/staff/team4.jpg" alt="Team 4" class="img-fluid team rounded-circle mb-3" width="96" height="96">
                    <div class="fw-bold">Phạm Minh D</div>
                    <div class="text-muted mb-2">Ads Specialist</div>
                    <div>
                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once 'templates/footer.php'; ?> 