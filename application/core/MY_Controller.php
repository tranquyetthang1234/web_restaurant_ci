<?php

class MY_Controller extends CI_Controller{

    public $data = array();
    public $login;
    function __construct()
    {
        parent::__construct();
        $controller = $this->uri->segment(1);
        $this->load->helper('url');
        switch ($controller){
            case 'Backend':
            {
                $this->_checkLogin();
                 $this->login = $this->session->userdata('user_id_login');
                break;
            }
            default:
            {
                  /* $user_id_login = $this->session->userdata('user_id_login');
                    $this->data['user_id_login'] = $user_id_login;
                    //neu da dang nhap thi lay thong tin cua thanh vien
                    if($user_id_login)
                    {
                        $this->load->model('user_model');
                        $user_info = $this->user_model->get_info($user_id_login);
                        $this->data['user_info'] = $user_info;
                    }*/
            }

        }
    }
    private  function _checkLogin(){
         $controller = $this->uri->rsegment('1');
          $action = $this->uri->rsegment('2');
        $login = $this->session->userdata('user_id_login');
        //neu ma chua dang nhap,ma truy cap 1 controller khac login
        if(!$login && $controller != 'LoginController')
        {
            redirect(base_url().'Backend/LoginController');
        }
        //neu ma admin da dang nhap thi khong cho phep vao trang login nua.
        if(($login && $login->active ==1) && ($controller == 'LoginController')&& ($action !='logout'))
        {
            redirect(base_url().'Backend/CustumerController/');
        }
    }
}