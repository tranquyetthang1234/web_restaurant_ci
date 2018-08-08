<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChefController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
         $this->load->library('upload');
        $this->load->library('upload_library');
        $this->load->model('Chef_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {

       $this->data['list'] = $this->Chef_model->get_list();
       $this->data['temp'] = 'Backend/Chef/list';
       $this->load->view('Backend/layout/master',$this->data);
    }
    public function add(){


      if($this->input->post()){
       $this->load->library('upload');
        $this->load->library('upload_library');
       $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('major', 'Chuyên ngành', 'required');
       
        if($this->form_validation->run()){
           $c = $this->input->post('name');
           $item = $this->db->where(['name' => $c ])->get('chef')->num_rows();
            if($item >0){
              $c = $c.'123';
            }
            $date = date('Y/m');
            $upload_path = './upload/chef/'.$date;
         
           if(!file_exists($upload_path)){
               mkdir($upload_path,0755,true);
           }

           $upload_data = $this->upload_library->upload($upload_path, 'imgs');
         
            $image_link = '';
              
             if(isset($upload_data['file_name']))
              {
                  
                  $image_link = $upload_data['file_name'];
              }
              
          $data = [
             'name' => $c,
             'major' => $this->input->post('major'),
             'fa' => $this->input->post('fa'),
              'googlel' => $this->input->post('googlel'),
               'tw' => $this->input->post('tw'),
               'img' => $date.'/'.$image_link,
            'status' => ($this->input->post('status') =='on') ? 1 :0 
          ];
       

         
           if($this->Chef_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
             redirect(base_url().'index.php/Backend/ChefController');
        }
      }
       $this->data['temp'] = 'Backend/Chef/add';
       $this->load->view('Backend/layout/master',$this->data);
    }

    public function edit($id){
      $item = $this->Chef_model->get_info($id);
      if(!$item){ 
         $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/ChefController');
      }
       $this->load->library('form_validation');
        $this->load->helper('form');

      if($this->input->post()){
        $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('major', 'Chuyên ngành', 'required');
       
         if($this->form_validation->run()){
          $date = date('Y/m');
           $upload_path = './upload/chef/'.$date;
           if(!file_exists($upload_path)){
                 mkdir($upload_path,0755,true);
             }
          

           $upload_data = $this->upload_library->upload($upload_path, 'imgs');
         
            $image_link = '';

              if(isset($upload_data['file_name'])){

                 $image_links =  './upload/chef/'.$item->img;
                  $image_link = $date.'/'.$upload_data['file_name'];
                 
                if(file_exists($image_links))
                {
                    unlink($image_links);
                }
                 $data = [
                        
                        'img' => $image_link,
                        'name' => $this->input->post('name'),
                      'major' => $this->input->post('major'),
                       'fa' => $this->input->post('fa'),
                        'googlel' => $this->input->post('googlel'),
                         'tw' => $this->input->post('tw'),
                      'status' => ($this->input->post('status') =='on') ? 1 :0 
                    ];
                }else{
                   $data = [
                       'name' => $this->input->post('name'),
                    'major' => $this->input->post('major'),
                     'fa' => $this->input->post('fa'),
                      'googlel' => $this->input->post('googlel'),
                       'tw' => $this->input->post('tw'),
                    'status' => ($this->input->post('status') =='on') ? 1 :0 
                    ];
                }
        

           if($this->Chef_model->update($item->id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật thông tin thất bại');
                }
                //chuyen tới trang danh sách
                redirect(base_url().'index.php/Backend/ChefController');
        }
     }
      
       $this->data['item'] = $item;
       $this->data['temp'] = 'Backend/Chef/edit';
       $this->load->view('Backend/layout/master',$this->data);
    }

    public function del($id){
      $this->_del($id);
       $this->session->set_flashdata('message', 'Xóa  thành công');
        redirect(base_url().'index.php/Backend/ChefController');
      
    }

    public function check(){
         $c = $this->input->post('delcheck');
      if(isset($c)){
          $idcheckdel = $this->input->post('ids');
          if(!$idcheckdel){
              $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
               redirect(base_url().'index.php/Backend/ChefController');
          }
          foreach ($idcheckdel as $id)
          {
              $this->_del($id);
          }
           $this->session->set_flashdata('message', 'Xóa thành công');
          redirect(base_url().'index.php/Backend/ChefController');
      }
       $a = $this->input->post('statuscheck');

        if(isset($a)){
            $idcheckdel = $this->input->post('ids');
            if(!$idcheckdel){
                $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
                 redirect(base_url().'index.php/Backend/ChefController');
            }
            foreach ($idcheckdel as $id)
            {
                $this->_mutiStatus($id);
            }
            $this->session->set_flashdata('message', 'Cập nhật thành công');
            redirect(base_url().'index.php/Backend/ChefController');
        }

    }

    private function _del($id){
      $item = $this->Chef_model->get_info($id);
      if(!$item){
        $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/ChefController');
       }else{
          $image_link =  './upload/chef/'.$item->img;
              if(file_exists($image_link))
              {
                  unlink($image_link);
              }
         
            $this->Chef_model->delete($id);
       }
    }
     private function _mutiStatus($id){
        $service = $this->Chef_model->get_info($id);
        if(!$service)
        {
            $this->session->set_flashdata('message', 'Không tồn tài ');
           redirect(base_url().'index.php/Backend/ChefController');
        }
        $data = array(
            'status'     => !$service->status
        );
        $this->Chef_model->update($id,$data);

        //chuyen tới trang danh sách

    }


}
