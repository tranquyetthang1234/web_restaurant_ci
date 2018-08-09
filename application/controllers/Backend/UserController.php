<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {

       $this->data['list'] = $this->User_model->get_list();
       $this->data['temp'] = 'Backend/User/list';
       $this->load->view('Backend/layout/master',$this->data);
    }
    public function add(){


      if($this->input->post()){

        $this->form_validation->set_rules('title', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('content', 'Nội dung', 'required');
        $this->form_validation->set_rules('icon', 'Icon hình ảnh', 'required');

        if($this->form_validation->run()){
           $c = $this->input->post('title');
           $item = $this->db->where(['title' => $c ])->get('User')->num_rows();
            if($item >0){
              $c = $c.'123';
            }
          $data = [
            'title' => $c,
            'content' => $this->input->post('content'),
            'icon' => $this->input->post('icon'),
            'status' => ($this->input->post('status') =='on') ? 1 :0 
          ];
          $title = $data['title'];

         
           if($this->User_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url().'index.php/Backend/UserController');
        }
      }
       $this->data['temp'] = 'Backend/Users/add';
       $this->load->view('Backend/layout/master',$this->data);
    }

    public function edit($id){
      $item = $this->User_model->get_info($id);
      if(!$item){ 
         $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/UserController');
      }
       $this->load->library('form_validation');
        $this->load->helper('form');

      if($this->input->post()){
        $this->form_validation->set_rules('title','Tiêu đề','required');
        $this->form_validation->set_rules('content','Nội dung','required');
        $this->form_validation->set_rules('icon','Icon Hiện thị','required');

         if($this->form_validation->run()){
          $data = [
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'icon' => $this->input->post('icon'),
            'status' => ($this->input->post('status') =='on') ? 1 :0 
          ];

           if($this->User_model->update($item->id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật thông tin thất bại');
                }
                //chuyen tới trang danh sách
                redirect(base_url().'index.php/Backend/UserController');
        }
     }
      
       $this->data['item'] = $item;
       $this->data['temp'] = 'Backend/Users/edit';
       $this->load->view('Backend/layout/master',$this->data);
    }

    public function del($id){
      $this->_del($id);
       $this->session->set_flashdata('message', 'Xóa  thành công');
        redirect(base_url().'index.php/Backend/UserController');
      
    }

    public function check(){
         $c = $this->input->post('delcheck');
      if(isset($c)){
          $idcheckdel = $this->input->post('ids');
          if(!$idcheckdel){
              $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
               redirect(base_url().'index.php/Backend/UserController');
          }
          foreach ($idcheckdel as $id)
          {
              $this->_del($id);
          }
           $this->session->set_flashdata('message', 'Xóa thành công');
          redirect(base_url().'index.php/Backend/UserController');
      }
       $a = $this->input->post('statuscheck');

        if(isset($a)){
            $idcheckdel = $this->input->post('ids');
            if(!$idcheckdel){
                $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
                 redirect(base_url().'index.php/Backend/UserController');
            }
            foreach ($idcheckdel as $id)
            {
                $this->_mutiStatus($id);
            }
            $this->session->set_flashdata('message', 'Cập nhật thành công');
            redirect(base_url().'index.php/Backend/UserController');
        }

    }

    private function _del($id){
      $item = $this->User_model->get_info($id);
      if(!$item){
        $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/UserController');
       }else{
            $this->User_model->delete($id);
       }
        $image_link =  './upload/user/'.$item->img;
            if(file_exists($image_link))
            {
                unlink($image_link);
            }
    }
     private function _mutiStatus($id){
        $User = $this->User_model->get_info($id);
        if(!$User)
        {
            $this->session->set_flashdata('message', 'Không tồn tài ');
           redirect(base_url().'index.php/Backend/UserController');
        }
        $data = array(
            'status'                => !$User->status
        );
        $this->User_model->update($id,$data);

        //chuyen tới trang danh sách

    }


}
