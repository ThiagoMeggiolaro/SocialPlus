<div class="row-fluid">
	<div class="span12">
		<div class="grid simple ">
			<div class="grid-title no-border">
			</div>
			<div class="grid-body no-border">
				<form method="post" action="<?php echo base_url();?>index.php?admin/user_create" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="form-group">
								<label class="form-label">Nome do usuario</label>
								<div class="controls">
									<input type="text" method="post" class="form-control" name="name">
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Email </label>
								<div class="controls">
									<input type="email" method="post" class="form-control" name="email">
								</div>
							</div>
                            <div class="form-group">
								<label class="form-label">Nome Completo </label>
								<div class="controls">
									<input type="text" method="post" class="form-control" name="name">
								</div>
							</div>
                            <div class="form-group">
								<label class="form-label">Data de Nascimento </label>
								<div class="controls">
									<input type="date" method="post" class="form-control" name="born">
								</div>
							</div>
                            <div class="form-group">
								<label class="form-label">Cidade </label>
								<div class="controls">
									<input type="text" method="post" class="form-control" name="city">
								</div>
							</div>
                            <div class="form-group">
								<label class="form-label">Estado </label>
								<div class="controls">
									<input type="email" method="post" class="form-control" name="state">
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Senha</label>
								<div class="controls">
									<input type="text" method="post" class="form-control" name="password">
								</div>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Criar">
								<a href="<?php echo base_url();?>index.php?admin/user_list" class="btn btn-default">Voltar</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>