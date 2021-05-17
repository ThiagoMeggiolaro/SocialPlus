<!-- TOP LANDING SECTION -->
<div style="width:100%; height:90px; background-color: aliceblue; border-bottom:solid 1px #dcdde0;">
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
		<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 0px 40px; height: 100px;" />
		</a>
	</div>
	<div style="float: right;margin: 18px 40px; height: 50px;">
		<a href="<?php echo base_url();?>index.php?home/signin" class="" style="color: #1c98ed;font-weight: 700;font-size: 20px;">Login</a>
	</div>
</div>
<!-- ERROR MESSAGE -->
<style>
	td{padding: 12px 15px; border-bottom: 1px solid #ccc;}
</style>
<div class="container" style="background-color: $bg_color;">
	<div class="row">
		<!-- ERROR MESSAGE SHOWING IF DUPLICATE EMAIL FOUND -->
		<?php 
			if ($this->session->flashdata('signup_result') == 'failed'):
			?>
		<div class="alert alert-dismissible alert-danger" style="margin: 30px;">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Email já existe ou campos vazios. Tente Novamente.
		</div>
		<?php endif ;?>
		<div class="col-lg-12" style="margin: 0px 20px;">
			<h3 class="">Se torne um Membro</h3>
		</div>
		<div class="col-lg-12" style="margin: 0px 20px;">
			<h4 class="">Crie sua conta:</h4>
		</div>
        <div class="col-lg-12" style="margin: 0px 20px; background-color:$bg_color;">
			<form method="POST" action="<?php echo base_url();?>index.php?home/signup">
				<div style="margin:10px 0px 5px;">
					Email
				</div>
				<div class="">
					<input type="email" name="email" style="padding: 10px; width:400px;color: black;" autocomplete="on" />
				</div>
                <div style="margin:10px 0px 5px;">
					Nome Completo
				</div>
				<div class="">
					<input type="text" name="name" style="padding: 10px; width:400px;color: black;" autocomplete="on" />
				</div>
                <div style="margin:10px 0px 5px;">
					Data de Nascimento
				</div>
				<div class="">
					<input type="text" name="born" style="padding: 10px; width:400px;color: black;" autocomplete="off" />
				</div>
                <div style="margin:10px 0px 5px;">
					Cidade
				</div>
				<div class="">
					<input type="text" name="city"  style="padding: 10px; width:400px;color: black;" autocomplete="on" />
				</div>
                <div style="margin:10px 0px 5px;">
					Estado
				</div>
				<div class="">
					<input type="text" name="state"  style="padding: 10px; width:400px; color: black;" autocomplete="on" />
				</div>
				<div style="margin:10px 0px 5px;">
					Password
				</div>
				<div class="">
					<input type="password" name="password" style="padding: 10px; width:400px;" />
				</div>
				<button type="submit"  method="POST" class="btn btn-primary" style=" width: 150px; margin: 20px 0px;">Cadastrar</button>
			</form>
		</div>
	</div>
	<hr>
    
	<?php include 'footer.php';?>
</div>