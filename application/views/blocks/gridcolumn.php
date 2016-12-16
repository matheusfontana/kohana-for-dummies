<div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
	<section id="data">
		<h3 class="page-header"><?php echo $pageheader; ?></h3>
		<div class="row placeholders">
			<?php foreach ($arrayData as $data) { ?>
			<div class="col-lg-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<?php $url = $data['image']; ?>
						<img src="<?php echo $url ?>" class="img-responsive center-block" width="150" height="150" />
					</div>
					<div class="panel-footer">
						<p class="text-uppercase text-center photobox-text"><?php echo $data['name']; ?></p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</section>
</div>