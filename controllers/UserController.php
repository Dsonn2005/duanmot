<?php
class UserController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function addUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            if (empty($username) || empty($password) || empty($email)|| empty($phone)|| empty($address)) {
                echo "Vui lòng nhập đầy đủ thông tin.";
                return;
            }

            $result = $this->userModel->addUser($username, $password, $email, $phone, $address);

            if ($result) {
                echo "Thêm tài khoản thành công!";
            } else {
                echo "Có lỗi xảy ra khi thêm tài khoản.";
            }
        }
            require 'views/danky_user.php';
    }
}
?>