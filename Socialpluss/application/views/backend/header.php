<div class="header navbar navbar-inverse ">
	
	<div class="navbar-inner">
		<div class="header-seperation">
			<ul class="nav pull-left notifcation-center visible-xs visible-sm">
				<li class="dropdown">
					<a href="#main-menu" data-webarch="toggle-left-side">
					<i class="material-icons">Menu</i>
					</a>
				</li>
			</ul>
			
			<a href="index.html">
			<img src="<?php echo base_url();?>assets/global/logo.png" class="logo" alt="" data-src="<?php echo base_url();?>assets/global/logo.png" data-src-retina="<?php echo base_url();?>assets/global/logo.png" width="106" height="21" />
			</a>
			
		</div>
		
		<div class="header-quick-nav">
			
			<div class="pull-left">
				<ul class="nav quick-section">
					<li class="quicklinks">
						<a href="#" class="" id="layout-condensed-toggle">
						<i class="material-icons">menu</i>
						</a>
					</li>
				</ul>
				<ul class="nav quick-section">
					<li class="quicklinks  m-r-10">
						<a href="<?php echo base_url();?>index.php?browse/home" class="" ta>	
						Filmes cadastrados <i class="fa fa-arrow-right" style="font-size: 15px;"></i>
						</a>
					</li>
				</ul>
			</div>
			
			
			<div class="pull-right">
				<ul class="nav quick-section ">
					<li class="quicklinks">
						<a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
						<i class="material-icons">account_circle</i>
						</a>
						<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
							<li>
								<a href="<?php echo base_url();?>index.php?admin/account"> Minha conta</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="<?php echo base_url();?>index.php?home/signout"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Sair</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			
		</div>
		
	</div>
	
</div>