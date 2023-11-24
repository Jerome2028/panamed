<?php

class Router {

    private $request;

    public function __construct($request){
        $request = explode("/", $request);
        $this->request = $request[2];
             // $this->request = $request[4];
    }

    public function getView(){
        
        $view = $this->request;

        switch($view){
            case '':
            case '/':
            case 'home':
                require 'page/home.php';
                break;
            case 'about-us':
                require 'page/about-us.php';
                break;
            case 'news-events':
                require 'page/news-events.php';
                break;
            case 'products':
                require 'page/products.php';
                break;
            case 'brochures':
                require 'page/brochures.php';
                break;
            case 'contact-us':
                require 'page/contact-us.php';
                break;
            case 'awards':
                require 'page/awards.php';
                break;
            case 'careers':
                require 'page/careers.php';
                break;

            default:
                require 'page/error-page.php';
                break;
        }
    }

}