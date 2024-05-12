let currentSlide = 0; // Biến để theo dõi chỉ số của slide hiện tại

// Hàm chuyển đổi slide
function changeSlide(direction) {
    const slides = document.querySelectorAll('.slide-container');
    const totalSlides = slides.length;

    // Ẩn slide hiện tại
    slides[currentSlide].style.display = 'none';

    // Tính toán chỉ số của slide tiếp theo dựa trên hướng và totalSlides
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;

    // Hiển thị slide mới
    slides[currentSlide].style.display = 'block';
}

// Hàm tự động chuyển đổi slide sau mỗi khoảng thời gian
function autoChangeSlide() {
    changeSlide(1); // Chuyển sang slide tiếp theo
}

// Đặt hàm autoChangeSlide để gọi mỗi 5 giây
setInterval(autoChangeSlide, 5000); // Thay 5000 bằng khoảng thời gian mong muốn giữa các slide (tính bằng mili giây)
