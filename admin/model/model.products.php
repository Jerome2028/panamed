<?php 

class ProductsContent extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM ppi_products");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getContentWhere($id) {
        $query = $this->conn->prepare("SELECT * FROM ppi_products WHERE ppi_product_id = ?");
        $query->execute([$id]);
        $response = $query->fetch();

        return $response;
    }

    public function addProduct($title, $content, $img, $status){
        $query = $this->conn->prepare("INSERT INTO ppi_products (ppi_product_name, ppi_product_image, ppi_product_description, ppi_product_status) VALUES (?, ?, ? ,?)");
        $query->execute([$title, $img, $content, $status]);
    }

    public function updateContent($id, $title, $img, $description, $status) {
        $query = $this->conn->prepare("UPDATE ppi_products SET ppi_product_name = ?, ppi_product_image = ?, ppi_product_description = ?, ppi_product_status = ? WHERE ppi_product_id = ?");
        $query->execute([$title, $img, $description, $status, $id]);
    } 

    public function countAllProducts() {
        $query = $this->conn->query("SELECT * FROM ppi_products");
        $results = $query->rowCount();
        echo $results;
    }

    public function deleteProduct($id) {
        $query = $this->conn->prepare("DELETE FROM ppi_products WHERE ppi_product_id = ?");
        $query->execute([$id]);
    }

}