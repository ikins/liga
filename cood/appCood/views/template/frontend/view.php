<?php 
	$this->load->view('template/frontend/header');
	$this->load->view('template/frontend/topmenu');
?>
<?php $this->load->view($main_content);?>
<?php $this->load->view('template/frontend/footer');?>