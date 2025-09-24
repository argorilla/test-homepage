    <footer class="site-footer" role="contentinfo">
        <img
            class="footer-sparkles-img"
            src="<?php echo esc_url( get_template_directory_uri().'/assets/img/footer-sparkles@2x.png'); ?>"
            srcset="<?php echo esc_url( get_template_directory_uri().'/assets/img/footer-sparkles@1x.png'); ?> 1x,
                    <?php echo esc_url( get_template_directory_uri().'/assets/img/footer-sparkles@2x.png'); ?> 2x,
                    <?php echo esc_url( get_template_directory_uri().'/assets/img/footer-sparkles@3x.png'); ?> 3x"
            alt=""
            loading="lazy" decoding="async" fetchpriority="low"
            aria-hidden="true"
        />

        <div class="container footer-hero">
            <h2 class="footer-title hide-mobile">
                <span>Let's create cool</span>
                <span>stuff together!</span>
            </h2>
            <h2 class="footer-title hide-desktop">
                <span>Let's create cool stuff together!</span>
            </h2>

            <div class="footer-cta">
                <a class="btn-circle" href="<?php echo esc_url( get_theme_mod('footer_cta_url', '#contact') ); ?>" aria-label="Open contact">
                    <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M5 19L19 5M9 5h10v10" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </a>
                <a class="btn-pill" href="<?php echo esc_url( get_theme_mod('footer_cta_url', '#contact') ); ?>">
                    <?php echo esc_html( get_theme_mod('footer_cta_text', 'GET IN TOUCH') ); ?>
                </a>
            </div>
        </div>

        <div class="container footer-bar">
            <div class="footer-brand">
                <div class="brand-mark">
                    <?php if ( function_exists('the_custom_logo') && has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                    <?php else : ?>
                    <span class="text-logo">m.</span>
                    <?php endif; ?>
                </div>
                <p class="brand-tagline hide-mobile"><?php echo wp_kses_post( get_theme_mod('footer_tagline', 'AI powered creative and digital agency') ); ?></p>
            </div>

            <nav class="footer-legal" aria-label="<?php esc_attr_e('Legal', 'yourtheme'); ?>">
            <p class="brand-tagline hide-desktop"><?php echo wp_kses_post( get_theme_mod('footer_tagline', 'AI powered creative and digital agency') ); ?></p>
            <?php
            // Prefer menu if set
            if ( has_nav_menu('footer-legal') ) {
                wp_nav_menu([
                'theme_location' => 'footer-legal',
                'container'      => false,
                'menu_class'     => 'legal-list',
                'depth'          => 1,
                ]);
            } else {
                // Fallback: auto links
                $privacy = function_exists('get_privacy_policy_url') ? get_privacy_policy_url() : '#';
                $terms = get_permalink( get_page_by_path('terms') ) ?: get_permalink( get_page_by_path('terms-and-conditions') ) ?: '#';
                echo '<ul class="legal-list">';
                echo '<li><a href="'. esc_url($privacy) .'">'. esc_html__('Privacy policy', 'yourtheme') .'</a></li>';
                echo '<li><a href="'. esc_url($terms)   .'">'. esc_html__('Terms & conditions', 'yourtheme') .'</a></li>';
                echo '</ul>';
            }
            ?>
            </nav>

            <div class="footer-copy">
            <?php echo wp_kses_post( get_theme_mod('footer_copyright', '©' . date('Y') . ' ' . get_bloginfo('name') . '. All rights reserved') ); ?>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
