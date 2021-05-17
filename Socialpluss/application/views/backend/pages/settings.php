<div class="row-fluid">
	<div class="span12">
		<div class="grid simple ">
			<div class="grid-title no-border">
			</div>
			<div class="grid-body no-border">
				<form method="post" action="<?php echo base_url();?>index.php?admin/settings" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label class="form-label">Nome</label>
								<span class="help"></span>
								<div class="controls">
									<input type="text" class="form-control" name="site_name" value="<?php echo $site_name;?>">
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Email</label>
								<span class="help"></span>
								<div class="controls">
									<input type="text" class="form-control" name="site_email" value="<?php echo $site_email;?>">
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Periodo de teste</label>
								<span class="help"></span>
								<div class="controls">
									<select class="form-control" name="trial_period">
										<option value="on" <?php if ($trial_period == 'on')echo 'selected';?>>On</option>
										<option value="off" <?php if ($trial_period == 'off')echo 'selected';?>>Off</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Periodo de teste em dias</label>
								<span class="help"></span>
								<div class="controls">
									<input type="number" min="0" class="form-control" name="trial_period_days" value="<?php echo $trial_period_days;?>">
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Tema</label>
								<span class="help"></span>
								<div class="controls">
									<select class="form-control" name="theme">
										<?php
											$themes = directory_map('./application/views/frontend/', 1);
											//print_r($themes);
											for($i = 0; $i < sizeof($themes) ; $i++) {
												if ($themes[$i] == 'index.php')
													continue;
												$themes[$i] = substr($themes[$i], 0, -1);
												?>
												<option value="<?php echo $themes[$i];?>" <?php if ($theme == $themes[$i])echo 'selected';?>>
													<?php echo $themes[$i];?></option>
												<?php
											}
										?>
									</select>
								</div>
							</div>
						
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label class="form-label">Logo</label>
								<span class="help"></span>
								<div class="controls">
									<input type="file" name="logo" />
									
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-5">
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Configuraçōes do site">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>