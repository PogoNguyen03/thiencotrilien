<?php
$page_title = "Liên hệ";
$page_description = "Liên hệ với Thiên Cơ Trí Liên để được tư vấn SEO miễn phí. Chúng tôi sẵn sàng hỗ trợ doanh nghiệp của bạn tăng thứ hạng Google.";
require_once 'templates/header.php';
?>

<!-- Page Header -->
<section class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-3">Liên Hệ</h1>
                <p class="lead mb-0">Hãy để chúng tôi giúp doanh nghiệp của bạn tăng thứ hạng Google</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section m-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form">
                    <h3 class="mb-5">Gửi Tin Nhắn Cho Chúng Tôi</h3>
                    <p class="text-muted mb-4">Điền thông tin bên dưới để được tư vấn SEO miễn phí và nhận báo giá chi tiết</p>
                    
                    <form id="contactForm" method="POST" action="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="fullName" class="form-label">Họ và tên *</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" required>
                                <div class="invalid-feedback">
                                    Vui lòng nhập họ và tên
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Số điện thoại *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                                <div class="invalid-feedback">
                                    Vui lòng nhập số điện thoại
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">
                                    Vui lòng nhập email hợp lệ
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="company" class="form-label">Tên công ty</label>
                                <input type="text" class="form-control" id="company" name="company">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="website" class="form-label">Website hiện tại</label>
                            <input type="url" class="form-control" id="website" name="website" placeholder="https://example.com">
                        </div>
                        
                        <div class="mb-3">
                            <label for="service" class="form-label">Dịch vụ quan tâm *</label>
                            <select class="form-select" id="service" name="service" required>
                                <option value="">Chọn dịch vụ</option>
                                <option value="seo-onpage">SEO Onpage</option>
                                <option value="seo-offpage">SEO Offpage</option>
                                <option value="content-marketing">Content Marketing</option>
                                <option value="google-ads">Google Ads</option>
                                <option value="local-seo">Local SEO</option>
                                <option value="seo-audit">SEO Audit</option>
                                <option value="full-package">Gói SEO tổng thể</option>
                            </select>
                            <div class="invalid-feedback">
                                Vui lòng chọn dịch vụ
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="budget" class="form-label">Ngân sách dự kiến</label>
                            <select class="form-select" id="budget" name="budget">
                                <option value="">Chọn ngân sách</option>
                                <option value="under-5m">Dưới 5 triệu</option>
                                <option value="5m-10m">5 - 10 triệu</option>
                                <option value="10m-20m">10 - 20 triệu</option>
                                <option value="20m-50m">20 - 50 triệu</option>
                                <option value="over-50m">Trên 50 triệu</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="form-label">Nội dung tin nhắn *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Mô tả chi tiết về dự án và yêu cầu của bạn..."></textarea>
                            <div class="invalid-feedback">
                                Vui lòng nhập nội dung tin nhắn
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="agree" name="agree" required>
                                <label class="form-check-label" for="agree">
                                    Tôi đồng ý với <a href="#" class="text-primary">chính sách bảo mật</a> và <a href="#" class="text-primary">điều khoản sử dụng</a> *
                                </label>
                                <div class="invalid-feedback">
                                    Bạn phải đồng ý với điều khoản
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fa fa-paper-plane"></i> Gửi tin nhắn
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="contact-info-page">
                    <h3 class="mb-4">Thông Tin Liên Hệ</h3>
                    
                    <div class="contact-item mb-4">
                        <div class="contact-icon mb-2">
                            <i class="fa fa-map-marker fa-2x text-primary"></i>
                        </div>
                        <h5>Địa chỉ</h5>
                        <p class="text-muted mb-0">
                            123 Đường ABC, Phường XYZ<br>
                            Quận 1, TP.Hồ Chí Minh<br>
                            Việt Nam
                        </p>
                    </div>
                    
                    <div class="contact-item mb-4">
                        <div class="contact-icon mb-2">
                            <i class="fa fa-phone fa-2x text-primary"></i>
                        </div>
                        <h5>Điện thoại</h5>
                        <p class="text-muted mb-0">
                            <a href="tel:<?php echo SITE_PHONE; ?>" class="text-decoration-none"><?php echo SITE_PHONE; ?></a><br>
                            <small>Thứ 2 - Thứ 7: 9:00 - 18:00</small>
                        </p>
                    </div>
                    
                    <div class="contact-item mb-4">
                        <div class="contact-icon mb-2">
                            <i class="fa fa-envelope fa-2x text-primary"></i>
                        </div>
                        <h5>Email</h5>
                        <p class="text-muted mb-0">
                            <a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-decoration-none"><?php echo SITE_EMAIL; ?></a><br>
                            <small>Phản hồi trong vòng 24h</small>
                        </p>
                    </div>
                    
                    <div class="contact-item mb-4">
                        <div class="contact-icon mb-2">
                            <i class="fa fa-clock-o fa-2x text-primary"></i>
                        </div>
                        <h5>Giờ làm việc</h5>
                        <p class="text-muted mb-0">
                            Thứ 2 - Thứ 7: 9:00 - 18:00<br>
                            Chủ nhật: Nghỉ
                        </p>
                    </div>
                    
                    <div class="social-links">
                        <h5 class="mb-3">Kết nối với chúng tôi</h5>
                        <div class="d-flex gap-3">
                            <a href="#" class="social-link">
                                <i class="fa fa-facebook fa-2x text-primary"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fa fa-twitter fa-2x text-primary"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fa fa-linkedin fa-2x text-primary"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fa fa-youtube fa-2x text-primary"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fa fa-instagram fa-2x text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="section bg-light" style="padding-bottom: 3rem;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h2 class="section-title">Vị Trí Của Chúng Tôi</h2>
                <p class="text-muted">Ghé thăm văn phòng Thiên Cơ Trí Liên tại trung tâm TP.Hồ Chí Minh</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="map-container">
                    <div class="map-placeholder">
                        <i class="fa fa-map fa-6x text-muted mb-3"></i>
                        <h5>Bản đồ Google Maps</h5>
                        <p class="text-muted">123 Đường ABC, Quận 1, TP.Hồ Chí Minh</p>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline-primary">
                            <i class="fa fa-external-link"></i> Xem trên Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section m-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Câu Hỏi Thường Gặp</h2>
                <p class="text-muted">Những câu hỏi phổ biến về dịch vụ SEO của chúng tôi</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                SEO mất bao lâu để có kết quả?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Thời gian để thấy kết quả SEO thường từ 3-6 tháng, tùy thuộc vào độ cạnh tranh của từ khóa và tình trạng website hiện tại. Chúng tôi cam kết báo cáo tiến độ hàng tháng để bạn theo dõi.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                Chi phí dịch vụ SEO là bao nhiêu?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Chi phí SEO phụ thuộc vào quy mô dự án, số lượng từ khóa và mức độ cạnh tranh. Chúng tôi cung cấp các gói dịch vụ từ 5-50 triệu đồng/tháng. Liên hệ để được tư vấn chi tiết.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                Có cam kết thứ hạng Google không?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Chúng tôi cam kết tăng lưu lượng truy cập tự nhiên và cải thiện thứ hạng từ khóa. Tuy nhiên, thứ hạng cụ thể phụ thuộc vào nhiều yếu tố. Chúng tôi cam kết báo cáo minh bạch và tối ưu liên tục.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                                Có hỗ trợ khách hàng 24/7 không?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Chúng tôi hỗ trợ khách hàng trong giờ làm việc (8:00-18:00, Thứ 2-Thứ 6). Với khách hàng VIP, chúng tôi cung cấp hỗ trợ 24/7 qua hotline và email.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional CSS for Contact Page -->
<style>
.page-header {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
}

.contact-info-page {
    background: white;
    padding: 0rem 2rem 2rem 2rem;
    border-radius: 16px;
    box-shadow: var(--shadow-light);
    height: fit-content;
    position: sticky;
    top: 100px;
}

.contact-item {
    border-bottom: 1px solid var(--border-color);
    padding-bottom: 1.5rem;
}

.contact-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.contact-icon {
    transition: transform 0.3s ease;
}

.contact-item:hover .contact-icon {
    transform: scale(1.1);
}

.social-link {
    transition: all 0.3s ease;
    display: inline-block;
}

.social-link:hover {
    transform: translateY(-3px);
    color: var(--primary-dark) !important;
}

.map-container {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: var(--shadow-light);
}

.map-placeholder {
    padding: 4rem 2rem;
    text-align: center;
    background: var(--bg-light);
    min-height: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.accordion-item {
    border: 1px solid var(--border-color);
    border-radius: 8px;
    margin-bottom: 1rem;
    overflow: hidden;
}

.accordion-button {
    background: white;
    border: none;
    font-weight: 600;
    color: var(--text-dark);
}

.accordion-button:not(.collapsed) {
    background: var(--primary-color);
    color: white;
}

.accordion-button:focus {
    box-shadow: none;
    border-color: var(--primary-color);
}

.accordion-body {
    background: var(--bg-light);
    color: var(--text-light);
}

/* Form validation styles */
.form-control.is-invalid {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.form-select.is-invalid {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.form-check-input.is-invalid {
    border-color: #dc3545;
}

.invalid-feedback {
    display: block;
    color: #dc3545;
    font-size: 0.875rem;
    margin-top: 0.25rem;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .contact-info-page {
        position: static;
        margin-top: 2rem;
    }
    
    .map-placeholder {
        padding: 2rem 1rem;
    }
}
</style>

<!-- Contact Form JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset validation
            const inputs = this.querySelectorAll('.form-control, .form-select, .form-check-input');
            inputs.forEach(input => {
                input.classList.remove('is-invalid');
            });
            
            let isValid = true;
            
            // Validate required fields
            const requiredFields = this.querySelectorAll('[required]');
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                }
            });
            
            // Validate email
            const emailField = this.querySelector('#email');
            if (emailField && emailField.value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailField.value)) {
                    emailField.classList.add('is-invalid');
                    isValid = false;
                }
            }
            
            // Validate phone
            const phoneField = this.querySelector('#phone');
            if (phoneField && phoneField.value) {
                const phoneRegex = /^[0-9+\-\s()]+$/;
                if (!phoneRegex.test(phoneField.value)) {
                    phoneField.classList.add('is-invalid');
                    isValid = false;
                }
            }
            
            if (isValid) {
                // Show loading state
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<span class="loading"></span> Đang gửi...';
                submitBtn.disabled = true;
                
                // Simulate form submission (replace with actual AJAX call)
                setTimeout(() => {
                    // Show success message
                    showNotification('Cảm ơn bạn! Chúng tôi sẽ liên hệ lại trong vòng 24h.', 'success');
                    
                    // Reset form
                    this.reset();
                    
                    // Reset button
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 2000);
            } else {
                showNotification('Vui lòng kiểm tra lại thông tin.', 'error');
            }
        });
    }
});
</script>

<?php require_once 'templates/footer.php'; ?> 