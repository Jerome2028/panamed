<?php

class Router {

    private $request;

    public function __construct($request){
        $request = explode("/", $request);
        $this->request = $request[3];
            //  $this->request = $request[4];
    }

    public function getView(){
        $view = $this->request;

        switch($view){
            case '':
            case '/':
            case 'login':
                require_once 'pages/login.php';
            break;

            case 'brochures':
                require_once 'pages/brochures.php';
                break;
            
            case 'career':
                require_once 'pages/career.php';
                break;

            case 'dashboard':
                require_once 'pages/dashboard.php';
                break;
            
            case 'featured':
                require_once 'pages/featured.php';
                break;
        
            case 'logout':
                require_once 'component/logout.php';
                break;

            case 'news-events':
                require_once 'pages/news-events.php';
                break;

            case 'products':
                require_once 'pages/products.php';
                break;
                
            case 'testimonials':
                require_once 'pages/testimonials.php';
                break;

            default:
            require_once 'pages/error-page.php';
            break;
            }
        }
    }