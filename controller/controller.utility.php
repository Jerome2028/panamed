<?php

class Utility {

    public static function getBase(){
         return 'http://localhost/panamed/';
        //  return "https://panamed.com.ph/dev/panamed/";
    }
   public static function generateRandomString($length = 5) {
        $characters = '0123456789abcdefghkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}