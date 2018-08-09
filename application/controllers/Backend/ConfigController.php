<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConfigController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Config_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()

    {
      $data['header_files']  =   array('header1','header2','header3', 'ckeditor');
        $config = $this->db->get('config')->first_row();
        $this->data['item'] = $config;
     
       $this->data['temp'] = 'Backend/Config/list';
       $this->load->view('Backend/layout/master',$this->data);
    }
    

    public function edit($id){

      $item = $this->Config_model->get_info($id);
      if(!$item){ 
         $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/BookTableController');
      }
    
      
       $this->load->library('form_validation');
        $this->load->helper('form');
  $this->form_validation->set_rules('txtlog1', 'Tiêu đề', 'required');
      if($this->input->post()){
        
         
         if($this->form_validation->run()){
          $data = [
            'txtlog1' => $this->input->post('txtlog1'),
            'txtlog2' => $this->input->post('txtlog2'),
             'fa' => $this->input->post('fa'),
            'tw' => $this->input->post('tw'),
             'google' => $this->input->post('google'),
             'zalo' => $this->input->post('zalo'),
             'title' => $this->input->post('title'),
            'Introduction1' => $this->input->post('Introduction1'),
             'Introduction2' => $this->input->post('Introduction2'),
            'img' => $this->input->post('a.png'),
             'title2' => $this->input->post('title2'),
            'choose' => $this->input->post('choose'),
             'titlechose' => $this->input->post('titlechose'),
            'address' => $this->input->post('address'),
             'phone1' => $this->input->post('phone1'),
             'phone2' => $this->input->post('phone2'),
             'email' => $this->input->post('email'),
             'map' => $this->input->post('map'),
             'youtube' => $this->input->post('youtube'),
            'footer' => $this->input->post('footer')
          ];
     
           if($this->Config_model->update(1,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật thông tin thất bại');
                }
                //chuyen tới trang danh sách
                redirect(base_url().'index.php/Backend/ConfigController');
        }
     }
      
      
    }

    public function del($id){
      $this->_del($id);
       $this->session->set_flashdata('message', 'Xóa  thành công');
        redirect(base_url().'index.php/Backend/BookTableController');
      
    }

    public function check(){
         $c = $this->input->post('delcheck');
      if(isset($c)){
          $idcheckdel = $this->input->post('ids');
          if(!$idcheckdel){
              $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
               redirect(base_url().'index.php/Backend/BookTableController');
          }
          foreach ($idcheckdel as $id)
          {
              $this->_del($id);
          }
           $this->session->set_flashdata('message', 'Xóa thành công');
          redirect(base_url().'index.php/Backend/BookTableController');
      }
       $a = $this->input->post('statuscheck');

        if(isset($a)){
            $idcheckdel = $this->input->post('ids');
            if(!$idcheckdel){
                $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
                 redirect(base_url().'index.php/Backend/BookTableController');
            }
            foreach ($idcheckdel as $id)
            {
                $this->_mutiStatus($id);
            }
            $this->session->set_flashdata('message', 'Cập nhật thành công');
            redirect(base_url().'index.php/Backend/BookTableController');
        }

    }

    private function _del($id){
      $item = $this->BookTable_model->get_info($id);
      if(!$item){
        $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/BookTableController');
       }else{
            $this->BookTable_model->delete($id);
       }
    }
     private function _mutiStatus($id){
        $service = $this->BookTable_model->get_info($id);
        if(!$service)
        {
            $this->session->set_flashdata('message', 'Không tồn tài ');
           redirect(base_url().'index.php/Backend/BookTableController');
        }
        $data = array(
            'status'     => !$service->status
        );
        $this->BookTable_model->update($id,$data);

        //chuyen tới trang danh sách

    }


}
