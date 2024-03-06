<?php 

class Brochures extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM brochures");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getContentWhere($id) {
        $query = $this->conn->prepare("SELECT * FROM brochures WHERE id = ?");
        $query->execute([$id]);
        $response = $query->fetch();

        return $response;
    }

    public function addContent($title, $img, $file, $sort_by, $status){
        $query = $this->conn->prepare("INSERT INTO brochures (title, img, file, status, sort) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$title, $img, $file, $status, $sort_by]);
    }

    public function updateContent($id,$title, $img, $file, $status){
        $query = $this->conn->prepare("UPDATE brochures SET title = ?, img = ?, file = ?, status = ? WHERE id = ?");
        $query->execute([$title, $img, $file, $status, $id]);
    }
    public function countAllEvents() {
        $query = $this->conn->query("SELECT * FROM brochures");
        $results = $query->rowCount();
        echo $results;
    }

    public function deleteBrochures($id) {
        $query = $this->conn->prepare("DELETE FROM brochures WHERE id = ?");
        $query->execute([$id]);
    }

}