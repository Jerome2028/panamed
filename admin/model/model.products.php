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

    public function addProduct($title, $content, $path, $status){
        $query = $this->conn->prepare("INSERT INTO ppi_products (ppi_product_name, ppi_product_image, ppi_product_description, ppi_product_status) VALUES (?, ?, ? ,?)");
        $query->execute([$title, $content, $path, $status]);
    }

    public function updateContent($id, $title,  $img, $content, $status) {
        $query = $this->conn->prepare("UPDATE ppi_products SET ppi_product_name = ?, ppi_product_image = ?, ppi_product_description = ?, status = ? WHERE id = ?");
        $query->execute([$title, $img, $content, $status, $id]);
    }

    public function countAllProducts() {
        // $query = ("SELECT * FROM news_events");
        // $pdoResult = $this->conn->query($query);
        // $pdoRowCount = $pdoResult->rowCount();
        // echo $pdoRowCount;
        $query = $this->conn->query("SELECT * FROM ppi_products");
        $results = $query->rowCount();
        echo $results;
    }

    public function deleteProduct($id) {
        $query = $this->conn->prepare("DELETE FROM ppi_products WHERE ppi_product_id = ?");
        $query->execute([$id]);
    }

}