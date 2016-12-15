<div class="col-sm-12 col-lg-5 col-md-12 col-xs-12">
	<section id="planes">
		<h3 class="page-header"><?php echo $pageheader; ?></h3>
		<?php foreach ($planes as $plane) { ?>
		<div class="row placeholders">
			<div class="col-lg-4 plane">
					<?php $url = $plane['image']; ?>
					<img src="<?php echo $url ?>" class="img-responsive" width="150" height="150" />
					<p class="text-uppercase"><?php echo $plane['name']; ?></p>
				</div>
			</div>
		</div>
		<?php } ?>
	</section>
</div>