

<?php $this->load->view('Backend/layout/header');?>

<?php $this->load->view('Backend/layout/sidebar');?>
 <aside>
                     
                 
   <?php $this->load->view($temp, $this->data);?>
 </aside>


<?php $this->load->view('Backend/layout/footer');?>