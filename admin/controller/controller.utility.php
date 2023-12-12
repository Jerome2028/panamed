<?php

class Utility {

    public static function getBase($http = true){
        if(!$http) {
            return '/panamed/admin/';
        }

        return 'http://localhost/panamed/admin/'; 
    }
    
}