<?php require_once('template/header.php'); ?>
<div class="call-to-action">
		<div class="overlay">
    <div class="vertical-align row">
      <h2>Find your path and discover the world of code!</h2>
      <br>
      <h3>&lt; <span class="quote"></span> /&gt;</h3>
    </div>
    </div>
</div>
<div class="small-call-to-action" id="tracks">
	<div class="vertical-align row text-center">
		<h4>Choose a track from below to get started</h4>
	</div>
</div>
<br>
		<?php
			$tracks = array(
					array('Simple Websites', 'Learn to build websites using HTML, CSS, and JavaScript. Use your new skills to create a template for Weebly. <br><br>'),
					array('Complex Websites','In this track learn the same technologies that Facebook uses. Create full blown websites and upload them to a server to share with the world.'),
					array('WordPress', 'WordPress is like magic. You can do things that you never imagined possible with it. Use what you learned to develop a powerful website quickly.'),
					array('Hybrid App', 'Coming soon...'),
					array('iOS App', 'Coming soon...'),
					array('Android App', 'Coming soon...')
				);
		?>
		<div class="row">
		<?php for ($i=0; $i < count($tracks); $i++): ?>
		<div class="col-4 track">
			<h3><?=$tracks[$i][0]?></h3>
			<p><?=$tracks[$i][1]?></p>
			<a href="track/<?=urlencode($tracks[$i][0])?>.php" class="button">Get Started!</a>
		</div>
		<?php if (($i+1)%3 == 0):?>
			</div>
			<div class="row">
		<?php endif; ?>
		<?php endfor; ?>
	</div>

<br>
<?php require_once('template/footer.php'); ?>
	