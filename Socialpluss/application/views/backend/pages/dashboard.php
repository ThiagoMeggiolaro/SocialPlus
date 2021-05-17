<div class="row">
	
	<div class="col-md-4 col-sm-12 ">
		<div class="tiles blue weather-widget ">
			<div class="tiles-body">
				<div class="heading">
					<div class="pull-left"> Total de Filmes </div>
					<div class="pull-right">
						<?php echo $this->db->from('movie')->count_all_results();?>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="big-icon">
					<i class="material-icons" style="font-size: 90px;">Filmes</i>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="tile-footer">
			</div>
		</div>
	</div>
	
	<div class="col-md-4 col-sm-12 ">
		<div class="tiles purple weather-widget ">
			<div class="tiles-body">
				<div class="heading">
					<div class="pull-left"> Total de Series </div>
					<div class="pull-right"> 
						<?php echo $this->db->from('series')->count_all_results();?>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="big-icon">
					<i class="material-icons" style="font-size: 90px;">ondemand_video</i>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="tile-footer">
			</div>
		</div>
	</div>
	
	<div class="col-md-4 col-sm-12 ">
		<div class="tiles green weather-widget ">
			<div class="tiles-body">
				<div class="heading">
					<div class="pull-left"> Total de Episodios </div>
					<div class="pull-right"> 
						<?php echo $this->db->from('episode')->count_all_results();?>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="big-icon">
					<i class="material-icons" style="font-size: 90px;">subscriptions</i>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="tile-footer">
			</div>
		</div>
	</div>
</div>
<div style="margin: 20px;"></div>
<div class="row">
	
	<div class="col-md-4 col-sm-12 ">
		<div class="tiles black  weather-widget ">
			<div class="tiles-body">
				<div class="heading">
					<div class="pull-left"> Total de Usuarios </div>
					<div class="pull-right">
						<?php echo $this->db->from('user')->count_all_results();?>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="big-icon">
					<i class="material-icons" style="font-size: 90px;">people</i>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="tile-footer">
			</div>
		</div>
	</div>
</div>