<?php 

class Careers extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM careers");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getContentWhere($id) {
        $query = $this->conn->prepare("SELECT * FROM careers WHERE id = ?");
        $query->execute([$id]);
        $response = $query->fetch();

        return $response;
    }

    public function addCareers($title, $content, $sort_by, $status){
        $query = $this->conn->prepare("INSERT INTO careers (title, content, sort, status) VALUES (?, ?, ?, ?)");
        $query->execute([$title, $content, $sort_by, $status]);
    }

    public function updateCareers($id, $title, $content, $status) {
        $query = $this->conn->prepare("UPDATE careers SET title = ?, content = ?, status = ? WHERE id = ?");
        $query->execute([$title, $content, $status, $id]);
    }
    

    public function countAllCareers() {
        $query = $this->conn->query("SELECT * FROM careers");
        $results = $query->rowCount();
        echo $results;
    }

    public function deleteCareers($id) {
        $query = $this->conn->prepare("DELETE FROM careers WHERE id = ?");
        $query->execute([$id]);
    }

}