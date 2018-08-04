<?php
		
	$this->load->view('Frontend/layout/header.php');?>
<?php
		$this->load->view($temp , $this->data);?>
<?php
	$this->load->view('Frontend/layout/footer.php');
?>