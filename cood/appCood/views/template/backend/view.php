<?php 
	$this->load->view('template/backend/header');
	$this->load->view('template/backend/topmenu');
?>
<?php $this->load->view($main_content);?>
<?php $this->load->view('template/backend/footer');?>