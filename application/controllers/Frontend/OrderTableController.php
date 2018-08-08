<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderTableController extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->helper('url');
		$this->load->model('contact_model');
        $this->load->model('ordertable_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
	}
    public function  orderTables(){
             if($this->input->post()){
                   $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
                    $this->form_validation->set_rules('phone', 'Mô tả', 'required');
                     if ($this->form_validation->run()) {
                     $data = array(
                         'name' => $this->input->post('name'),
                         'phone' => $this->input->post('phone'),
                         'email' => $this->input->post('email'),
                         'people' => $this->input->post('order'),
                         'content' => $this->input->post('Message'),
                         'date' => $this->input->post('datepicker2')
                     
                     );

                     if ($this->ordertable_model->create($data)) {
                         
                         $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                     } else {
                         $this->session->set_flashdata('message', 'Không thêm được');
                         
                     }
                     redirect(base_url());
                 }
                  redirect(base_url());
            }
        }
	public function orderTable(){
		if($this->input->post()){
			   $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
	            $this->form_validation->set_rules('content', 'Mô tả', 'required');
	             if ($this->form_validation->run()) {
                 $data = array(
                     'name' => $this->input->post('name'),
                     'email' => $this->input->post('email'),
                     'phone' => $this->input->post('phone'),
                     'content' => $this->input->post('content'),
                 );
                 if ($this->contact_model->create($data)) {
                     $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                 } else {
                     $this->session->set_flashdata('message', 'Không thêm được');
                 }
                 redirect(base_url());
             }
              redirect(base_url());
		}
	}

}