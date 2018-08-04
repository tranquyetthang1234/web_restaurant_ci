<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->data['temp'] = 'Frontend/home';
        $this->data['listMenu'] =
        $this->load->view('Frontend/layout/master',$this->data);
    }



}
