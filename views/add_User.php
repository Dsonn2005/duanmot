!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="dangky.css">
</head>
<body>
  <header>
    <div class="top-bar">
      <p>Nhân ngày nhà giáo Việt Nam 20 / 11  – OFF 30%! <a href="#">ShopNow</a></p>
    </div>
    <nav>
      <div class="logo">Anhemfood</div>
      <ul>
        <li><a href="trangchu.html">Trang chủ </a></li>
        <li><a href="About.html">Giới thiệu</a></li>
        <li><a href="#">Sản phẩm</a></li>
        <li><a href="lienhe.html">Liên hệ</a></li>
      </ul>
      <div class="search">
        <input type="text" placeholder="Tìm theo tên sản phẩm">
      </div>
    </nav>
  </header>
  
  <main>
    <div class="container">
      <div class="image-section">
        <img src="uploads/anhkhoga.jpg" alt="Shopping cart with smartphone">
      </div>
      <div class="form-section">
        <h2>Tạo tài khoản</h2>
        <form action="/user/add" method="POST">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <button type="submit">Thêm Tài Khoản</button>
    </form>
        <p>Bạn đã có tài khoản? <a href="#">Đăng nhập</a></p>
      </div>
    </div>
  </main>
  
  <footer>
    <div class="footer-content">
      <div class="subscribe">
        <h3>Khuyến mãi</h3>
        <p>Khuyến mại 10% cho đơn hàng đầu tiên</p>
        <input type="email" placeholder="Enter your email">
      </div>
      <div class="support">
        <h4>Địa chỉ</h4>
        <p>Địa chỉ: Yên Lãng, Hà Nội</p>
        <p>Số điện thoại: 0822221992</p>
        <p>Email: Anhemfood@gmail.com</p> 
      </div>
      <div class="account">
        <h4>Hỗ trợ khách hàng </h4>
        <ul>
          <li><a href="#">Tìm kiếm</a></li>
          <li><a href="#">Chính sách bảo mật</a></li>
          <li><a href="#">Điều khoản dịch vụ</a></li>
          <li><a href="#">Hướng dẫn kiểm tra đơn hàng</a></li>
        </ul>
      </div>
      </div>
    </div>
  </footer>
</body>
</html>