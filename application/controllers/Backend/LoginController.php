<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends MY_Controller {

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

        $this->load->library('form_validation');
        $this->load->helper('form');
        
        if($this->input->post())
        {
            $this->form_validation->set_rules('username', 'Email đăng nhập', 'required');
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
            //$this->form_validation->set_rules('login' ,'login', 'callback_check_login');

           
            if($this->form_validation->run())
            {
                $username = $this->input->post('username');
                $passowrd = $this->input->post('password');
                $user = $this->db->where(['name' => $username,'passowrd'=>$passowrd])->get('user')->first_row();
                
                if(!$user){
                   $this->session->set_flashdata('message', 'không tồn tài khoản hoặc mật khẩu !');
                   redirect(base_url().'Backend/LoginController/index');
                }else{
                   $this->session->set_userdata('user_id_login', $user);
                }
                
                 $this->session->set_flashdata('message', 'Đăng nhập thành công');
                redirect(base_url().'Backend/CustumerController');
                //lay thong tin thanh vien
               
                //gắn session id của thành viên đã đăng nhập
                
            }
       }
      
       $this->load->view('Backend/Admin/admin');
    }
    public function logout($id){
        if($this->session->userdata('user_id_login'))
        {
            $this->session->unset_userdata('user_id_login');
        }
        $this->session->set_flashdata('message', 'Đăng xuất thành công');
        redirect(base_url().'Backend/CustumerController');
    } 

    public function edit($id){
      $item = $this->Eat_model->get_info($id);
      if(!$item){ 
         $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/EatController');
      }
       $this->load->library('form_validation');
        $this->load->helper('form');

      if($this->input->post()){
       $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('content', 'Thứ tự', 'required');
        $this->form_validation->set_rules('price', 'Thứ tự', 'required');
        $this->form_validation->set_rules('id_type', 'Thứ tự', 'required');
        $this->form_validation->set_rules('order', 'Thứ tự', 'required');


         if($this->form_validation->run()){
          $data = [
            'name' => $this->input->post('name'),
            'content' => $this->input->post('content'),
            'order' => $this->input->post('order'),
            'price' => $this->input->post('price'),
            'id_type' => $this->input->post('id_type'),
            'status' => ($this->input->post('status') =='on') ? 1 :0 
          ];

           if($this->Eat_model->update($item->id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật thông tin thất bại');
                }
                //chuyen tới trang danh sách
                redirect(base_url().'index.php/Backend/EatController');
        }
     }
       $type_eat = $this->db->get('type_eat')->result_object();

       $this->data['type_aet'] = $type_eat;
       $this->data['item'] = $item;
       $this->data['temp'] = 'Backend/Eat/edit';
       $this->load->view('Backend/layout/master',$this->data);
    }

    public function del($id){
      $this->_del($id);
       $this->session->set_flashdata('message', 'Xóa  thành công');
        redirect(base_url().'index.php/Backend/EatController');
      
    }

    public function check(){
         $c = $this->input->post('delcheck');
      if(isset($c)){
          $idcheckdel = $this->input->post('ids');
          if(!$idcheckdel){
              $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
               redirect(base_url().'index.php/Backend/EatController');
          }
          foreach ($idcheckdel as $id)
          {
              $this->_del($id);
          }
           $this->session->set_flashdata('message', 'Xóa thành công');
          redirect(base_url().'index.php/Backend/EatController');
      }
       $a = $this->input->post('statuscheck');

        if(isset($a)){
            $idcheckdel = $this->input->post('ids');
            if(!$idcheckdel){
                $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
                 redirect(base_url().'index.php/Backend/EatController');
            }
            foreach ($idcheckdel as $id)
            {
                $this->_mutiStatus($id);
            }
            $this->session->set_flashdata('message', 'Cập nhật thành công');
            redirect(base_url().'index.php/Backend/EatController');
        }

    }

    private function _del($id){
      $item = $this->Eat_model->get_info($id);
      if(!$item){
        $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/EatController');
       }else{
            $this->Eat_model->delete($id);
       }
    }
     private function _mutiStatus($id){
        $service = $this->Eat_model->get_info($id);
        if(!$service)
        {
            $this->session->set_flashdata('message', 'Không tồn tài ');
           redirect(base_url().'index.php/Backend/EatController');
        }
        $data = array(
            'status'     => !$service->status
        );
        $this->Eat_model->update($id,$data);

        //chuyen tới trang danh sách

    }


}
