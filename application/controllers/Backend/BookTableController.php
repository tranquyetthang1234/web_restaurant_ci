<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookTableController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('BookTable_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {

       $this->data['list'] = $this->BookTable_model->get_list();
       $this->data['temp'] = 'Backend/BookTable/list';
       $this->load->view('Backend/layout/master',$this->data);
    }
    public function add(){


      if($this->input->post()){

        $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('phone', 'Thứ tự', 'required');
        $this->form_validation->set_rules('email', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('people', 'Thứ tự', 'required');
        $this->form_validation->set_rules('date', 'Tiêu đề', 'required');
       

        if($this->form_validation->run()){
           $c = $this->input->post('name');
           $item = $this->db->where(['name' => $c ])->get('table')->num_rows();
            if($item >0){
              $c = $c.'123';
            }
          $data = [
            'name' => $c,
            'phone' => $this->input->post('phone'),
             'email' => $this->input->post('email'),
              'people' => $this->input->post('people'),
               'date' => $this->input->post('date'),
                'content' => $this->input->post('content'),
            'status' => ($this->input->post('status') =='on') ? 1 :0 
          ];
       

         
           if($this->BookTable_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
             redirect(base_url().'index.php/Backend/BookTableController');
        }
      }
       $this->data['temp'] = 'Backend/BookTable/add';
       $this->load->view('Backend/layout/master',$this->data);
    }

    public function edit($id){
      $item = $this->BookTable_model->get_info($id);
      if(!$item){ 
         $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/BookTableController');
      }
       $this->load->library('form_validation');
        $this->load->helper('form');

      if($this->input->post()){
        $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('phone', 'Thứ tự', 'required');
        $this->form_validation->set_rules('email', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('people', 'Thứ tự', 'required');
        $this->form_validation->set_rules('date', 'Tiêu đề', 'required');

         if($this->form_validation->run()){
          $data = [
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
             'email' => $this->input->post('email'),
              'people' => $this->input->post('people'),
               'date' => $this->input->post('date'),
                'content' => $this->input->post('content'),
            'status' => ($this->input->post('status') =='on') ? 1 :0 
          ];

           if($this->BookTable_model->update($item->id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật thông tin thất bại');
                }
                //chuyen tới trang danh sách
                redirect(base_url().'index.php/Backend/BookTableController');
        }
     }
      
       $this->data['item'] = $item;
       $this->data['temp'] = 'Backend/BookTable/edit';
       $this->load->view('Backend/layout/master',$this->data);
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
