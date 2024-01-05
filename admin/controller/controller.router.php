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
                require_once 'page/login.php';
            break;
            
            case 'career':
                require_once 'page/career.php';
                break;

            case 'dashboard':
                require_once 'page/dashboard.php';
                break;
            
            case 'featured':
                require_once 'page/featured.php';
                break;
        
            case 'logout':
                require_once 'component/logout.php';
                break;

            case 'newss-events':
                require_once 'page/newss-events.php';
                break;

            default:
            require_once 'page/error-page.php';
            break;
            }
        }
    }