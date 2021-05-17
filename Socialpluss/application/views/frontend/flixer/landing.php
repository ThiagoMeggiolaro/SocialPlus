
<div style="height:93vh;width:100%;background-image: url(<?php echo base_url().'assets/frontend/flixer/images/home_top_banner.jpg';?>)">
	
	<div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
		<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px 18px; width: 160px;" />
		</a>
	</div>
	<div style="float: right;margin: 18px 18px; height: 50px;" class="hidden-xs">
		<a href="<?php echo base_url();?>index.php?home/signin" class="btn btn-danger">Login</a>
	</div>
	
	
	<div style="font-size: 85px;font-weight: bold;clear: both;padding: 200px 0px 0px 50px;color: #fff;" class="hidden-xs">
		Veja o que temos para você.
		<div style="font-size: 30px; letter-spacing: .2px; color: #fff; font-weight: 400;">
			Assista de onde quiser. Cancele a qualquer momento.
		</div>
		<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >Cadastrar-se hoje</a>
	</div>
	
	
	<div style="font-size: 45px;font-weight: bold;clear: both;padding: 80px 0px 0px 10px;color: #fff;" class="hidden-lg hidden-sm hidden-md">
		Veja o que temos para você.
		<div style="font-size: 25px; letter-spacing: .2px; color: #fff; font-weight: 400;">
			Assista de onde quiser. <br> Cancele a qualquer momento.
		</div>
		<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >Cadastrar-se hoje</a>
		<br>
		<a href="<?php echo base_url();?>index.php?home/signin" class="btn btn-danger btn-lg" >Logar</a>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="bs-component">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#cancel" data-toggle="tab">
						<i class="fa fa-sign-out" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
						Fácil acesso
						</a>
					</li>
					<li>
						<a href="#anywhere" data-toggle="tab">
						<i class="fa fa-laptop" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
						Assista de onde quiser
						</a>
					</li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active in" id="cancel">
						<p>
						<div class="row">
							<div class="col-md-7" style="padding-top: 50px;">
								<h4>
									Sempre com você nos momentos mais incríveis. <br>Ficou animado? Faça o Cadastro online.
								</h4>
								<br>
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >Cadastrar-se hoje</a>
							</div>
							
						</div>
						</p>
					</div>
					<div class="tab-pane" id="anywhere">
						<p>
						<div class="row">
							<div class="col-md-9">
								<h4>
									Assista séries e filmes a vontade, de qualquer lugar. Qualquer dispositivo.
								</h4>
							</div>
							<div class="col-md-3">
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >Cadastrar-se</a>
							</div>
						</div>
						<div class="row" style="margin-top:50px;text-align: center;">
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_TV_UI.png" style="width: 100%;" />
								<h5>Assista na sua TV</h5>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_mobile_tablet_UI_2.png" style="width: 100%;" />
								<h5>Assista no seu celular, tablet</h5>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_website_UI.png" style="width: 100%;" />
								<h5>Assista no PC</h5>
							</div>
						</div>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
</div>