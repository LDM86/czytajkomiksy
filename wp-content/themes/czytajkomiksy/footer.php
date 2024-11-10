<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Czytaj_Komiksy_Theme
 */

$section__cooperation = get_field('section__cooperation', 'option');
$section__menu_cat = get_field('section__menu_cat', 'option');
$section__menu_cat_heading = get_field('section__menu_cat_heading', 'option');
$section__menu_tech = get_field('section__menu_tech', 'option');
$section__menu_tech_heading = get_field('section__menu_tech_heading', 'option');
$section__menu_coop = get_field('section__menu_coop', 'option');
$section__menu_coop_heading = get_field('section__menu_coop_heading', 'option');
$section__logo = get_field('section__logo', 'option');
$section__sm = get_field('section__sm', 'option');
$section__sm_heading = get_field('section__sm_heading', 'option');

$copy__year = get_field('copy__year', 'option');
$copy__name = get_field('copy__name', 'option');
$copy__desc = get_field('copy__desc', 'option');
$copy__text = get_field('copy__text', 'option');

$logo__light = get_field('logo__image_light', 'option');
$logo__dark = get_field('logo__image_dark', 'option');

$logo__light_url = $logo__light['url'];
$logo__dark_url = $logo__dark['url'];

$ep404__light = get_field('ep__image_light', 'option');
$ep404__dark = get_field('ep__image_dark', 'option');

$ep404__light_url = $ep404__light['url'];
$ep404__dark_url = $ep404__dark['url'];

?>
</div>
<!-- <?php if (!is_home()) : ?>
	<?php get_template_part('template-parts/new-posts');	?>
<?php endif; ?> -->
<footer class="footer">
	<div class="footer__container container--80">
		<?php if ($logo__light_url) : ?>
			<div class="footer__column footer__column--logo">
				<div class="footer__logo">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<img id="logo-footer" src="<?php echo esc_attr($logo__light_url); ?>" alt="Geek's Forge - blog o popkulturze">
					</a>
				</div>
				<?php if ($copy__year && $copy__name) : ?>
					<div class="footer__info">
						<p class="copy"><strong><?php echo esc_html__('&copy;') . wp_kses_post($copy__year) . ' - ' . date("Y") . ' ' . wp_kses_post($copy__name); ?></strong></p>
						<p class="desc"><?php echo wp_kses_post($copy__desc); ?></p>

						<p class="copy-text"><?php echo wp_kses_post($copy__text); ?></p>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php if ($section__menu_cat == 'yes') : ?>
			<div class="footer__column footer__column--nav">
				<h3 class="footer__heading section-title accordion"><span><?php echo wp_kses_post($section__menu_cat_heading); ?></span></h3>
				<div class="footer__nav footer__nav--cat accordion__item">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-cat',
							'container' => false,
							'menu_class' => 'menu',
							'li_class'  => 'menu__item',
							'url_class'  => 'menu__link'
						)
					);
					?>
				</div>
			</div>
		<?php endif; ?>
		<?php if ($section__menu_tech == 'yes') : ?>
			<div class="footer__column footer__column--nav">
				<h3 class="footer__heading section-title accordion"><span><?php echo wp_kses_post($section__menu_tech_heading); ?></span></h3>
				<div class="footer__nav footer__nav--other accordion__item">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-other',
							'container' => false,
							'menu_class' => 'menu',
							'li_class'  => 'menu__item',
							'url_class'  => 'menu__link'
						)
					);
					?>
				</div>
			</div>
		<?php endif; ?>
		<?php if ($section__menu_cat == 'yes') : ?>
			<div class="footer__column footer__column--nav">
				<h3 class="footer__heading section-title accordion"><span><?php echo wp_kses_post($section__menu_coop_heading); ?></span></h3>
				<div class="footer__nav footer__nav--cat accordion__item">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-coop',
							'container' => false,
							'menu_class' => 'menu',
							'li_class'  => 'menu__item',
							'url_class'  => 'menu__link'
						)
					);
					?>
				</div>
			</div>
		<?php endif; ?>
		<?php if ($section__sm == 'yes') : ?>
			<div class="footer__column footer__column--sm">
				<h3 class="footer__heading section-title"><span><?php echo wp_kses_post($section__sm_heading); ?></span></h3>
				<div class="sm sm--footer">
					<?php get_template_part('template-parts/social-media');	?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</footer>

<div id="mobile" class="mobile">
	<nav class="nav nav--rwd" aria-label="primary">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-primary',
				'menu_id'        => '',
				'container' => false,
				'menu_class' => 'menu',
				'li_class'  => 'menu__item',
				'url_class'  => 'menu__link'
			)
		);
		?>
	</nav>
	<div class="sm sm--mobile">
		<?php get_template_part('template-parts/social-media');	?>
	</div>
</div>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/scripts.js"></script>
<?php wp_footer(); ?>

</body>

</html>