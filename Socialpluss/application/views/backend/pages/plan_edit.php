<div class="row-fluid">
	<div class="span12">
		<div class="grid simple ">
			<div class="grid-title no-border">
			</div>
			<div class="grid-body no-border">
				<?php
					$plan_detail = $this->db->get_where('plan',array('plan_id'=>$plan_id))->row();
					?>
				<form method="post" action="<?php echo base_url();?>index.php?admin/plan_edit/<?php echo $plan_id;?>">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-8">
							<!--PACKAGE NAME -->
							<div class="form-group">
								<label class="form-label">Planos</label>
								<span class="help"></span>
								<div class="controls">
									<input type="text" class="form-control" name="name" value="<?php echo $plan_detail->name;?>">
								</div>
							</div>
							<!--PACKAGE PRICE -->
							<div class="form-group">
								<label class="form-label">Preços</label>
								<span class="help"></span>
								<div class="controls">
									<input type="text" class="form-control" name="price" value="<?php echo $plan_detail->price;?>">
								</div>
							</div>
							<!-- PACKAGE STATUS -->
							<div class="form-group">
								<label class="form-label">Status</label>
								<span class="help">Os inativos podem mudar de preço</span>
								<div class="controls">
									<select class="select2" name="status" style="width:150px;">
										<option value="0" <?php if ( $plan_detail->status == 0) echo 'selected';?>>Inativo</option>
										<option value="1" <?php if ( $plan_detail->status == 1) echo 'selected';?>>Ativo</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Update">
								<a href="<?php echo base_url();?>index.php?admin/plan_list" class="btn btn-default">Voltar</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>