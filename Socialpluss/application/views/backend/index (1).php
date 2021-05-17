<!DOCTYPE html>
<html>
	<head>
		<title>SocialPlus</title>
		
		<?php include 'metas.php'; ?>
		
		<?php include 'css.php'; ?>
	</head>
	<body class="">
		
		<?php include 'header.php'; ?>
		
		<div class="page-container row-fluid">
			
			<?php include 'menu.php'; ?>
			
			<div class="page-content">
				<div class="content">
					
					<div class="page-title">
						<i class="icon-custom-right"></i>
						<h3>
							<?php echo $page_title;?>
						</h3>
					</div>
					
					<?php 			
					$this->crud_model->get_videos();
					include 'pages/'.$page_name.'.php';?>
					
				</div>
			</div>
		</div>

		<?php include 'js.php';?>
	</body>
</html>