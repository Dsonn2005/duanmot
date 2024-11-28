<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="promo-banner">Giảm giá mùa hè cho tất cả đồ ăn nhanh và giao hàng miễn phí - Giảm 50%! Mua ngay</div>
        <nav>
            <div class="logo">Exclusive</div>
            <ul class="nav-links">
                <li><a href="trangchu.html">Trang Chủ</a></li>
                <li><a href="lienhe.html">Liên Hệ</a></li>
                <li><a href="About.html">Về Chúng Tôi</a></li>
                <li><a href="dangky.html">Đăng Ký</a></li>
            </ul>
            <div class="search-cart">
                <input type="text" placeholder="Bạn đang tìm kiếm gì?" />
                <div class="cart-icon">🛒</div>
            </div>
        </nav>
    </header>

    <main>
        <section class="billing-details">
            <h2>Chi Tiết Thanh Toán</h2>
            <form>
                <label>Họ Tên*</label>
                <input type="text" required>
                
                <label>Tên Công Ty</label>
                <input type="text">

                <label>Địa Chỉ*</label>
                <input type="text" required>

                <label>Căn hộ, tầng, v.v. (tùy chọn)</label>
                <input type="text">

                <label>Thành Phố*</label>
                <input type="text" required>

                <label>Số Điện Thoại*</label>
                <input type="text" required>

                <label>Email*</label>
                <input type="email" required>

                <label class="checkbox">
                    <input type="checkbox"> Lưu thông tin này để thanh toán nhanh hơn lần sau
                </label>
            </form>
        </section>

        <section class="order-summary">
            <h2>Đơn Hàng Của Bạn</h2>
            <div class="order-items">
                <div class="item">
                    <span>Màn Hình LCD</span>
                    <span>$650</span>
                </div>
            </div>
            <div class="order-total">
                <p>Tạm tính: <span>$1750</span></p>
                <p>Giao hàng: <span>Miễn phí</span></p>
                <p>Tổng cộng: <span>$1750</span></p>
            </div>

            <div class="payment-method">
                <label><input type="radio" name="payment" checked> Ngân hàng</label>
                <label><input type="radio" name="payment"> Thanh toán khi nhận hàng</label>
            </div>

            <div class="coupon">
                <input type="text" placeholder="Mã Giảm Giá">
                <button>Áp Dụng</button>
            </div>

            <button class="place-order">Đặt Hàng</button>
        </section>
    </main>

    <footer>
        <div class="footer-sections">
            <div class="subscribe">
                <h3>Khuyến mãi</h3>
                <p>Để lại Email để nhận ưu đãi giảm 10% cho đơn hàng đầu tiên</p>
                <input type="email" placeholder="Nhập email của bạn">
            </div>
            <div class="support">
                <h3>Hỗ Trợ</h3>
                <p>Địa chỉ: Yên Lãng, Hà Nội</p>
                <p>Email: Anhemfood@gmail.com</p>
                <p>Điện thoại: +88015-88888-9999</p>
            </div>
            <div class="quick-links">
                <h3>Liên Kết Nhanh</h3>
                <ul>
                    <li><a href="#">Tìm Kiếm</a></li>
                    <li><a href="#">Chính Sách Bảo Mật</a></li>
                    <li><a href="#">Điều Khoản Dịch Vụ</a></li>
                    <li><a href="#">Hướng Dẫn Kiểm Tra Đơn Hàng</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© Bản quyền Anhemfood 2024. Mọi quyền được bảo lưu</p>
        </div>
    </footer>
</body>
</html>
