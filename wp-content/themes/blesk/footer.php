<footer id="footer">
	<div class="uk-container uk-container-center">
		<a href="/"><img src="<?=get_field('logo',4)?>" alt="Лого" class="logo"></a>
		<div class="contacts">
			<h3>Контакты</h3>
			<div class="address-container">
				<h4>Адрес:</h4>
				<p class="address"><?=get_field('address',4)?></p>
			</div>
			<div class="phone-number-container">
				<h4>Телефон:</h4>
				<p><a class="phone-number" href="tel:<?=get_field('phone1',4)?>"><?=get_field('phone1',4)?></a></p>
			</div>
			<div class="email-container">
				<h4>E-mail:</h4>
				<p><a href="mailto:<?=get_field('email',4)?>" class="email"><?=get_field('email',4)?></a></p>
			</div>
			<hr class="uk-grid-divider">
			<div class="social-icons">
				<a href="#">
					<img src="<?php bloginfo('template_directory') ?>/public/img/footer-icon-fb.png" alt="Facebook">
				</a>
				<a href="#">
					<img src="<?php bloginfo('template_directory') ?>/public/img/footer-icon-whatsapp.png" alt="Whats App">
				</a>
			</div>
		</div>
	</div>
</footer>

<div id="reviews-modal" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-lightbox">
		<a class="uk-modal-close uk-close"></a>
		<div class='embed-container'>
			<iframe id="iFrameVideoReviews" src="" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/scripts.js"></script>
<script src="https://api.bsh.su/resources/callback/js/mailer.js" ></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); $('.success-mail-text').html(success); $('.blink-mailer').hide(500);  $('.success-mail-text').show(500);  }, function(error) {});
</script>
<?php wp_footer()?>
</body>
</html>