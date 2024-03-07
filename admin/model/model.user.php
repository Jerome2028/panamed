<?php

class User extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }
    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM user");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function login($user_email, $user_password){
        $query = $this->conn->prepare("SELECT * FROM user WHERE BINARY username = ? AND BINARY password = ? ");
        $query->execute([$user_email, $user_password]);
        $response = $query->fetch();

        return ($response) ?: false;
    }
    public function getContentWhere($email) {
        $query = $this->conn->prepare("SELECT * FROM user WHERE id = ?");
        $query->execute([$email]);
        $response = $query->fetch();

        return $response;
    }

    public function getManualsLive($input) {
        $query = $this->conn->prepare("SELECT ppi_product_name, ppi_product_image FROM ppi_products WHERE ppi_product_name LIKE '%$input%'");
        $query->execute(['name' => '%' . $input . '%']);
        $response = $query->fetchAll();

        return $response;
    }

    public function updateProfileInfo($fname, $lname, $id) {
        $query = $this->conn->prepare("UPDATE user SET First_Name = ?, Last_Name = ? WHERE id = ?");
        $query->execute([$fname, $lname, $id]);
    }


    public function updateProfileWithImg($fname, $lname, $file, $id) {
        $query = $this->conn->prepare("UPDATE user SET First_Name = ?, Last_Name = ?, img = ? WHERE id = ?");
        $query->execute([$fname, $lname, $file, $id]);
    }
    
}