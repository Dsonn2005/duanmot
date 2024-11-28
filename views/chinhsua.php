<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Edit</title>
  <link rel="stylesheet" href="account.css">
</head>
<body>
  <div class="header">
    <a href="trangchu.html">Trang chủ</a>
    <a href="About.html">Giới thiệu </a>
    <a href="#">Sản phẩm</a>
    <a href="lienhe.html">Liên hệ</a>
    <div class="welcome">Xin chào! Nguyen Van A </div>
  </div>

  <div class="container">
    <h2>Chỉnh sửa hồ sơ của bạn</h2>
    <form>
      <div class="form-group">
        <label for="fname">Họ</label>
        <input type="text" id="fname" placeholder="Tên đệm">
      </div>
      <div class="form-group">
        <label for="lname">Tên</label>
        <input type="text" id="lname" placeholder="Tên">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="abcxyz@gmail.com">
      </div>
      <div class="form-group">
        <label for="address">Địa chỉ</label>
        <input type="text" id="address" placeholder="So nha 14, Nam Tu Liem , Ha Noi ">
      </div>
      <h3>Thay đổi mật khẩu</h3>
      <div class="form-group">
        <label for="current-pass">Mật khẩu hiện tại</label>
        <input type="password" id="current-pass">
      </div>
      <div class="form-group">
        <label for="new-pass">Mật khẩu mới</label>
        <input type="password" id="new-pass">
      </div>
      <div class="form-group">
        <label for="confirm-pass">Nhập lại mật khẩu mới</label>
        <input type="password" id="confirm-pass">
      </div>
      <div class="button-group">
        <button type="button" class="cancel">Cancel</button>
        <button type="submit">Lưu thay đổi</button>
      </div>
    </form>
  </div>

  <div class="footer">
    <p>Copyright Rimel 2022. All rights reserved.</p>
  </div>
</body>
</html>