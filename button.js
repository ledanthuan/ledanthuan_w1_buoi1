let slideIndex = 0;

// Hiển thị slide đầu tiên khi trang được tải
showSlide(slideIndex);

function showSlide(n) {
    const slides = document.getElementsByClassName("slide-container");
    if (n >= slides.length) {
        slideIndex = 0;
    } else if (n < 0) {
        slideIndex = slides.length - 1;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";
}

function changeSlide(n) {
    showSlide(slideIndex += n);
}
