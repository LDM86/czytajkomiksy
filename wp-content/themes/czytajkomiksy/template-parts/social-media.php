<?php

$text = get_field('sm__text', 'option');
$facebook = get_field('sm__facebook', 'option');
$instagram = get_field('sm__instagram', 'option');
$youtube = get_field('sm__youtube', 'option');
$twitch = get_field('sm__twitch', 'option');
$twitter = get_field('sm__twitter', 'option');
$linkedin = get_field('sm__linkedin', 'option');
$fbgroup = get_field('sm__fbgroup', 'option');
$tiktok = get_field('sm__tiktok', 'option');

?>
<div class="sm__icons">
    <?php if ($facebook) : ?>
        <a class="sm__icon sm__icon--facebook" href="<?php echo wp_kses_post($facebook); ?>">
            <svg fill="#1877f2" width="25" height="25" version="1.1" id="lni_lni-facebook-original" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                <path d="M59.5,1h-55C2.5,1,1,2.6,1,4.5v55c0,2,1.6,3.5,3.5,3.5h29.6V38.9h-8v-9.3h8v-6.9c0-8,4.8-12.4,12-12.4
					c2.4,0,4.8,0.1,7.2,0.4V19h-4.8c-3.8,0-4.6,1.8-4.6,4.5v5.9H53l-1.3,9.4h-8v23.8h15.8c2,0,3.5-1.5,3.5-3.5V4.5
					C62.9,2.5,61.3,1,59.5,1z" />
            </svg>
        </a>
    <?php endif; ?>
    <?php if ($instagram) : ?>
        <a class="sm__icon sm__icon--instagram" href="<?php echo wp_kses_post($instagram); ?>">
            <svg fill="#405de6" width="25" height="25" version="1.1" id="lni_lni-instagram-original" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
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
    <?php if ($youtube) : ?>
        <a class="sm__icon sm__icon--youtube" href="<?php echo wp_kses_post($youtube); ?>">
            <svg fill="#ff0000" width="25" height="25" version="1.1" id="lni_lni-youtube" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                <path d="M61.7,17.1c-0.7-2.7-2.8-4.8-5.5-5.5C51.4,10.3,32,10.3,32,10.3s-19.4,0-24.2,1.3c-2.7,0.7-4.8,2.8-5.5,5.5C1,22,1,32,1,32
							s0,10.1,1.3,14.9c0.7,2.7,2.8,4.8,5.5,5.5c4.8,1.3,24.2,1.3,24.2,1.3s19.4,0,24.2-1.3c2.7-0.7,4.8-2.8,5.5-5.5C63,42.1,63,32,63,32
							S63,22,61.7,17.1z M25.8,41.3V22.7L41.9,32L25.8,41.3z" />
            </svg>
        </a>
    <?php endif; ?>
    <?php if ($twitch) : ?>
        <a class="sm__icon sm__icon--twitch" href="<?php echo wp_kses_post($twitch); ?>">
            <svg fill="#9146ff" width="52" height="52" version="1.1" id="lni_lni-twitch" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                <path d="M6.5,1L2.4,11.7v43.5h14.8V63h8.3l7.9-7.9h12l16.2-16.2V1H6.5z M56,36.1l-9.3,9.3H32l-7.9,7.9v-7.9H11.6V6.5H56V36.1
                L56,36.1z M46.8,17.2v16.2h-5.5V17.2H46.8z M32,17.2v16.2h-5.5V17.2H32z" />
            </svg>
        </a>
    <?php endif; ?>
    <?php if ($twitter) : ?>
        <a class="sm__icon sm__icon--twitter" href="<?php echo wp_kses_post($twitter); ?>">
            <svg fill="#00aeef" width="25" height="25" version="1.1" id="lni_lni-twitter-original" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                <path d="M20.3,57.4c23.6,0,36.4-19.5,36.4-36.4c0-0.4,0-1.1-0.1-1.7c2.5-1.8,4.7-4.1,6.4-6.6c-2.4,1.1-4.8,1.7-7.3,2
							c2.7-1.6,4.7-4.1,5.6-7.1c-2.5,1.4-5.1,2.5-8.2,3.1c-2.4-2.5-5.6-4.1-9.3-4.1c-7.1,0-12.9,5.8-12.9,12.9c0,1,0.1,2,0.3,3
							C20.9,21.8,11.5,16.7,5.1,9c-1.1,2-1.7,4.1-1.7,6.4c0,4.5,2.3,8.3,5.8,10.6c-2.1-0.1-4.1-0.7-5.8-1.6c0,0.1,0,0.1,0,0.1
							c0,6.1,4.4,11.4,10.2,12.6c-1.1,0.3-2.3,0.4-3.2,0.4c-0.8,0-1.7-0.1-2.4-0.3c1.7,5.1,6.4,8.8,12,8.9c-4.4,3.4-9.9,5.5-15.8,5.5
							C3,51.8,2,51.6,1,51.5C6.4,55.3,13.1,57.4,20.3,57.4" />
            </svg>
        </a>
    <?php endif; ?>
    <?php if ($tiktok) : ?>
        <a class="sm__icon sm__icon--tiktok" href="<?php echo esc_url($tiktok); ?>">
            <svg fill="#ff0050" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,
                                188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
            </svg>
        </a>
    <?php endif; ?>
    <?php if ($linkedin) : ?>
        <a class="sm__icon sm__icon--linkedin" href="<?php echo wp_kses_post($linkedin); ?>">
            <svg fill="#0077b5" width="25" height="25" version="1.1" id="lni_lni-linkedin-original" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                <path d="M58.5,1H5.6C3.1,1,1.1,3,1.1,5.5v53c0,2.4,2,4.5,4.5,4.5h52.7c2.5,0,4.5-2,4.5-4.5V5.4C63,3,61,1,58.5,1z M19.4,53.7h-9.1
							 V24.2h9.1V53.7z M14.8,20.1c-3,0-5.3-2.4-5.3-5.3s2.4-5.3,5.3-5.3s5.3,2.4,5.3,5.3S17.9,20.1,14.8,20.1z M53.9,53.7h-9.1V39.4
							 c0-3.4-0.1-7.9-4.8-7.9c-4.8,0-5.5,3.8-5.5,7.6v14.6h-9.1V24.2h8.9v4.1h0.1c1.3-2.4,4.2-4.8,8.7-4.8c9.3,0,11,6,11,14.2v16H53.9z" />
            </svg>
        </a>
    <?php endif; ?>
    <?php if ($fbgroup) : ?>
        <a class="sm__icon sm__icon--fbgroup" href="<?php echo wp_kses_post($fbgroup); ?>">
            <svg fill="#1877f2" width="30" height="30" version="1.1" id="lni_lni-users" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                <g>
                    <path d="M21.5,36.4c6.8,0,12.3-5.5,12.3-12.3s-5.5-12.3-12.3-12.3S9.2,17.3,9.2,24.1S14.7,36.4,21.5,36.4z M21.5,15.3
								c4.8,0,8.8,3.9,8.8,8.8c0,4.9-3.9,8.8-8.8,8.8s-8.8-3.9-8.8-8.8C12.7,19.2,16.6,15.3,21.5,15.3z" />
                    <path d="M21.5,40.8c-7.3,0-14.3,3-19.7,8.4c-0.7,0.7-0.7,1.8,0,2.5C2.1,52,2.6,52.2,3,52.2c0.5,0,0.9-0.2,1.2-0.5
								c4.7-4.8,10.8-7.4,17.2-7.4c6.3,0,12.4,2.6,17.2,7.4c0.7,0.7,1.8,0.7,2.5,0c0.7-0.7,0.7-1.8,0-2.5C35.7,43.8,28.7,40.8,21.5,40.8z" />
                    <path d="M47.8,36.4c3.9,0,7-3.2,7-7s-3.2-7-7-7s-7,3.2-7,7S43.9,36.4,47.8,36.4z M47.8,25.8c1.9,0,3.5,1.6,3.5,3.5
								s-1.6,3.5-3.5,3.5s-3.5-1.6-3.5-3.5S45.9,25.8,47.8,25.8z" />
                    <path d="M62.2,46.5c-5.3-5-12.7-6.9-20.1-5c-0.9,0.2-1.5,1.2-1.3,2.1c0.2,0.9,1.2,1.5,2.1,1.3c6.2-1.6,12.4,0,16.8,4.2
								c0.3,0.3,0.8,0.5,1.2,0.5c0.5,0,0.9-0.2,1.3-0.6C62.9,48.3,62.9,47.2,62.2,46.5z" />
                </g>
            </svg>
        </a>
    <?php endif; ?>

</div>