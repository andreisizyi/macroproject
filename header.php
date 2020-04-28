<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
	<!-- Объекты с админки для страницы -->
	<?php $object_tel = get_field_object('phone', 'option'); ?>
	<?php $object_email = get_field_object('email', 'option'); ?>
	<?php $object_social = get_field_object('social', 'option'); ?>
<body <?php body_class() ?>>
	<div class="shadow-header"></div>
	<header>
		<div class="header-content">
			<?php if (!is_front_page()): ?><a href="/"><?php endif; ?>
				<img title="Macroproject" alt="Macroproject" class="logo" width="245" height="120" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg">
			<?php if (!is_front_page()): ?></a><?php endif; ?>
			<div class="right">
				<div class="telnumber">
					<?php if (!empty($object_tel['value']['title'])) { ?>
						<a class="number-icon" href="<?php echo $object_tel['value']['url']; ?>">
							<img title="" alt="" class="phone" width="24" height="48" src="<?php echo get_template_directory_uri(); ?>/images/phone-white.svg">
						</a>
						<p>
							<a class="number" href="<?php echo $object_tel['value']['url']; ?>">
							<?php echo $object_tel['value']['title']; ?>
							</a>
						</p>
					<?php } ?>
				</div>
				<button data-button="open" class="burger toggler">
					<span>
						<img title="Menu" alt="Menu" class="burger-icon" width="60" height="48" src="<?php echo get_template_directory_uri(); ?>/images/Burger.svg">
						<img title="Menu" alt="Menu" class="burger-icon hover-im" width="60" height="48" src="<?php echo get_template_directory_uri(); ?>/images/Burger-hover.svg">
					</span>
				</button>
			</div>
		</div>
		<nav class="menu-header">
			<div class="wrapper-toggler andreisizyi">
				<?php if (!is_front_page()): ?><a class="logo-link onl-m" href="/"><?php endif; ?>
					<img title="Macroproject" alt="Macroproject" class="logo onl-m" width="245" height="120" src="<?php echo get_template_directory_uri(); ?>/images/logo-dark.svg">
				<?php if (!is_front_page()): ?></a><?php endif; ?>
				<div class="control-group">
					<?php if (!empty($object_tel['value']['title'])) { ?>
						<a class="number-icon onl-m" href="<?php echo $object_tel['value']['url']; ?>">
							<span>
								<img title="" alt="" class="phone" width="24" height="24" src="<?php echo get_template_directory_uri(); ?>/images/phone-dark.svg">
								<img title="" alt="" class="phone hover-im" width="24" height="24" src="<?php echo get_template_directory_uri(); ?>/images/phone-hover.svg">
							</span>
						</a>
					<?php } ?>
					<button class="toggler close" data-button="close">
						<span>
							<img title="Close" alt="Close" class="close" width="60" height="48" src="<?php echo get_template_directory_uri(); ?>/images/close.svg">
							<img title="Close" alt="Close" class="close hover-im" width="60" height="48" src="<?php echo get_template_directory_uri(); ?>/images/close-hover.svg">
						</span>
					</button>
				</div>
			</div>
			<?php if (has_nav_menu('header-menu')) {
				wp_nav_menu( array( 'theme_location' => 'header-menu' ));
			} ?>
			<?php if (!empty($object_tel['value']['title'])) { ?>
				<div class="contact-in-menu telnumber">
					<a class="href-icon" href="<?php echo $object_tel['value']['url']; ?>">
					<span>
						<img title="Phone" alt="Phone" class="phone" width="24" height="48" src="<?php echo get_template_directory_uri(); ?>/images/phone-dark.svg">
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
						<img title="Mail" alt="Mail" class="mail" width="24" height="48" src="<?php echo get_template_directory_uri(); ?>/images/mail-dark.svg">
						<img title="Mail" alt="Mail" class="mail hover-im" width="24" height="48" src="<?php echo get_template_directory_uri(); ?>/images/mail-hover.svg">
					</span>
					<?php echo $object_email['value']; ?>
				</a>
			</div>
			<?php } ?>
			<?php if (!empty($object_social['value']['facebook']['url']) || !empty($object_social['value']['instagram']['url']) || !empty($object_social['value']['youtube']['url'])) { ?>
			<div class="social">
			<?php if (!empty($object_social['value']['facebook']['url'])) { ?>
				<a target="_blank" href="<?php echo $object_social['value']['facebook']['url']; ?>">
				<span>
					<img title="Facebook" alt="Facebook" class="facebook" width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/images/facebook-dark.svg">
					<img title="Facebook" alt="Facebook" class="facebook hover-im" width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/images/facebook-hover.svg">
				</span>
				</a>
			<?php } ?>
			<?php if (!empty($object_social['value']['instagram']['url'])) { ?>
				<a target="_blank" href="<?php echo $object_social['value']['instagram']['url']; ?>">
				<span>
					<img title="Instagram" alt="Instagram" class="instagram" width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/images/instagram-dark.svg">
					<img title="Instagram" alt="Instagram" class="instagram hover-im" width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/images/instagram-hover.svg">
				</span>
				</a>
			<?php } ?>
			<?php if (!empty($object_social['value']['youtube']['url'])) { ?>
				<a target="_blank" href="<?php echo $object_social['value']['youtube']['url']; ?>">
				<span>
					<img title="Youtube" alt="Youtube" class="youtube" width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/images/youtube-dark.svg">
					<img title="Youtube" alt="Youtube" class="youtube hover-im" width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/images/youtube-hover.svg">
				</span>
				</a>
			<?php } ?>
			</div>
			<?php } ?>
		</nav>
	</header>
	<main>