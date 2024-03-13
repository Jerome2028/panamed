<?php

class Utility {

    public static function getBase($http = true){
        if(!$http) {
            return '/panamed/admin/';
        }

        return 'http://localhost/panamed/admin/'; 
        
    }
    
    public static function getRoleString($userole) {
        switch ($userole) {
            case "5":
                return "Administrator";
            case "3":
                return "Digital Marketer";
               
            case "2":
                return "Human Resource";
                default:
            require_once 'pages/error-page.php';
        }
    }
    
}
