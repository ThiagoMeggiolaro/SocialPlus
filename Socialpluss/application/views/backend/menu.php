<div class="page-sidebar " id="main-menu" style="background:linear-gradient(to left, #1c98ed, #1b00ffd4);">

<div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper" style="background:linear-gradient(to left, #1c98ed,#1b00ffd4);">
  <div class="user-info-wrapper sm">
	<div class="profile-wrapper sm">
	  <i class="material-icons" style="font-size: 50px;">account_circle</i>
	  
	</div>
	<div class="user-info sm">
	  <div class="username">
	  	<?php 
		  $user_id	=	$this->session->userdata('user_id');
		  $name		=	$this->db->get_where('user', array('user_id'=>$user_id))->row()->name;
		  echo $name;
		?>
	  </div>
	  <div class="status"style="color:black;">Administrador</div>
	</div>
  </div>
  <hr style="border-top: 1px solid  rgba(229, 233, 236, 0.14); border-bottom: 0px;" />
  
  <ul>
	
	<li class="<?php if ($page_name == 'dashboard')echo 'active';?>"> 
		<a href="<?php echo base_url();?>index.php?admin/dashboard">
		<i class="material-icons" style="color:white;">Pagina</i> 
		<span class="title" style="color:white;">Pagina Inicial</span> <span class=""></span> </a>
	</li>
	
	
	<li class="<?php if ($page_name == 'movie_list' || $page_name == 'movie_edit' || $page_name == 'movie_create')echo 'active';?>"> 
		<a href="<?php echo base_url();?>index.php?admin/movie_list">
		<i class="material-icons"style="color:white;">Filmes</i> 
		<span class="title"style="color:white;">Filmes</span> <span class=""></span> </a>
	</li>
	
	
	<li class="<?php if ($page_name == 'series_list' || $page_name == 'series_create' 
						 || $page_name == 'series_edit' || $page_name == 'season_edit')echo 'active';?>"> 
		<a href="<?php echo base_url();?>index.php?admin/series_list"><i class="material-icons"style="color:white;">ondemand_videos</i> 
		<span class="title"style="color:white;">Séries</span> <span class=""></span> </a>
	</li>
	
	<li class="<?php if ($page_name == 'genre_list' || $page_name == 'genre_edit' || $page_name == 'genre_create')echo 'active';?>"> 
		<a href="<?php echo base_url();?>index.php?admin/genre_list">
		<i class="material-icons"style="color:white;">filter_list</i> 
		<span class="title"style="color:white;">Gênero</span> <span class=""></span> </a>
	</li>
	
	
	<li class="<?php if ($page_name == 'actor_list' || $page_name == 'actor_edit' || $page_name == 'actor_create')echo 'active';?>"> 
		<a href="<?php echo base_url();?>index.php?admin/actor_list"><i class="material-icons"style="color:white;">star</i> 
		<span class="title"style="color:white;">Atores</span> <span class=""></span> </a>
	</li>
	
	
	<li class="<?php if ($page_name == 'user_list' || $page_name == 'user_edit' || $page_name == 'user_create')echo 'active';?>"> 
		<a href="<?php echo base_url();?>index.php?admin/user_list"><i class="material-icons"style="color:white;">people</i> 
		<span class="title"style="color:white;">Usuários</span> <span class=""></span> </a>
	</li>
	
	
	
	
	<li class="<?php if ($page_name == 'report')echo 'active';?>"> 
		<a href="<?php echo base_url();?>index.php?admin/report"><i class="material-icons"style="color:white;">timeline</i> 
		<span class="title"style="color:white;">Report</span> <span class=""></span> </a>
	</li>
	
	
	<?php 
	  $open_settings = false;
	  if ($page_name == 'faq_list' 		|| 
		$page_name == 'faq_edit' 		|| 
		$page_name == 'faq_create' 		||
		$page_name == 'settings' )$open_settings = true;
	  ?>
						 	
	<li class="<?php if($open_settings == true)echo 'active';?>"> <a href="#"><i class="material-icons"style="color:white;">settings</i> 
		<span class="title"style="color:white;">Configurações</span> <span class="<?php if($open_settings == true)echo 'open';?> arrow"></span> </a>
		<ul class="sub-menu">
			<li class=""><a href="<?php echo base_url();?>index.php?admin/settings">Configurações website</a></li>
			<li class=""><a href="<?php echo base_url();?>index.php?admin/faq_list">Faq</a></li>
		</ul>
	</li>
	
	
	<li class="<?php if($page_name == 'account')echo 'active';?>"> 
		<a href="<?php echo base_url();?>index.php?admin/account"><i class="material-icons"style="color:white;">account_circle</i> 
		<span class="title"style="color:white;">Conta</span> <span class=""></span> </a>
	</li>
	
	
	
	
	
	
  </ul>
  
  
  <div class="clearfix"></div>
  
</div>
</div>
<a href="#" class="scrollup">Scroll</a>
