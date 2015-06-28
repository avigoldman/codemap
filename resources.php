<?php $page_title = "Resources"; ?>
<?php require_once('template/header.php'); ?>
<?php 
	$sections = json_decode(file_get_contents('data/resources.json'), true);
?>
<div class="row title">
	<div class="col-12 no-padding">
		<h2>Resources</h2>
	</div>
</div>

<div id="content">
	<!-- START RESOURCES -->
		<?php $index = 0; ?>

		<?php foreach ($sections as $section => $topics): ?>
			<?php if ($index != 0): ?>
			<div class="small-call-to-action" id="tracks">
				<div class="vertical-align row text-center">
					<h4><?=$section?></h4>
				</div>
			</div>
			<br>
			<?php endif; ?>

			<?php foreach ($topics as $title => $resources): ?>
				<div class="row">
					<div class="col-12 padding">
						<h3 class="text-left"><?=$title?></<h3></h3>
					</div>
				</div>
				<div class="row">
					<?php foreach ($resources as $img => $link): ?>
						<div class="col-2 resource">
							<div class="content">
								<a target="_blank" href="<?=$link?>" class="img vertical-align">
									<img src="img/<?=$img?>.png" alt="<?=$img?>">
								</a>
							</div>
						</div>
					<?php endforeach; ?>	
				</div>
				<br>

			<?php endforeach; ?>	

			<?php  $index++; ?>
		<?php endforeach; ?>
	
	<!-- END RESOURCES -->
</div>

<?php require_once('template/footer.php'); ?>
