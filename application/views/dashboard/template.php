<html lang="en"> 
<head>
	<?php  $this->load->view('dashboard/includes/head', array('title' => 'ATW | All The Way Green')); ?>
</head>
<body class="body-white pb-0">
	<?php 
	$this->load->view('dashboard/includes/header'); 
	?>
	 <!-- Page Content-->
    <div class="wrapper">
		<?php echo $content; $this->load->view('dashboard/includes/footer'); ?>
   	</div>
    <!-- end page-wrapper -->
    <?php 
	$this->load->view('dashboard/includes/script'); 
	?>
</body>
</html>
