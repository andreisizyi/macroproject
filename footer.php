</main>
	<!-- Объекты с админки для страницы -->
	<?php $object_tel = get_field_object('phone', 'option'); ?>
	<?php $object_email = get_field_object('email', 'option'); ?>
	<?php $object_social = get_field_object('social', 'option'); ?>
	<?php if (!is_front_page()): ?>
		<footer class="footer-block andreisizyi">
				<nav class="footernav">
					<?php if (!is_front_page()): ?><a class="logo-link" href="/"><?php endif; ?>
						<img title="Macroproject" alt="Macroproject" class="logo" width="245" height="120" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg">
					<?php if (!is_front_page()): ?></a><?php endif; ?>
					
					<?php if (has_nav_menu('header-menu')) {
						wp_nav_menu( array( 'theme_location' => 'header-menu' ));
					} ?>

					<div class="cw">
						<?php if (!empty($object_tel['value']['title'])) { ?>
							<div class="contact-in-menu telnumber">
								<a class="href-icon" href="<?php echo $object_tel['value']['url']; ?>">
								<span>
									<img title="Phone" alt="Phone" class="phone" width="24" height="48" src="<?php echo get_template_directory_uri(); ?>/images/phone-white.svg">
									<img title="Phone" alt="Phone" class="phone hover-im" width="24" height="48" src="<?php echo get_template_directory_uri(); ?>/images/phone-hover.svg">
								</span>
									<?php echo $object_tel['value']['title']; ?>
								</a>
							</div>
						<?php } ?>
						<?php if (!empty($object_email['value'])) { ?>
							<div class="contact-in-menu email">
								<a class="href-icon" href="mailto:<?php echo $object_email['value']; ?>">
									<span>
										<img title="Mail" alt="Mail" class="mail" width="24" height="48" src="<?php echo get_template_directory_uri(); ?>/images/mail-white.svg">
										<img title="Mail" alt="Mail" class="mail hover-im" width="24" height="48" src="<?php echo get_template_directory_uri(); ?>/images/mail-hover.svg">
									</span>
									<?php echo $object_email['value']; ?>
								</a>
							</div>
						<?php } ?>
					</div>

					<?php if (!empty($object_social['value']['facebook']['url']) || !empty($object_social['value']['instagram']['url']) || !empty($object_social['value']['youtube']['url'])) { ?>
						<div class="social">
							<?php if (!empty($object_social['value']['facebook']['url'])) { ?>
								<a target="_blank" href="<?php echo $object_social['value']['facebook']['url']; ?>">
								<span>
									<img title="Facebook" alt="Facebook" class="facebook" width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/images/facebook-white.svg">
									<img title="Facebook" alt="Facebook" class="facebook hover-im" width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/images/facebook-hover.svg">
								</span>
								</a>
							<?php } ?>
							<?php if (!empty($object_social['value']['instagram']['url'])) { ?>
								<a target="_blank" href="<?php echo $object_social['value']['instagram']['url']; ?>">
								<span>
									<img title="Instagram" alt="Instagram" class="instagram" width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/images/instagram-white.svg">
									<img title="Instagram" alt="Instagram" class="instagram hover-im" width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/images/instagram-hover.svg">
								</span>
								</a>
							<?php } ?>
							<?php if (!empty($object_social['value']['youtube']['url'])) { ?>
								<a target="_blank" href="<?php echo $object_social['value']['youtube']['url']; ?>">
								<span>
									<img title="Youtube" alt="Youtube" class="youtube" width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/images/youtube-white.svg">
									<img title="Youtube" alt="Youtube" class="youtube hover-im" width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/images/youtube-hover.svg">
								</span>
								</a>
							<?php } ?>
						</div>
					<?php } ?>

					<?php if (!empty(get_field('developed','option'))) { ?>
						<div class="credits">
							<a target="_blank" href="https://iammarketing.com.ua">
								<img title="iammarketing" alt="iammarketing" src="<?php echo get_template_directory_uri(); ?>/images/developed.svg" ?>
							</a>
						</div>
					<?php } ?>	

				</nav>
				
		</footer>
	<?php endif; ?>
<?php wp_footer(); ?>
</body>
<script>

/*
jQuery(function( $ ) {
//2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875
setInterval(function(){
	$('#map img').each(function() { $(this).attr("src", $(this).attr('src').replace("2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875", "")); });
	$('#map img').each(function() { $(this).attr("src", $(this).attr('src').replace("2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1301875", "")); });
	$('#map img').each(function() { $(this).attr("src", $(this).attr('src').replace("3e5", "")); });
	$('#map img').each(function() { $(this).attr("src", $(this).attr('src').replace("!2zcC5zOi02MHxwLmw6LTYw", "")); });
}, 30);

});
*/

</script>
</html>
