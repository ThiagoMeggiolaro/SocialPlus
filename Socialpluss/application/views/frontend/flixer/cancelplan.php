<?php include 'header_browse.php';?>
<div class="container" style="margin-top: 90px;">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="black_text">Cancelar seu plano?</h3>
			<hr>
		</div>
		<div class="col-lg-8">
			<h4 class="black_text">Clique em "Finalizar cancelamento" para terminar o cancelamento.</h4>
			<ul class="black_text">
				<li>
					Cancelar vai afetar imediatamente seu cancelamento.
				</li>
				<li>
					Recomece seu plano a qualquer momento.
				</li>
			</ul>
			<form method="post" action="<?php echo base_url();?>index.php?browse/cancelplan">
				<input type="hidden" name="task" value="cancel_plan" />
				<button class="btn btn-primary" type="submit"> Finalizar cancelamento </button>
				<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-default">Voltar</a>
			</form>
		</div>
	</div>
	<hr>
	<?php include 'footer.php';?>
</div>


