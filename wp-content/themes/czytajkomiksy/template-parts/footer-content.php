<?php

$sources__on_wall 	 = get_field('on_wall__source');

$author__id          = get_the_author_meta('ID');
$author__biography	 = get_the_author_meta('description', $author__id);
$author__facebook    = get_the_author_meta('facebook', $author__id);
$author__instagram   = get_the_author_meta('instagram', $author__id);
$author__linkedin  	 = get_the_author_meta('linkedin', $author__id);
$author__twitter  	 = get_the_author_meta('twitter', $author__id);
$author__youtube  	 = get_the_author_meta('youtube', $author__id);
$author__website 	 = get_the_author_meta('url', $author__id);
?>

<footer class="single__footer">

	<?php
	if ($sources__on_wall) :
		foreach ($sources__on_wall as $source__on_wall) :
			$source = $source__on_wall['on_wall__source_sm'];
			$source__url = $source__on_wall['on_wall__source_url'];
			$source__url_canonical = $source__on_wall['on_wall__source_url_canonical'];
			$source__text = get_field('on_wall__text', 'option', false, false);
	?>

			<div class="on-wall<?php echo (isset($source['value']) ? ' ' . $source['value'] : ''); ?>">
				<?php if ($source) { ?><div class="on-wall__icon<?php echo (isset($source['value']) ? ' ' . $source['value'] : ''); ?>"></div><?php } ?>
				<p class="on-wall__text"><?php echo wp_kses_post($source__text . ' '); ?><a class="on-wall__link" target="_blank" rel="<?php echo (($source__url_canonical == 'yes') ? 'canonical ' : ''); ?>nofollow noopener" href="<?php echo esc_url($source__url); ?>"><?php echo wp_kses_post($source['label']); ?></a>.</p>
			</div>

	<?php
		endforeach;

	endif;

	czytajkomiksy_entry_footer(); ?>

	<div class="share">
		<span class="share__item share__item--main">
		<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
			<!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
			<path d="M352 224c53 0 96-43 96-96s-43-96-96-96s-96 43-96 96c0 4 .2 8 .7 11.9l-94.1 47C145.4 170.2 121.9 160 96 
			160c-53 0-96 43-96 96s43 96 96 96c25.9 0 49.4-10.2 66.6-26.9l94.1 47c-.5 3.9-.7 7.8-.7 11.9c0 53 43 96 96 96s96-43 
			96-96s-43-96-96-96c-25.9 0-49.4 10.2-66.6 26.9l-94.1-47c.5-3.9 .7-7.8 .7-11.9s-.2-8-.7-11.9l94.1-47C302.6 213.8 326.1 
			224 352 224z"/></svg>
			<span class="share__name">Podaj dalej:</span>
		</span>

		<a class="share__item share__item--facebook" data-replace="Udostępnij" href="javascript:void(0)" onclick="javascript:SocialShare('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>')">
			<svg fill="#4267B2" width="20" height="20" version="1.1" id="lni_lni-facebook-original" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
				<path d="M59.5,1h-55C2.5,1,1,2.6,1,4.5v55c0,2,1.6,3.5,3.5,3.5h29.6V38.9h-8v-9.3h8v-6.9c0-8,4.8-12.4,12-12.4
					c2.4,0,4.8,0.1,7.2,0.4V19h-4.8c-3.8,0-4.6,1.8-4.6,4.5v5.9H53l-1.3,9.4h-8v23.8h15.8c2,0,3.5-1.5,3.5-3.5V4.5
					C62.9,2.5,61.3,1,59.5,1z" />
			</svg>
			<span class="share__name">Facebook</span>
		</a>
		<a class="share__item share__item--twitter" data-replace="Tweetnij" href="javascript:void(0)" onclick="javascript:SocialShare('http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>')">
			<svg fill="#1DA1F2" width="20" height="20" version="1.1" id="lni_lni-twitter-original" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
				<path d="M20.3,57.4c23.6,0,36.4-19.5,36.4-36.4c0-0.4,0-1.1-0.1-1.7c2.5-1.8,4.7-4.1,6.4-6.6c-2.4,1.1-4.8,1.7-7.3,2
							c2.7-1.6,4.7-4.1,5.6-7.1c-2.5,1.4-5.1,2.5-8.2,3.1c-2.4-2.5-5.6-4.1-9.3-4.1c-7.1,0-12.9,5.8-12.9,12.9c0,1,0.1,2,0.3,3
							C20.9,21.8,11.5,16.7,5.1,9c-1.1,2-1.7,4.1-1.7,6.4c0,4.5,2.3,8.3,5.8,10.6c-2.1-0.1-4.1-0.7-5.8-1.6c0,0.1,0,0.1,0,0.1
							c0,6.1,4.4,11.4,10.2,12.6c-1.1,0.3-2.3,0.4-3.2,0.4c-0.8,0-1.7-0.1-2.4-0.3c1.7,5.1,6.4,8.8,12,8.9c-4.4,3.4-9.9,5.5-15.8,5.5
							C3,51.8,2,51.6,1,51.5C6.4,55.3,13.1,57.4,20.3,57.4" />
			</svg>
			<span class="share__name">Twitter</span>
		</a>
		<a class="share__item share__item--linkedin" data-replace="Poleć to" href="javascript:void(0)" onclick="javascript:SocialShare('https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>')">
			<svg fill="#0A66C2" width="20" height="20" version="1.1" id="lni_lni-linkedin-original" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
				<path d="M58.5,1H5.6C3.1,1,1.1,3,1.1,5.5v53c0,2.4,2,4.5,4.5,4.5h52.7c2.5,0,4.5-2,4.5-4.5V5.4C63,3,61,1,58.5,1z M19.4,53.7h-9.1
							 V24.2h9.1V53.7z M14.8,20.1c-3,0-5.3-2.4-5.3-5.3s2.4-5.3,5.3-5.3s5.3,2.4,5.3,5.3S17.9,20.1,14.8,20.1z M53.9,53.7h-9.1V39.4
							 c0-3.4-0.1-7.9-4.8-7.9c-4.8,0-5.5,3.8-5.5,7.6v14.6h-9.1V24.2h8.9v4.1h0.1c1.3-2.4,4.2-4.8,8.7-4.8c9.3,0,11,6,11,14.2v16H53.9z" />
			</svg>
			<span class="share__name">Linkedin</span>
		</a>
		<a class="share__item share__item--messenger" data-replace="Udostępnij" href="javascript:void(0)" onclick="javascript:SocialShare('fb-messenger://share/?link=<?php the_permalink(); ?>')">
			<svg fill="#A334FA" width="20" height="20" version="1.1" id="lni_lni-facebook-messenger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
				<path d="M31.9,1.1C14.5,1.1,1,13.9,1,31.1c0,9.1,3.7,16.9,9.7,22.2c0.4,0.4,0.7,1.1,0.8,1.7l0.1,5.5c0.1,1.7,1.8,3,3.5,2.2l6.2-2.7
							c0.4-0.1,1.1-0.3,1.7-0.1c2.8,0.7,5.8,1.3,9,1.3C49.5,61.1,63,48.3,63,31.2S49.4,1.1,31.9,1.1z M50.5,24.2l-9.1,14.3
							c-1.4,2.2-4.5,3-6.6,1.3l-7.2-5.5c-0.7-0.4-1.5-0.4-2.2,0l-9.8,7.3c-1.3,1-3-0.6-2.1-2l9.1-14.3c1.4-2.2,4.5-3,6.6-1.3l7.2,5.5
							c0.7,0.4,1.5,0.4,2.2,0l9.7-7.5C49.8,21.4,51.3,22.9,50.5,24.2z" />
			</svg>
			<span class="share__name">Messenger</span>
		</a>
		<a class="share__item share__item--whatsup" data-replace="Udostępnij" href="javascript:void(0)" onclick="javascript:SocialShare('whatsapp://send?text=<?php the_permalink(); ?>')">
			<svg fill="#075E54" width="20" height="20" version="1.1" id="lni_lni-whatsapp" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
				<g id="WA_Logo">
					<g>
						<path d="M54,9.9c-5.8-5.8-13.7-9-21.8-9C15.2,0.9,1.3,14.7,1.3,31.7c0,5.5,1.4,10.7,4.1,15.5L1,63.1l16.5-4.2
							c4.5,2.4,9.6,3.8,14.8,3.8l0,0l0,0C49.2,62.6,63,48.8,63,31.7C63,23.5,59.8,15.8,54,9.9z M32.1,57.4L32.1,57.4
							c-4.5,0-9.2-1.3-13.1-3.7l-1-0.6l-9.7,2.5l2.7-9.4l-0.6-1c-2.5-4.1-3.9-8.9-3.9-13.7c0-14.1,11.4-25.5,25.6-25.5
							c6.8,0,13.2,2.7,18,7.5s7.5,11.3,7.5,18.2C57.8,46,46.2,57.4,32.1,57.4z M46.2,38.2c-0.8-0.4-4.5-2.3-5.4-2.4
							c-0.7-0.3-1.3-0.4-1.7,0.4c-0.4,0.8-2,2.4-2.4,3c-0.4,0.4-0.8,0.6-1.7,0.1c-0.8-0.4-3.2-1.1-6.2-3.9c-2.3-2-3.9-4.5-4.2-5.4
							c-0.4-0.8-0.1-1.1,0.4-1.6c0.4-0.4,0.8-0.8,1.1-1.4c0.4-0.4,0.4-0.8,0.8-1.3c0.4-0.4,0.1-1-0.1-1.4c-0.3-0.4-1.7-4.2-2.4-5.8
							c-0.6-1.6-1.3-1.3-1.7-1.3c-0.4,0-1,0-1.4,0s-1.4,0.1-2,1c-0.7,0.8-2.7,2.7-2.7,6.5s2.7,7.3,3.2,8c0.4,0.4,5.5,8.3,13.1,11.7
							c1.8,0.8,3.2,1.3,4.4,1.7c1.8,0.6,3.5,0.4,4.8,0.3c1.5-0.1,4.5-1.8,5.2-3.7c0.6-1.7,0.6-3.4,0.4-3.7
							C47.5,38.8,46.9,38.5,46.2,38.2z" />
					</g>
				</g>
			</svg>
			<span class="share__name">What's Up</span>
		</a>
		<a class="share__item share__item--telegram" data-replace="Udostępnij" href="javascript:void(0)" onclick="javascript:SocialShare('https://t.me/share/url?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>')">
			<svg fill="#229ED9" width="20" height="20" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
				<path d="M62.8 10.8L53.4 54.8C52.7 57.9 50.9 58.6 48.3 57.2L34.2 46.8L27.3 53.4C26.6 54.1 25.9 54.8 24.3 54.8L25.4 40.3L51.7 16.4C52.8 15.3 51.4 14.9 50 15.8L17.3 36.4L3.19998 32.1C0.0999796 31.1 0.0999796 29 3.89998 27.6L58.7 6.30003C61.4 5.50003 63.7 6.90003 62.8 10.8Z" fill="#229ED9" />
			</svg>
			<span class="share__name">Telegram</span>
		</a>
		<a class="share__item share__item--mail" data-replace="Wyślij" href="mailto:?subject=Zobacz ten artykuł z Geek's Forge: <?php the_title(); ?>&body=<?php the_permalink(); ?>">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#dc4038" stroke-opacity="1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
				<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
				<polyline points="22,6 12,13 2,6"></polyline>
			</svg>
			<span class="share__name">E-mail</span>
		</a>
		<span class="tooltip">
		<span class="tooltip__text">Skopiowano do schowka</span>
		<a class="share__item share__item--link" data-replace="Kopiuj link" href="javascript:void(0)" onclick="javascript:CopyLink()">
			<svg fill="#74a60a" width="20" height="20" version="1.1" id="lni_lni-link" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
				<path d="M59.4,43.1l-8.4-8.3c-4.2-4.2-10.7-4.4-15.2-0.9l-5.7-5.7c1.6-2,2.4-4.4,2.5-7c0-3.1-1.2-6-3.3-8.2l-8.4-8.3
						c-4.5-4.5-11.8-4.5-16.3,0c-2.2,2.2-3.4,5.1-3.4,8.1s1.2,6,3.4,8.1l8.3,8.4c2.2,2.2,5.2,3.4,8.1,3.4c2.3,0,4.6-0.7,6.5-2l5.9,5.9
						c-1.3,1.9-2,4.1-2,6.5c0,3.1,1.2,6,3.4,8.1l8.3,8.4c2.2,2.2,5.2,3.4,8.1,3.4c2.9,0,5.9-1.1,8.1-3.4c2.2-2.1,3.4-5,3.4-8
						C62.8,48.2,61.6,45.3,59.4,43.1z M15.4,26.8l-8.3-8.4c-1.5-1.5-2.4-3.5-2.4-5.7c0-2.1,0.8-4.1,2.4-5.7c1.6-1.6,3.6-2.3,5.7-2.3
						c2,0,4.1,0.8,5.7,2.3l8.3,8.3c1.5,1.5,2.3,3.5,2.3,5.7c0,1.7-0.5,3.3-1.5,4.6l-3.1-3.1c-0.7-0.7-1.8-0.7-2.5,0
						c-0.7,0.7-0.7,1.8,0,2.5l3,2.9C22,29.8,18,29.4,15.4,26.8z M56.9,56.9L56.9,56.9c-3.1,3.1-8.2,3.1-11.3,0l-8.3-8.4
						c-1.5-1.5-2.4-3.5-2.4-5.7c0-1.4,0.4-2.8,1.1-3.9l2.9,2.9c0.3,0.3,0.8,0.5,1.2,0.5c0.4,0,0.9-0.2,1.2-0.5c0.7-0.7,0.7-1.8,0-2.5
						l-3-3c1.4-1,3-1.5,4.6-1.5c2,0,4.1,0.8,5.7,2.3l8.3,8.3c1.5,1.5,2.3,3.6,2.3,5.7C59.2,53.4,58.4,55.4,56.9,56.9z" />
			</svg>
			
			<span class="share__name">Kopiuj link</span>
		</a>
		</span>
	</div>

	<div class="post-author">
		<div class="post-author__avatar">
			<?php echo get_avatar($author__id, 155); ?>
		</div>
		<div class="post-author__bio bio<?php if (!$author__biography) : ?> bio--wd<?php endif; ?>">
			<div class="bio__author">
				<div class="author"><?php the_author(); ?></div>
				<?php if ($author__website || $author__facebook || $author__instagram || $author__youtube || $author__twitter || $author__linkedin) : ?>
					<div class="sm sm--pa">
						<div class="sm__icons">
							<?php if ($author__website) : ?>
								<a class="sm__icon sm__icon--website" href="<?php echo esc_url($author__website); ?>" target="_blank">
									<svg fill="#000000" width="20" height="20" version="1.1" id="lni_lni-world" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
										<path d="M58.8,16.9C54.7,9.6,47.6,4.3,39.5,2.2c-2.7-0.6-5.1-0.9-7.5-0.9c-2.6,0-5.2,0.3-7.7,1c-8,2.1-15,7.4-19.1,14.7
									c-2.6,4.7-4,9.8-4,15.1l0,0.7c0.1,5.6,1.8,11.1,4.8,15.9c4.9,7.7,12.9,12.8,21.8,13.8c1.2,0.2,2.5,0.3,4.1,0.3
									c1.2,0,2.5-0.1,3.8-0.2c9.1-1.1,17.2-6.2,22.2-14c3-4.7,4.7-10.1,4.8-15.8V32C62.8,26.9,61.4,21.6,58.8,16.9z M51.3,30.3
									c-0.3-3.4-1.2-6.6-2.5-9.7h7.9c1.4,3.1,2.2,6.4,2.4,9.7H51.3z M42.9,17.1h-9.2V6.3C36.7,8.4,39.8,12,42.9,17.1z M30.3,6.2v10.9h-9.7
									C23.8,12,27.1,8.3,30.3,6.2z M30.3,20.6v9.7H15.7c0.3-3.4,1.2-6.7,2.8-9.7H30.3z M30.3,33.8v12.3h-11c-2.2-3.7-3.4-8-3.6-12.3H30.3z
									M30.3,49.6v8.3c-3.1-1.8-6.2-4.7-8.8-8.3H30.3z M33.8,57.9v-8.3H43C40.5,53,37.4,55.9,33.8,57.9z M33.8,46.1V33.8H48
									c-0.1,4.3-1.1,8.5-3,12.3H33.8z M33.8,30.3v-9.7H45c1.5,3,2.5,6.3,2.9,9.7H33.8z M54.8,17.1H47c-3-5-5.8-8.9-8.7-11.6
									c0.1,0,0.2,0,0.4,0.1C45.3,7.3,51.1,11.4,54.8,17.1z M25.2,5.7c0.1,0,0.1,0,0.2,0c-3,2.7-5.9,6.5-8.9,11.3c0,0,0,0.1-0.1,0.1H9.3
									C13,11.4,18.7,7.3,25.2,5.7z M7.3,20.6h7.3c-1.3,3.1-2.1,6.3-2.4,9.7H4.8C5,26.9,5.9,23.6,7.3,20.6z M4.8,33.8h7.3
									c0.2,4.3,1.2,8.5,3.1,12.3H8.6C6.4,42.3,5.1,38.1,4.8,33.8z M11.1,49.6h6.1c2.2,3.4,4.8,6.4,7.5,8.7C19.4,56.9,14.7,53.8,11.1,49.6z
									M39.6,58.2c3-2.4,5.5-5.3,7.5-8.6h5.7C49.3,53.7,44.8,56.7,39.6,58.2z M55.3,46.1h-6.4c1.7-3.9,2.6-8.1,2.6-12.3h7.7
									C58.9,38.1,57.6,42.4,55.3,46.1z" />
									</svg>
								</a>
							<?php endif; ?>
							<?php if ($author__facebook) : ?>
								<a class="sm__icon sm__icon--facebook" href="<?php echo esc_url($author__facebook); ?>" target="_blank">
									<svg fill="#1877f2" width="20" height="20" version="1.1" id="lni_lni-facebook-original" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
										<path d="M59.5,1h-55C2.5,1,1,2.6,1,4.5v55c0,2,1.6,3.5,3.5,3.5h29.6V38.9h-8v-9.3h8v-6.9c0-8,4.8-12.4,12-12.4
									c2.4,0,4.8,0.1,7.2,0.4V19h-4.8c-3.8,0-4.6,1.8-4.6,4.5v5.9H53l-1.3,9.4h-8v23.8h15.8c2,0,3.5-1.5,3.5-3.5V4.5
									C62.9,2.5,61.3,1,59.5,1z" />
									</svg>

								</a>
							<?php endif; ?>
							<?php if ($author__instagram) : ?>
								<a class="sm__icon sm__icon--instagram" href="<?php echo esc_url($author__instagram); ?>" target="_blank">
									<svg fill="#405de6" width="20" height="20" version="1.1" id="lni_lni-instagram-original" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
										<g>
											<path d="M62.9,19.2c-0.1-3.2-0.7-5.5-1.4-7.6S59.7,7.8,58,6.1s-3.4-2.7-5.4-3.5c-2-0.8-4.2-1.3-7.6-1.4C41.5,1,40.5,1,32,1
														s-9.4,0-12.8,0.1s-5.5,0.7-7.6,1.4S7.8,4.4,6.1,6.1s-2.8,3.4-3.5,5.5c-0.8,2-1.3,4.2-1.4,7.6S1,23.5,1,32s0,9.4,0.1,12.8
														c0.1,3.4,0.7,5.5,1.4,7.6c0.7,2.1,1.8,3.8,3.5,5.5s3.5,2.8,5.5,3.5c2,0.7,4.2,1.3,7.6,1.4C22.5,63,23.4,63,31.9,63s9.4,0,12.8-0.1
														s5.5-0.7,7.6-1.4c2.1-0.7,3.8-1.8,5.5-3.5s2.8-3.5,3.5-5.5c0.7-2,1.3-4.2,1.4-7.6c0.1-3.2,0.1-4.2,0.1-12.7S63,22.6,62.9,19.2z
														M57.3,44.5c-0.1,3-0.7,4.6-1.1,5.8c-0.6,1.4-1.3,2.5-2.4,3.5c-1.1,1.1-2.1,1.7-3.5,2.4c-1.1,0.4-2.7,1-5.8,1.1
														c-3.2,0-4.2,0-12.4,0s-9.3,0-12.5-0.1c-3-0.1-4.6-0.7-5.8-1.1c-1.4-0.6-2.5-1.3-3.5-2.4c-1.1-1.1-1.7-2.1-2.4-3.5
														c-0.4-1.1-1-2.7-1.1-5.8c0-3.1,0-4.1,0-12.4s0-9.3,0.1-12.5c0.1-3,0.7-4.6,1.1-5.8c0.6-1.4,1.3-2.5,2.3-3.5
														c1.1-1.1,2.1-1.7,3.5-2.3c1.1-0.4,2.7-1,5.8-1.1c3.2-0.1,4.2-0.1,12.5-0.1s9.3,0,12.5,0.1c3,0.1,4.6,0.7,5.8,1.1
														c1.4,0.6,2.5,1.3,3.5,2.3c1.1,1.1,1.7,2.1,2.4,3.5c0.4,1.1,1,2.7,1.1,5.8c0.1,3.2,0.1,4.2,0.1,12.5S57.4,41.3,57.3,44.5z" />
											<path d="M32,16.1c-8.9,0-15.9,7.2-15.9,15.9c0,8.9,7.2,15.9,15.9,15.9S48,40.9,48,32S40.9,16.1,32,16.1z M32,42.4
														c-5.8,0-10.4-4.7-10.4-10.4S26.3,21.6,32,21.6c5.8,0,10.4,4.6,10.4,10.4S37.8,42.4,32,42.4z" />
											<ellipse cx="48.7" cy="15.4" rx="3.7" ry="3.7" />
										</g>
									</svg>
								</a>
							<?php endif; ?>
							<?php if ($author__youtube) : ?>
								<a class="sm__icon sm__icon--youtube" href="<?php echo esc_url($author__youtube); ?>" target="_blank">
									<svg fill="#ff0000" width="20" height="20" version="1.1" id="lni_lni-youtube" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
										<path d="M61.7,17.1c-0.7-2.7-2.8-4.8-5.5-5.5C51.4,10.3,32,10.3,32,10.3s-19.4,0-24.2,1.3c-2.7,0.7-4.8,2.8-5.5,5.5C1,22,1,32,1,32
												s0,10.1,1.3,14.9c0.7,2.7,2.8,4.8,5.5,5.5c4.8,1.3,24.2,1.3,24.2,1.3s19.4,0,24.2-1.3c2.7-0.7,4.8-2.8,5.5-5.5C63,42.1,63,32,63,32
												S63,22,61.7,17.1z M25.8,41.3V22.7L41.9,32L25.8,41.3z" />
									</svg>
								</a>
							<?php endif; ?>
							<?php if ($author__twitter) : ?>
								<a class="sm__icon sm__icon--twitter" href="<?php echo esc_url($author__twitter); ?>" target="_blank">
									<svg fill="#00aeef" width="20" height="20" version="1.1" id="lni_lni-twitter-original" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
										<path d="M20.3,57.4c23.6,0,36.4-19.5,36.4-36.4c0-0.4,0-1.1-0.1-1.7c2.5-1.8,4.7-4.1,6.4-6.6c-2.4,1.1-4.8,1.7-7.3,2
								c2.7-1.6,4.7-4.1,5.6-7.1c-2.5,1.4-5.1,2.5-8.2,3.1c-2.4-2.5-5.6-4.1-9.3-4.1c-7.1,0-12.9,5.8-12.9,12.9c0,1,0.1,2,0.3,3
								C20.9,21.8,11.5,16.7,5.1,9c-1.1,2-1.7,4.1-1.7,6.4c0,4.5,2.3,8.3,5.8,10.6c-2.1-0.1-4.1-0.7-5.8-1.6c0,0.1,0,0.1,0,0.1
								c0,6.1,4.4,11.4,10.2,12.6c-1.1,0.3-2.3,0.4-3.2,0.4c-0.8,0-1.7-0.1-2.4-0.3c1.7,5.1,6.4,8.8,12,8.9c-4.4,3.4-9.9,5.5-15.8,5.5
								C3,51.8,2,51.6,1,51.5C6.4,55.3,13.1,57.4,20.3,57.4" />
									</svg>
								</a>
							<?php endif; ?>
							<?php if ($author__linkedin) : ?>
								<a class="sm__icon sm__icon--linkedin" href="<?php echo esc_url($author__linkedin); ?>" target="_blank">
									<svg fill="#0077b5" width="20" height="20" version="1.1" id="lni_lni-linkedin-original" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
										<path d="M58.5,1H5.6C3.1,1,1.1,3,1.1,5.5v53c0,2.4,2,4.5,4.5,4.5h52.7c2.5,0,4.5-2,4.5-4.5V5.4C63,3,61,1,58.5,1z M19.4,53.7h-9.1
								V24.2h9.1V53.7z M14.8,20.1c-3,0-5.3-2.4-5.3-5.3s2.4-5.3,5.3-5.3s5.3,2.4,5.3,5.3S17.9,20.1,14.8,20.1z M53.9,53.7h-9.1V39.4
								c0-3.4-0.1-7.9-4.8-7.9c-4.8,0-5.5,3.8-5.5,7.6v14.6h-9.1V24.2h8.9v4.1h0.1c1.3-2.4,4.2-4.8,8.7-4.8c9.3,0,11,6,11,14.2v16H53.9z" />
									</svg>
								</a>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<?php if ($author__biography) : ?>
				<div class="bio__biography"><?php echo wp_kses_post($author__biography); ?></div>
			<?php endif; ?>
		</div>
	</div>



	<?php
	czytajkomiksy_post_navigation();

	get_template_part('template-parts/related-posts', get_post_type()); ?>

</footer>