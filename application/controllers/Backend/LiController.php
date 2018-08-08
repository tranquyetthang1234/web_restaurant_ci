<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LiController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Li_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $c = date('d/m/Y');
       $this->data['list'] = $this->Li_model->get_list();
       $this->data['temp'] = 'Backend/Li/list';
       $this->load->view('Backend/layout/master',$this->data);
    }
    public function add(){
        $this->load->library('upload');
        $this->load->library('upload_library');

      if($this->input->post()){

        $this->form_validation->set_rules('name', 'Tiêu đề', 'required');

        if($this->form_validation->run()){

            $date = date('Y/m');
           $upload_path = './upload/lib/'.$date;
         
           if(!file_exists($upload_path)){
               mkdir($upload_path,0755,true);
           }

           $upload_data = $this->upload_library->upload($upload_path, 'img');
         
            $image_link = '';

             if(isset($upload_data['file_name']))
              {
                  
                  $image_link = $upload_data['file_name'];
              }
            $data = [
              'name' => $this->input->post('name'),
              'img' => $date.'/'.$image_link,
              'status' => ($this->input->post('status') =='on') ? 1 :0 
            ];
       

         
           if($this->Li_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
             redirect(base_url().'index.php/Backend/LiController');
        }
      }
     
      
       $this->data['temp'] = 'Backend/Li/add';
       $this->load->view('Backend/layout/master',$this->data);
    }

    public function edit($id){
      $item = $this->Li_model->get_info($id);
      if(!$item){ 
         $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/LiController');
      }
       $this->load->library('form_validation');
        $this->load->helper('form');

      if($this->input->post()){
       $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
       
        $this->load->library('upload');
        $this->load->library('upload_library');

         if($this->form_validation->run()){
           $date = date('Y/m');
           $upload_path = './upload/lib/'.$date;
           if(!file_exists($upload_path)){
                 mkdir($upload_path,0755,true);
             }
          

           $upload_data = $this->upload_library->upload($upload_path, 'imgs');
         
            $image_link = '';

              if(isset($upload_data['file_name'])){

                 $image_links =  './upload/lib/'.$item->img;
                  $image_link = $date.'/'.$upload_data['file_name'];
                 
                if(file_exists($image_links))
                {
                    unlink($image_links);
                }
                 $data = [
                        'name' => $this->input->post('name'),
                        'img' => $image_link,
                        'status' => ($this->input->post('status') =='on') ? 1 :0 
                    ];
                }else{
                   $data = [
                        'name' => $this->input->post('name'),
                      
                        'status' => ($this->input->post('status') =='on') ? 1 :0 
                    ];
                }
                
                
                   
         

           if($this->Li_model->update($item->id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật thông tin thất bại');
                }
                //chuyen tới trang danh sách
                redirect(base_url().'index.php/Backend/LiController');
        }
     }
       $type_Li = $this->db->get('li')->result_object();

       $this->data['type_aet'] = $type_Li;
       $this->data['item'] = $item;
       $this->data['temp'] = 'Backend/Li/edit';
       $this->load->view('Backend/layout/master',$this->data);
    }

    public function del($id){
      $this->_del($id);
       $this->session->set_flashdata('message', 'Xóa  thành công');
        redirect(base_url().'index.php/Backend/LiController');
      
    }

    public function check(){
         $c = $this->input->post('delcheck');
      if(isset($c)){
          $idcheckdel = $this->input->post('ids');
          if(!$idcheckdel){
              $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
               redirect(base_url().'index.php/Backend/LiController');
          }
          foreach ($idcheckdel as $id)
          {
              $this->_del($id);
          }
           $this->session->set_flashdata('message', 'Xóa thành công');
          redirect(base_url().'index.php/Backend/LiController');
      }
       $a = $this->input->post('statuscheck');

        if(isset($a)){
            $idcheckdel = $this->input->post('ids');
            if(!$idcheckdel){
                $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
                 redirect(base_url().'index.php/Backend/LiController');
            }
            foreach ($idcheckdel as $id)
            {
                $this->_mutiStatus($id);
            }
            $this->session->set_flashdata('message', 'Cập nhật thành công');
            redirect(base_url().'index.php/Backend/LiController');
        }

    }

    private function _del($id){
      $item = $this->Li_model->get_info($id);
      if(!$item){
        $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
          redirect(base_url().'index.php/Backend/LiController');
       }
            $image_link =  './upload/lib/'.$item->img;
            if(file_exists($image_link))
            {
                unlink($image_link);
            }
          $this->Li_model->delete($id);
       
    }
     private function _mutiStatus($id){
        $service = $this->Li_model->get_info($id);
        if(!$service)
        {
            $this->session->set_flashdata('message', 'Không tồn tài ');
           redirect(base_url().'index.php/Backend/LiController');
        }
        $data = array(
            'status'     => !$service->status
        );
        $this->Li_model->update($id,$data);

        //chuyen tới trang danh sách

    }


}
