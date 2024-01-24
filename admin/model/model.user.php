<?php

class User extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function login($user_email, $user_password){
        $query = $this->conn->prepare("SELECT * FROM user WHERE First_Name = ? AND Last_Name = ?");
        $query->execute([$user_email, $user_password]);
        $response = $query->fetch();

        return ($response) ?: false;
    }

    public function getManualsLive($input) {
        $query = $this->conn->prepare("SELECT ppi_product_name, ppi_product_image FROM ppi_products WHERE ppi_product_name LIKE '%$input%' LIMIT 6");
        $query->execute(['name' => '%' . $input . '%']);
        $response = $query->fetchAll();

        return $response;
    }
    
}