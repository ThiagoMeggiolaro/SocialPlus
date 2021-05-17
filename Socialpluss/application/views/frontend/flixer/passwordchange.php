<?php include 'header_browse.php';?>
<div class="container" style="margin-top: 90px;">
	<div class="row">
		<?php
			if ($this->session->flashdata('status') == 'password_change_failed'):
			?>
		 
		<div class="alert alert-dismissible alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			A senha atual está errada ou a nova senha precisa de pelo menos 6 caracteres. Tente de novo.
		</div>
		<?php endif;?>
		<div class="col-lg-12">
			<h3 class="black_text">Mudar Senha</h3>
			<hr>
		</div>
		<div class="col-lg-5">
			<form method="post" action="<?php echo base_url();?>index.php?browse/passwordchange">
				<div class="">
					Atual Senha
				</div>
				<div class="black_text">
					<input type="password" name="old_password" style="padding: 10px; width:100%;" />
				</div>
				<div class="" style="margin-top: 20px;">
					Nova Senha
				</div>
				<div class="black_text">
					<input type="password" name="new_password" style="padding: 10px; width:100%;" />
				</div>
				<br>
				<button class="btn btn-primary" type="submit"> Salvar </button>
				<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-default">Cancelar</a>
			</form>
		</div>
	</div>
	<hr>
	<?php include 'footer.php';?>
</div>