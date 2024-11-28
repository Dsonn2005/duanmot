<?php
class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addUser($username, $password, $email, $phone, $address) {
        $Password = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (username, password, email, phone, address) VALUES (:username, :password, :email, :phone, :address)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $Password);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':address', $address);

        return $stmt->execute();
    }
}
?>
