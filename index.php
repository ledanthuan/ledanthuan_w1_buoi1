<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEDANTHUAN</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Chọn phần tử có id="slide-title" và áp dụng font chữ */
        #slide-title {
            font-family: "Brush Script MT", cursive;
            font-size: 60px;
            /* Thay đổi font chữ ở đây */
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">Logo</div>
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> Trang chủ</a></li>
                <li><a href="#"></i>Mục sản phẩm <i class="fas fa-caret-down"></i></a></li>
                <li><a href="#"><i class="fas fa-envelope"></i> Liên hệ</a></li>
                <li><a href="#">Đăng nhập</a></li>
                <li><a href="#">Đăng kí</a></li>
                <li><a href="#"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a></li>
            </ul>
        </nav>
        <div class="search-container">
            <form method="GET" action="search.php">
                <input type="text" name="keyword" placeholder="Search..." class="search-box">
                <button type="submit" class="search-button">Search</button>
            </form>
        </div>
    </header>
    <div class="slide">
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <div class="slide-container">
            <img src="images/slide1.jpg" alt="Slide 1">
            <div class="slide-content">
                <h2 id="slide-title">Nike</h2>
                <p id="slide-description">Description 1</p>
                <img src="images/slide1.jpg" alt="Slide 1">
            </div>
        </div>
        <div class="slide-container" style="display: none;">
            <img src="images/slide1.jpg" alt="Slide 2">
            <div class="slide-content">
                <h2 class="slide-title">Converse</h2>
                <p class="slide-description">Description 1</p>
                <img src="images/slide1.jpg" alt="Slide 1">
            </div>
        </div>
        <div class="slide-container" style="display: none;">
            <img src="images/slide1.jpg" alt="Slide 3">
            <div class="slide-content">
                <h2 class="slide-title">Vans</h2>
                <p class="slide-description">Description 1</p>
                <img src="images/slide1.jpg" alt="Slide 1">
            </div>
        </div>
    </div>
    <button class="next" onclick="changeSlide(1)">&#10095;</button>

    <script src="slide.js"></script>

    <script src="button.js"></script>
    <section class="how_section layout_padding">
        <div class="heading_container">
            <h1 class="home-title">
                Mục Sản Phẩm
            </h1>
        </div>
        <div class="how_container">
            <div class="box">
                <div class="img-box">
                    <img src="images/icon-quanao.png" alt="quanao">
                </div>
                <div class="detail-box">
                    <h4>
                        Quần áo
                    </h4>
                    <p>
                        Quần áo chất lượng vơi những mẫu mã hợp thời trang hiện nay
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="images/icon-giay.png" alt="giay">
                </div>
                <div class="detail-box">
                    <h4>
                        Giày

                    </h4>
                    <p>
                        Những mẫu giày mang thương hiệu nổi tiếng với nhiều mẫu mã đa dạng năng động hợp xu hướng
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="images/icon-balo.webp" alt="quanao">
                </div>
                <div class="detail-box">
                    <h4>
                        Quần Áo
                    </h4>
                    <p>
                        Balo và túi xách thời trang phong cách phù hợp trong nhiều hoạt động
                    </p>
                </div>
            </div>
    </section>

    <h1 class="home-title-2" id="slide-title">Sản phẩm của chúng tôi</h1>
    <div class="product-list">
        <div class="product">
            <img src="images/product1.jpg" alt="Product 1">
            <h2>Áo Polo</h2>
            <p>Mô tả: Đây là một chiếc áo polo rất phong cách và thoải mái.</p>
            <div class="price">Giá: $20</div>
            <button class="buy-button">Mua ngay</button>
        </div>
        <div class="product">
            <img src="images/product2.jpg" alt="Product 2">
            <h2>Quần jeans</h2>
            <p>Mô tả: Chiếc quần jeans dáng ôm với chất liệu vải co giãn tốt, phù hợp cho mọi hoạt động.</p>
            <div class="price">Giá: $30</div>
            <button class="buy-button">Mua ngay</button>
        </div>
        <div class="product">
            <img src="images/product3.jpg" alt="Product 3">
            <h2>Giày da</h2>
            <p>Mô tả: Đôi giày da chất liệu nhẹ nhàng và thoáng khí, rất phù hợp cho các hoạt động thể dục.</p>
            <div class="price">Giá: $40</div>
            <button class="buy-button">Mua ngay</button>
        </div>
        <div class="product">
            <img src="images/product1.jpg" alt="Product 1">
            <h2>Áo Polo</h2>
            <p>Mô tả: Đây là một chiếc áo polo rất phong cách và thoải mái.</p>
            <div class="price">Giá: $20</div>
            <button class="buy-button">Mua ngay</button>
        </div>

    </div>
    <section class="how_section layout_padding">
        <div class="box">
            <div class="btn-box">
                <a href="">
                    Read More
                </a>
            </div>
            <div class="detail-box">
                <h5 class="mid">
                    Payments
                </h5>
                <p class="mid">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et
                </p>
            </div>
        </div>
        </div>
    </section>
</body>

</html>