<?php $page_title = "Contact"; ?>
<?php require_once('template/header.php'); ?>
<div id="content">
	<div class="row">
		<div class="col-2">
			<br>
		</div>
		<div class="col-8">
			<div class="content">
				<h2>Contact</h2>
				<p>
					Give me some feedback or just say hi!
				</p>
				<div id="wufoo-zf7m4gp02cmfg0">
					Fill out my <a href="https://avigoldman.wufoo.com/forms/zf7m4gp02cmfg0">online form</a>.
				</div>
					<script type="text/javascript">var zf7m4gp02cmfg0;(function(d, t) {
					var s = d.createElement(t), options = {
					'userName':'avigoldman',
					'formHash':'zf7m4gp02cmfg0',
					'autoResize':true,
					'height':'583',
					'async':true,
					'host':'wufoo.com',
					'header':'show',
					'ssl':true};
					s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
					s.onload = s.onreadystatechange = function() {
					var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
					try { zf7m4gp02cmfg0 = new WufooForm();zf7m4gp02cmfg0.initialize(options);zf7m4gp02cmfg0.display(); } catch (e) {}};
					var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
					})(document, 'script');</script>
			</div>
		</div>
	</div>
</div>

<?php require_once('template/footer.php'); ?>
	