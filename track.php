<?php 
	$tracks = json_decode(file_get_contents('data/tracks.json'), true);


	if (isset($_GET['track']) && isset($tracks[urldecode($_GET['track'])]))
		$track = $tracks[urldecode($_GET['track'])];
	else
		header('Location: /coming-soon.php');

	$index = 0;
?>
<?php $page_title = $track['header']['title']; ?>
<?php require_once('template/header.php'); ?>
<div class="row title">
	<div class="col-12 no-padding">
		<h2><?=$track['header']['title']?></h2>
		<p>
			<?=$track['header']['content']?>
		</p>
	</div>
</div>

<div id="content">
	<!-- START TIMELINE -->
	<div id="timeline" class="row">
		<?php foreach ($track['timeline'] as $title => $info): ?>
			<div class="col-12" index="<?=$index+1?>">
			<div class="content">
				<h3><?=$title?></h3>
				<p><?=$info['content']?></p>
				<?php $i = 0; ?>
				<?php foreach ($info['resources'] as $text => $link): ?>
					<a target="_blank" href="<?=$link?>" class="button <?php if ($i != 0): ?>secondary<?php endif; ?>"><?=$text?></a>
				<?php $i++; ?>
				<?php endforeach; ?>
			</div>
		</div>
		<?php  $index++; ?>
		<?php endforeach; ?>
	</div>
	<!-- END TIMELINE -->
</div>

<?php require_once('template/footer.php'); ?>
	