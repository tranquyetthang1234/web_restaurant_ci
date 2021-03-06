<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TypeEatController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('TypeEat_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {

       $this->data['list'] = $this->TypeEat_model->get_list();
       $this->data['temp'] = 'Backend/TypeEat/list';
       $this->load->view('Backend/layout/master',$this->data);
    }
    public function add(){


      if($this->input->post()){

        $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('order', 'Thứ tự', 'required');

        if($this->form_validation->run()){
           $c = $this->input->post('name');
           $item = $this->db->where(['name' => $c ])->get('type_eat')->num_rows();
            if($item >0){
              $c = $c.'123';
            }
          $data = [
            'name' => $c,
            'order' => $this->input->post('order'),
            'status' => ($this->input->post('status') =='on') ? 1 :0 
          ];
       

         
           if($this->TypeEat_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
             redirect(base_url().'index.php/Backend/TypeEatController');
        }
      }
       $this->data['temp'] = 'Backend/TypeEat/add';
       $this->load->view('Backend/layout/master',$this->data);
    }

    public function edit($id){
      $item = $this->TypeEat_model->get_info($id);
      if(!$item){ 
         $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/TypeEatController');
      }
       $this->load->library('form_validation');
        $this->load->helper('form');

      if($this->input->post()){
       $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('order', 'Thứ tự', 'required');

         if($this->form_validation->run()){
          $data = [
            'name' => $this->input->post('name'),
            'order' => $this->input->post('order'),
            'status' => ($this->input->post('status') =='on') ? 1 :0 
          ];

           if($this->TypeEat_model->update($item->id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật thông tin thất bại');
                }
                //chuyen tới trang danh sách
                redirect(base_url().'index.php/Backend/TypeEatController');
        }
     }
      
       $this->data['item'] = $item;
       $this->data['temp'] = 'Backend/Typeeat/edit';
       $this->load->view('Backend/layout/master',$this->data);
    }

    public function del($id){
      $this->_del($id);
       $this->session->set_flashdata('message', 'Xóa  thành công');
        redirect(base_url().'index.php/Backend/TypeEatController');
      
    }

    public function check(){
         $c = $this->input->post('delcheck');
      if(isset($c)){
          $idcheckdel = $this->input->post('ids');
          if(!$idcheckdel){
              $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
               redirect(base_url().'index.php/Backend/TypeEatController');
          }
          foreach ($idcheckdel as $id)
          {
              $this->_del($id);
          }
           $this->session->set_flashdata('message', 'Xóa thành công');
          redirect(base_url().'index.php/Backend/TypeEatController');
      }
       $a = $this->input->post('statuscheck');

        if(isset($a)){
            $idcheckdel = $this->input->post('ids');
            if(!$idcheckdel){
                $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
                 redirect(base_url().'index.php/Backend/TypeEatController');
            }
            foreach ($idcheckdel as $id)
            {
                $this->_mutiStatus($id);
            }
            $this->session->set_flashdata('message', 'Cập nhật thành công');
            redirect(base_url().'index.php/Backend/TypeEatController');
        }

    }

    private function _del($id){
      $item = $this->TypeEat_model->get_info($id);
      if(!$item){
        $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/TypeEatController');
       }else{
            $this->TypeEat_model->delete($id);
       }
    }
     private function _mutiStatus($id){
        $service = $this->TypeEat_model->get_info($id);
        if(!$service)
        {
            $this->session->set_flashdata('message', 'Không tồn tài ');
           redirect(base_url().'index.php/Backend/TypeEatController');
        }
        $data = array(
            'status'     => !$service->status
        );
        $this->TypeEat_model->update($id,$data);

        //chuyen tới trang danh sách

    }


}
