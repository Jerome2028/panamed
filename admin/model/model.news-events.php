<?php 

class NewsEvents extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();  
    }

    public function getContent() {
        $query = $this->conn->prepare("SELECT * FROM news_events");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getContentWhere($id) {
        $query = $this->conn->prepare("SELECT * FROM news_events WHERE id = ?");
        $query->execute([$id]);
        $response = $query->fetch();

        return $response;
    }

    public function addEvents($title, $content, $sort_by, $status){
        $query = $this->conn->prepare("INSERT INTO news_events (title, content, sort, status) VALUES (?, ?, ?, ?)");
        $query->execute([$title, $content, $sort_by, $status]);
    }

    public function updateContent($id, $title, $content, $status) {
        $query = $this->conn->prepare("UPDATE news_events SET title = ?, content = ?, status = ? WHERE id = ?");
        $query->execute([$title, $content, $status, $id]);
    }
    

    public function countAllEvents() {
        $query = $this->conn->query("SELECT * FROM news_events");
        $results = $query->rowCount();
        echo $results;
    }

    public function deleteNews($id) {
        $query = $this->conn->prepare("DELETE FROM news_events WHERE id = ?");
        $query->execute([$id]);
    }

}