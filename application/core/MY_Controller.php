<?php

class MY_Controller extends CI_Controller{

    public $data = array();

    function __construct()
    {
        parent::__construct();
        $controller = $this->uri->segment(1);
        switch ($controller){
            case 'backend':
            {
                $this->_checkLogin();
                break;
            }
            default:
            {

            }

        }
    }
    private  function _checkLogin(){

    }
}