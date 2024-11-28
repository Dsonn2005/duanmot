<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="dangnhap.css">
</head>
<body>
  <header>
    <nav>
      <div class="logo">Anhemfood</div>
      <ul>
        <li><a href="trangchu.php">Trang chủ </a></li>
        <li><a href="About.php">Giới thiệu</a></li>
        <li><a href="#">Sản phẩm</a></li>
        <li><a href="lienhe.php">Liên hệ</a></li>
      </ul>
      <div class="search">
        <input type="text" placeholder="Tìm theo tên sản phẩm">
      </div>
    </nav>
  </header>
 <main>
 
 </main>
 <form method="POST" action="">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="phone">Số Điện Thoại:</label>
    <input type="phone" name="phone" id="phone" required>

    <label for="address">Địa chỉ:</label>
    <input type="address" name="address" id="address" required>

    <button type="submit">Register</button>
</form>

  <footer>
    <div class="footer-content">
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