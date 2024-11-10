<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Czytaj_Komiksy_Theme
 */

if (!function_exists('czytajkomiksy_posted_on')) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function czytajkomiksy_posted_on()
	{
		$time_string = '<time class="date published updated" datetime="%1$s">%2$s</time>';
		if (get_the_time('U') !== get_the_modified_time('U')) {
			$time_string = '<time class="date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date()),
			esc_attr(get_the_modified_date(DATE_W3C)),
			esc_html(get_the_modified_date())
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x('%s', 'post date', 'czytajkomiksy'),
			'<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="date">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if (!function_exists('czytajkomiksy_posted_by')) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function czytajkomiksy_posted_by()
	{
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x('%s', 'post author', 'czytajkomiksy'),
			'<span class="author vcard"><a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
		);

		echo '<span class="author"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if (!function_exists('czytajkomiksy_category')) :
	function czytajkomiksy_category() {
		if ('post' === get_post_type()) {
			$categories = get_the_category();
			$exclude_categories = get_field('category__exclude', 'option');
			
			// Ustawiamy pustą tablicę, jeśli $exclude_categories nie jest tablicą
			if (!is_array($exclude_categories)) {
				$exclude_categories = [];
			}
	
			foreach ($categories as $category) {
				$term_id = $category->term_id;
				$cat_name = $category->name;
				$cat_url = get_category_link($term_id);
				$cat_color = get_field('cat__color', 'term_' . $term_id);
	
				if (!in_array($term_id, $exclude_categories)) {
					printf('<a href="' . esc_url($cat_url) . '"');
					if ($cat_color) :
						printf(' style="background:' . esc_attr($cat_color) . '">' . esc_html($cat_name) . '</a>');
					else :
						printf('>' . esc_html($cat_name) . '</a>');
					endif;
				}
			}
		}
	}
	
endif;

if (!function_exists('czytajkomiksy_entry_footer')) :

	function czytajkomiksy_entry_footer()
	{

		if ('post' === get_post_type()) {

			$tags = get_the_tags();
			if ($tags) {
				echo '<div class="tags"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M472.8 168.4C525.1 221.4 525.1 306.6 472.8 359.6L360.8 472.9C351.5 482.3 336.3 482.4 326.9 473.1C317.4 463.8 317.4 448.6 326.7 439.1L438.6 325.9C472.5 291.6 472.5 236.4 438.6 202.1L310.9 72.87C301.5 63.44 301.6 48.25 311.1 38.93C320.5 29.61 335.7 29.7 344.1 39.13L472.8 168.4zM.0003 229.5V80C.0003 53.49 21.49 32 48 32H197.5C214.5 32 230.7 38.74 242.7 50.75L410.7 218.7C435.7 243.7 435.7 284.3 410.7 309.3L277.3 442.7C252.3 467.7 211.7 467.7 186.7 442.7L18.75 274.7C6.743 262.7 0 246.5 0 229.5L.0003 229.5zM112 112C94.33 112 80 126.3 80 144C80 161.7 94.33 176 112 176C129.7 176 144 161.7 144 144C144 126.3 129.7 112 112 112z"/></svg>';
				foreach ($tags as $tag) {
					printf('<a href="' . esc_url(get_tag_link($tag->term_id)) . '" aria-label="#' . $tag->name . '">#' . $tag->name . '</a>');
				}
				echo '</div>';
			}
		}

		if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'czytajkomiksy'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);
			echo '</span>';
		}
	}
endif;

if (!function_exists('czytajkomiksy_post_thumbnail')) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function czytajkomiksy_post_thumbnail()
	{
		if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
			return;
		}

		if (is_singular()) :
?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
				?>
			</a>

<?php
		endif; // End is_singular().
	}
endif;

if (!function_exists('wp_body_open')) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open()
	{
		do_action('wp_body_open');
	}
endif;
