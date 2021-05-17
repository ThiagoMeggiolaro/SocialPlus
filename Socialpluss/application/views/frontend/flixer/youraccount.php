<?php include 'header_browse.php';?>
<div class="container" style="margin-top: 90px;">
	<div class="row">
		<!-- NOTIFICATION MESSAGES HERE -->
		<?php
			if ($this->session->flashdata('payment_status') == 'cancelled'):
			?>
		<div class="alert alert-dismissible alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Pagamento cancelado.
		</div>
		<?php endif;?>
		<?php
			if ($this->session->flashdata('payment_status') == 'success'):
			?>
		<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Pagamento realizado com sucesso.
		</div>
		<?php endif;?>
		<?php
			if ($this->session->flashdata('status') == 'email_changed'):
			?>
		<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Troca do Email realizada.
		</div>
		<?php endif;?>
		<?php
			if ($this->session->flashdata('status') == 'password_changed'):
			?>
		<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Troca da senha realizada.
		</div>
		<?php endif;?>
		<?php
			if ($this->session->flashdata('status') == 'subscription_cancelled'):
			?>
		<!-- ERROR MESSAGE --> 
		<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Conta cancelada. Volte a qualquer momento.
		</div>
		<?php endif;?>
		<!-- NOTIFICATION MESSAGES ENDS -->
		<div class="col-lg-12">
			<h3 class="">Conta</h3>
			<hr>
		</div>
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-5">
					<span style="font-size: 20px;">Membros</span>
					<br>
					<?php
						if ( $this->crud_model->validate_subscription() == false):
						?>
					<?php endif;?>
					<?php
						if ( $this->crud_model->validate_subscription() != false):
						?>
					<a href="<?php echo base_url();?>index.php?browse/cancelplan" 
						class="btn btn-default" style="margin:10px 0px;"> Cancelar Parceria </a>
					<?php endif;?>
				</div>
				<div class="col-lg-7">
					<div class="row" style="margin: 5px;">
						<div class="pull-left">
							<b><?php echo $this->crud_model->get_current_user_detail()->email;?></b>
						</div>
						<div class="pull-right">
							<a href="<?php echo base_url();?>index.php?browse/emailchange" class="blue_text">Mudar Email</a>
						</div>
					</div>
					<div class="row" style="margin: 5px;">
						<div class="pull-left">Password : ******</div>
						<div class="pull-right">
							<a href="<?php echo base_url();?>index.php?browse/passwordchange" class="blue_text">Mudar Senha</a>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-5">
					<span style="font-size: 20px;">Meu Perfil</span>
					<br>
				</div>
				<div class="col-lg-7">
					<div class="row" style="margin: 5px;">
						<div class="pull-left">
							<img src="<?php echo base_url();?>assets/global/thumb1.png" style="margin:10px 10px 10px 0px; height: 30px;" />
							<?php echo $this->crud_model->get_current_user_detail()->user1;?>
							<br>
							<!--<a href="" class="blue_text">Language</a>-->
						</div>
						<div class="pull-right">
							<a href="<?php echo base_url();?>index.php?browse/manageprofile" class="blue_text">Administrar Contas</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<?php include 'footer.php';?>
</div>