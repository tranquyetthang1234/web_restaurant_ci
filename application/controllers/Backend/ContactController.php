<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {

       $this->data['list'] = $this->Contact_model->get_list();
       $this->data['temp'] = 'Backend/Contact/list';
       $this->load->view('Backend/layout/master',$this->data);
    }
    public function add(){


      if($this->input->post()){

       $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('phone', 'Chuyên ngành', 'required');
        $this->form_validation->set_rules('email', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('content', 'Chuyên ngành', 'required');
        if($this->form_validation->run()){
           $c = $this->input->post('name');
           $item = $this->db->where(['name' => $c ])->get('contact')->num_rows();
            if($item >0){
              $c = $c.'123';
            }
          $data = [
             'name' => $c,
             'phone' => $this->input->post('phone'),
             'email' => $this->input->post('email'),
              'content' => $this->input->post('content'),
            
          ];
       

         
           if($this->Contact_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
             redirect(base_url().'index.php/Backend/ContactController');
        }
      }
       $this->data['temp'] = 'Backend/Contact/add';
       $this->load->view('Backend/layout/master',$this->data);
    }

    public function edit($id){
      $item = $this->Contact_model->get_info($id);
      if(!$item){ 
         $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/ContactController');
      }
       $this->load->library('form_validation');
        $this->load->helper('form');

      if($this->input->post()){
        $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('phone', 'Chuyên ngành', 'required');
        $this->form_validation->set_rules('email', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('content', 'Chuyên ngành', 'required');
       
         if($this->form_validation->run()){
          $data = [
            'name' => $this->input->post('name'),
           'phone' => $this->input->post('phone'),
             'email' => $this->input->post('email'),
              'content' => $this->input->post('content'),
          ];

           if($this->Contact_model->update($item->id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật thông tin thất bại');
                }
                //chuyen tới trang danh sách
                redirect(base_url().'index.php/Backend/ContactController');
        }
     }
      
       $this->data['item'] = $item;
       $this->data['temp'] = 'Backend/Contact/edit';
       $this->load->view('Backend/layout/master',$this->data);
    }

    public function del($id){
      $this->_del($id);
       $this->session->set_flashdata('message', 'Xóa  thành công');
        redirect(base_url().'index.php/Backend/ContactController');
      
    }

    public function check(){
         $c = $this->input->post('delcheck');
      if(isset($c)){
          $idcheckdel = $this->input->post('ids');
          if(!$idcheckdel){
              $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
               redirect(base_url().'index.php/Backend/ContactController');
          }
          foreach ($idcheckdel as $id)
          {
              $this->_del($id);
          }
           $this->session->set_flashdata('message', 'Xóa thành công');
          redirect(base_url().'index.php/Backend/ContactController');
      }
       $a = $this->input->post('statuscheck');

        if(isset($a)){
            $idcheckdel = $this->input->post('ids');
            if(!$idcheckdel){
                $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
                 redirect(base_url().'index.php/Backend/ContactController');
            }
            foreach ($idcheckdel as $id)
            {
                $this->_mutiStatus($id);
            }
            $this->session->set_flashdata('message', 'Cập nhật thành công');
            redirect(base_url().'index.php/Backend/ContactController');
        }

    }

    private function _del($id){
      $item = $this->Contact_model->get_info($id);
      if(!$item){
        $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/ContactController');
       }else{
            $this->Contact_model->delete($id);
       }
    }
     private function _mutiStatus($id){
        $service = $this->Contact_model->get_info($id);
        if(!$service)
        {
            $this->session->set_flashdata('message', 'Không tồn tài ');
           redirect(base_url().'index.php/Backend/ContactController');
        }
        $data = array(
            'status'     => !$service->status
        );
        $this->Contact_model->update($id,$data);

        //chuyen tới trang danh sách

    }


}
