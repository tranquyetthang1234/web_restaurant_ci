<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
    public  $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $list = array();
        $type_eat = $this->db->where(['status' => 1])->get('type_eat')->result_object();
        
        foreach ($type_eat as $key => $value) {
           $eat = $this->db->where(['status' => 1,'id_type'=>$value->id])->get('eat ')->result_object();
           $list[$value->name] = $eat;
        }
       
        $this->data['list'] = $list ;     
        $this->data['filestyle']= file_get_contents('public/css/style3.css');
        $this->data['temp'] = 'Frontend/home';
        $this->data['config'] =  $this->db->get('config')->first_row();
         $this->data['li'] =  $this->db->where(['status' => 1])->get('li')->result_object();
        $this->data['custumer'] =  $this->db->where(['status' => 1])->get('custumer')->result_object();
        $this->data['chef'] =  $this->db->where(['status' => 1])->get('chef')->result_object();
        $this->data['service'] =  $this->db->where(['status' => 1])->get('service')->result_object();
         $this->data['service2'] =  $this->db->where(['status' => 1])->get('service', 4, 0)->result_object();
       
        $this->load->view('Frontend/layout/master',$this->data);
    }



}
