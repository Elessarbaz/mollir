<footer id="footer">
	<div class="uk-container uk-container-center">
		<img src="<?=get_field('logo-f',4)?>" alt="Лого" class="logo">

		<div class="contacts">
			<div class="address-container">
				<h4>Адрес:</h4>
				<p class="address"><?=get_field('address',4)?></p>
			</div>
			<div class="phone-number-container">
				<p>
					<a class="phone-number" href="tel:<?=get_field('phone1',4)?>"><?=get_field('phone1',4)?></a>
					<a class="phone-number" href="<?=get_field('phone2',4)?>"><?=get_field('phone2',4)?></a>
				</p>
			</div>
			<div class="email-container">
				<p><a href="<?=get_field('address',4)?>" class="email"><?=get_field('address',4)?></a></p>
			</div>
		</div>
		<div class="work-time-and-social">
			<div class="work-time">
				<h4>Режим работы:</h4>
				<p>
					<?=get_field('work-time',4)?>
				</p>
			</div>
			<div class="social">
				<h4>Мы в соц. сетях:</h4>
				<a href="<?=get_field('facebook-account',4)?>">
					<img src="<?php bloginfo('template_directory') ?>/public/img/footer-fb.png" alt="Facebook">
				</a>
				<a href="<?=get_field('google-account',4)?>">
					<img src="<?php bloginfo('template_directory') ?>/public/img/footer-google.png" alt="Google">
				</a>
			</div>
		</div>
	</div>
</footer>

<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slideshow.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/grid.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/scripts.js"></script>
<script type='text/javascript' src="<?php bloginfo('template_directory') ?>/public/js/ug-theme-tiles.js"></script>
<script>
	//UIkit.grid($('[data-uk-grid]'), { 'colwidth'});
</script>
<script src="https://callback.blink.kz/resources/callback/js/mailer.js" ></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); $('.success-mail-text').html(success); $('.blink-mailer').hide(500);  $('.success-mail').show(500);  }, function(error) {});
	jQuery("#gallery1").unitegallery({
		tiles_type: "justified",
	});
</script>

<?=get_field('google',4)?>
<?=get_field('yandex',4)?>
<?php wp_footer(); ?>
</body>
</html>