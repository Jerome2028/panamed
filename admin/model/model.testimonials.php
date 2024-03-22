<?php 

class Testimonials extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM testimonials");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getContentWhere($id) {
        $query = $this->conn->prepare("SELECT * FROM testimonials WHERE id = ?");
        $query->execute([$id]);
        $response = $query->fetch();

        return $response;
    }
    public function addContent($name, $img, $file, $sort_by, $status){
        $query = $this->conn->prepare("INSERT INTO testimonials (name, img, file, status, sort) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$name, $img, $file, $status, $sort_by]);
    }

    public function updateContent($id,$name, $img, $file, $status){
        $query = $this->conn->prepare("UPDATE testimonials SET name = ?, img = ?, file = ?, status = ? WHERE id = ?");
        $query->execute([$name, $img, $file, $status, $id]);
    }
    public function countAllEvents() {
        $query = $this->conn->query("SELECT * FROM testimonials");
        $results = $query->rowCount();
        echo $results;
    }

    public function deletetestimonials($id) {
        $query = $this->conn->prepare("DELETE FROM testimonials WHERE id = ?");
        $query->execute([$id]);
    }

}