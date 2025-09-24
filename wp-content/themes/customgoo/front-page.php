<?php get_header(); ?>

<main id="site-content">
    <!-- Hero Section -->
    <?php $hero_bg = get_field('hero_background'); ?>
    <section class="hero" style="--hero-bg: url('<?php echo esc_url($hero_bg['url'] ?? ''); ?>')">
        <header class="site-header">
            <div class="header-inner container">
            <?php if ( has_custom_logo() ) : ?>
                <div class="brand">
                    <svg width="60" height="34" viewBox="0 0 60 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.9294 0.199951C29.1361 0.219018 25.7102 1.82062 23.2491 4.38828C20.7881 1.82062 17.3621 0.219018 13.5689 0.199951C6.06752 0.235966 0 6.45385 0 14.1208V33.7659H7.77946V14.4619C7.77946 11.1909 10.3691 8.53636 13.571 8.52153C16.7728 8.53636 19.3625 11.1909 19.3625 14.4619V33.7659H27.142V14.4619C27.142 11.1909 29.7317 8.53636 32.9335 8.52153C36.1353 8.53636 38.725 11.1909 38.725 14.4619V33.7659H46.5045V14.1208C46.5045 6.45385 40.4349 0.235966 32.9356 0.199951H32.9294Z" fill="white"/>
                        <path d="M51.3153 29.766C51.3153 27.5568 53.1152 25.766 55.3243 25.766C57.5335 25.766 59.3333 27.5568 59.3333 29.766C59.3333 31.9751 57.5335 33.766 55.3243 33.766C53.1152 33.766 51.3153 31.9751 51.3153 29.766Z" fill="white"/>
                    </svg>
                </div>
                <?php else : ?>
                <a class="brand" href="<?php echo esc_url( home_url('/') ); ?>">
                    <span class="text-logo">m.</span>
                </a>
                <?php endif; ?>

                <div class="header-actions">
                    <div class="cta-header">
                        <a class="btn-circle arrow" href="<?php echo esc_url(get_field('hero_cta_link') ?: '#contact'); ?>" aria-label="Go to contact">
                            <svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M5 19L19 5M9 5h10v10" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </a>

                        <a class="btn-contact-us" href="<?php echo esc_url(get_field('hero_cta_link') ?: '#contact'); ?>" aria-label="Go to contact">
                        Contact
                        </a>
                    </div>

                    <?php if (get_field('hero_cta_link') && get_field('hero_cta_text')): ?>
                    <a href="<?php the_field('hero_cta_link'); ?>" class="btn-pill contact">
                        <?php the_field('hero_cta_text'); ?>
                    </a>
                    <?php endif; ?>

                    <button class="btn-pill lang" type="button" aria-haspopup="menu" aria-expanded="false" aria-controls="lang-menu">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1342_3096)">
                                <path d="M12.8333 7.00008C12.8333 10.2217 10.2216 12.8334 6.99996 12.8334M12.8333 7.00008C12.8333 3.77842 10.2216 1.16675 6.99996 1.16675M12.8333 7.00008H1.16663M6.99996 12.8334C3.7783 12.8334 1.16663 10.2217 1.16663 7.00008M6.99996 12.8334C8.45904 11.236 9.28823 9.16306 9.33329 7.00008C9.28823 4.8371 8.45904 2.76412 6.99996 1.16675M6.99996 12.8334C5.54088 11.236 4.71169 9.16306 4.66663 7.00008C4.71169 4.8371 5.54088 2.76412 6.99996 1.16675M1.16663 7.00008C1.16663 3.77842 3.7783 1.16675 6.99996 1.16675" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1342_3096">
                                    <rect width="14" height="14" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <span>EN</span>
                    </button>

                    <button class="hamburger hide-mobile" type="button" aria-label="Open menu" aria-controls="primary-drawer" aria-expanded="false">
                        <span class="burger"></span>
                    </button>
                </div>
            </div>

            <nav id="primary-drawer" class="nav-drawer" hidden>
                <div class="drawer-inner">
                    <div class="drawer-top container">
                        <div class="drawer-actions">
                            <div class="cta-header">
                                <a class="btn-circle arrow" href="<?php echo esc_url(get_field('hero_cta_link') ?: '#contact'); ?>" aria-label="Contact">
                                    <svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M5 19L19 5M9 5h10v10" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </a>
                                <a class="btn-contact-us" href="<?php echo esc_url(get_field('hero_cta_link') ?: '#contact'); ?>" aria-label="Go to contact">
                                Contact
                                </a>
                            </div>
                            <button class="btn-pill lang" type="button">
                                <svg width="16" height="16" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3a9 9 0 100 18 9 9 0 000-18Zm0 0c3 2.5 3 15.5 0 18M3 12h18" fill="none" stroke="currentColor" stroke-width="2"/></svg>
                                <span>EN</span>
                            </button>
                            <button class="drawer-close" type="button" aria-label="Close menu">
                                <span></span>
                            </button>
                        </div>
                    </div>

                    <div class="drawer-content container">
                        <figure class="drawer-visual">
                            <?php
                            $menu_img = get_field('menu_image') ?: get_field('hero_background');
                            if ($menu_img) {
                                echo wp_get_attachment_image($menu_img['ID'] ?? $menu_img, 'large', false, ['alt'=>'','loading'=>'eager','decoding'=>'async']);
                            }
                            ?>
                        </figure>

                        <div class="drawer-nav">
                            <div class="drawer-label">Navigation</div>
                            <?php
                            if (has_nav_menu('primary')) {
                                wp_nav_menu([
                                'theme_location' => 'primary',
                                'container'      => false,
                                'menu_class'     => 'drawer-menu',
                                'depth'          => 1,
                                ]);
                            } else {
                                echo '<ul class="drawer-menu"><li><a href="#">Home</a></li><li><a href="#">Services</a></li><li><a href="#">Case</a></li><li><a href="#">About</a></li><li><a href="#">Stories</a></li></ul>';
                            }
                            ?>
                        </div>

                        <div class="drawer-info">
                            <div class="info-block">
                                <div class="drawer-label">About</div>
                                <p><?php
                                    echo esc_html( get_field('menu_about', 'option') ?:
                                    'Based in Bali Indonesia, Maju is a digital creative agency at the forefront of innovation, specializing in the design of digital solutions integrating artificial intelligence (AI)' );
                                ?></p>
                                </div>

                                <div class="info-block">
                                    <div class="drawer-label">Contact</div>
                                    <p>
                                        A: <?php echo esc_html( get_field('company_address','option') ?: 'Kuta, South Lombok' ); ?><br>
                                        E: <a class="contact-mail" href="mailto:<?php echo antispambot(get_field('company_email','option') ?: 'info@maju.agency'); ?>">
                                        <?php echo antispambot(get_field('company_email','option') ?: 'info@maju.agency'); ?></a><br>
                                        P: <?php echo esc_html( get_field('company_phone','option') ?: '+62 (0) 818 0304 2211' ); ?><br>
                                        H: <?php echo esc_html( get_field('company_hours','option') ?: 'Mon–Fri from 8am–5pm.' ); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="drawer-bottom container">
                            <div class="footer-brand">
                                <?php if (has_custom_logo()) { the_custom_logo(); } else { echo '<span class="text-logo">m.</span>'; } ?>
                                <p class="brand-tagline"><?php echo wp_kses_post( get_theme_mod('footer_tagline','AI powered creative and digital agency') ); ?></p>
                            </div>

                            <nav class="footer-legal" aria-label="<?php esc_attr_e('Legal','yourtheme'); ?>">
                                <?php
                                if ( has_nav_menu('footer-legal') ) {
                                    wp_nav_menu(['theme_location'=>'footer-legal','container'=>false,'menu_class'=>'legal-list','depth'=>1]);
                                } else {
                                    $privacy = function_exists('get_privacy_policy_url') ? get_privacy_policy_url() : '#';
                                    $terms = get_permalink(get_page_by_path('terms')) ?: get_permalink(get_page_by_path('terms-and-conditions')) ?: '#';
                                    echo '<ul class="legal-list"><li><a href="'.esc_url($privacy).'">Privacy policy</a></li><li><a href="'.esc_url($terms).'">Terms & conditions</a></li></ul>';
                                }
                                ?>
                            </nav>

                        <div class="footer-copy">
                            <?php echo wp_kses_post( get_theme_mod('footer_copyright','©'.date('Y').' '.get_bloginfo('name').'. All rights reserved') ); ?>
                        </div>
                    </div>

                </div>
                <button class="drawer-backdrop" tabindex="-1" aria-hidden="true"></button>
            </nav>
        </header>

        <div class="hero-inner container">
            <?php
                $hero_word = get_field('hero_word_image');
                $title_text = get_field('hero_title') ?: 'MAJU';
            ?>

            <h1 class="visually-hidden"><?php echo esc_html($title_text); ?></h1>

            <?php if ($hero_word): ?>
                <svg width="343" height="85" viewBox="0 0 343 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M82.7182 0.0258789C73.1896 0.0738822 64.5837 4.10616 58.4016 10.5706C52.2195 4.10616 43.6135 0.0738822 34.085 0.0258789C15.2415 0.116552 0 15.771 0 35.0736V84.5331H19.5419V35.9324C19.5419 27.6971 26.0472 21.014 34.0902 20.9767C42.1332 21.014 48.6384 27.6971 48.6384 35.9324V84.5331H68.1803V35.9324C68.1803 27.6971 74.6856 21.014 82.7286 20.9767C90.7716 21.014 97.2769 27.6971 97.2769 35.9324V84.5331H116.819V35.0736C116.819 15.771 101.572 0.116552 82.7338 0.0258789H82.7182Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M161.553 0.0258789C142.318 0.116552 126.761 15.771 126.761 35.0736V84.5331H146.708V68.2439H176.408V84.5331H196.355V35.0736C196.355 15.771 180.792 0.116552 161.563 0.0258789H161.553ZM146.703 49.1599V35.927C146.703 27.6918 153.343 21.0087 161.553 20.9713C169.762 21.0087 176.402 27.6918 176.402 35.927V49.1599H146.703Z" fill="white"/>
                    <path d="M308.208 84.5331C327.442 84.4424 343 68.788 343 49.4853V0.0258789H323.053V48.6266C323.053 56.8618 316.413 63.5449 308.203 63.5823C299.993 63.5449 293.353 56.8618 293.353 48.6266V0.0258789H273.406V49.4853C273.406 68.788 288.969 84.4424 308.198 84.5331H308.208Z" fill="white"/>
                    <path d="M246.321 0.0258789V48.6266C246.321 56.8618 239.787 63.5449 231.708 63.5823C225.405 63.5503 220.08 59.742 218.038 54.131L201.326 65.5771C207.022 76.7885 218.478 84.469 231.714 84.5331C250.64 84.4424 265.949 68.788 265.949 49.4853V0.0258789H246.321Z" fill="white"/>
                </svg>
            <?php else: ?>
                <h1 class="hero-word"><?php echo esc_html($title_text); ?></h1>
            <?php endif; ?>

            <?php if (get_field('hero_subtitle')): ?>
                <div class="hero-tagline"><?php the_field('hero_subtitle'); ?></div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <span class="title-tag">/ Our services</span>
            <h2 class="section-heading">
                <span class="primary"><?php the_field('services_heading_primary'); ?></span>
                <span class="secondary"><?php the_field('services_heading_secondary'); ?></span>
            </h2>
            <div class="service-table">
            <?php
            $i = 1;
            $services = new WP_Query(array(
                'post_type'         => 'service',
                'posts_per_page'    => -1,
                'order'             => 'ASC',
            ));
            if ($services->have_posts()) :
                while ($services->have_posts()) : $services->the_post(); ?>
                <div class="service-row">
                    <div class="service-col index">
                    ( <?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?> )
                    </div>
                    <div class="service-col title hide-mobile">
                    <?php the_title(); ?>
                    </div>
                    <div class="service-col content">
                        <div class="service-col title hide-desktop">
                        <?php the_title(); ?>
                        </div>
                        <span><?php echo wp_trim_words(get_the_content(), 25); ?></span>
                    </div>
                </div>
            <?php 
                $i++;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio">
        <div class="container heading-row">
            <div class="heading-text">
                <span class="title-tag">/ Selected Work</span>
                <h2 class="section-heading">
                    <span class="primary"><?php the_field('portfolio_heading_primary'); ?></span>
                    <span class="secondary"><?php the_field('portfolio_heading_secondary'); ?></span>
                </h2>
            </div>

            <!-- Thumbnail dynamic, isi nanti via JS -->
            <div class="heading-thumb hide-mobile">
                <img src="" alt="Portfolio preview" />
            </div>
        </div>

        <div class="swiper portfolio-swiper">
            <div class="swiper-wrapper">
                <?php
                $projects = new WP_Query(array(
                    'post_type'         => 'portfolio',
                    'posts_per_page'    => -1,
                    'order'             => 'ASC',
                ));
                $total_posts = $projects->found_posts;
                if ($projects->have_posts()) :
                    while ($projects->have_posts()) : $projects->the_post();
                        $subtitle = get_field('portfolio_subtitle');
                        $meta     = get_field('portfolio_meta');
                        $button   = get_field('portfolio_button_text') ?: '[ READ CASE ]';
                        $mockup   = get_field('portfolio_mockup');
                ?>
                    <div class="swiper-slide portfolio-item"
                        data-thumb="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'medium')); ?>"
                        style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');">
                        <div class="slide-overlay">
                            <div class="slide-top">
                                <?php if ($meta): ?>
                                    <span class="slide-meta"><?php echo esc_html($meta); ?></span>
                                <?php endif; ?>
                                <div class="slide-counter">
                                    <span class="current">01</span> - <span class="total"><?php echo str_pad($total_posts, 2, '0', STR_PAD_LEFT); ?></span>
                                </div>
                            </div>
                            
                            <div class="slide-bottom">
                                <div class="slide-col slide-text">
                                    <?php if ($subtitle): ?>
                                        <h3 class="slide-subtitle"><?php echo esc_html($subtitle); ?></h3>
                                    <?php endif; ?>
                                    <h2 class="slide-title"><?php the_title(); ?></h2>
                                </div>
                                <div class="slide-col slide-mockup">
                                    <div class="slide-col slide-btn hide-mobile">
                                        <a href="<?php the_permalink(); ?>" class="btn-readcase"><?php echo esc_html($button); ?></a>
                                    </div>
                                    <?php if ($mockup): ?>
                                        <img class="hide-mobile" src="<?php echo esc_url($mockup['url']); ?>" alt="<?php echo esc_attr($mockup['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <span class="title-tag">/ About MAJU</span>
            <h2 class="section-heading">
                <span class="primary"><?php the_field('about_heading_primary'); ?></span>
                <span class="secondary"><?php the_field('about_heading_secondary'); ?></span>
            </h2>
            <div class="about-vision-mission">
                <div class="vision">
                    <p><?php the_field('about_content_vision'); ?></p>
                </div>

                <div class="mission-cta">
                    <div class="mission-wrap">
                        <p class="mission"><?php the_field('about_content_mission'); ?></p>
                        <div class="about-cta btn-rounded hide-mobile">
                            <a href="<?php echo esc_url(get_field('about_cta_link')); ?>"
                                class="btn-icon"
                                aria-label="<?php echo esc_attr(get_field('about_cta_text')); ?>">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 13L13 1M13 1L4 1M13 1L13 10"
                                        stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="<?php echo esc_url(get_field('about_cta_link')); ?>" class="btn">
                                <?php echo esc_html(get_field('about_cta_text')); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <?php
    $vid_mp4   = get_field('promo_video_mp4');
    $vid_webm  = get_field('promo_video_webm');
    $poster    = get_field('promo_video_poster');
    ?>
    <?php if ( $vid_mp4 ) : ?>
    <section class="preview-video section">
        <div class="preview-video__wrap">
            <video
                class="preview-video__el"
                autoplay
                muted
                playsinline
                loop
                preload="metadata"
                <?php if ($poster) : ?>
                    poster="<?php echo esc_url($poster['url']); ?>"
                <?php endif; ?>
                aria-label="<?php echo esc_attr(get_field('promo_video_label') ?: 'Promotional video'); ?>">
                <?php if ($vid_webm) : ?>
                    <source src="<?php echo esc_url($vid_webm['url']); ?>" type="<?php echo esc_attr($vid_webm['mime_type'] ?: 'video/webm'); ?>">
                <?php endif; ?>
                <source src="<?php echo esc_url($vid_mp4['url']); ?>" type="<?php echo esc_attr($vid_mp4['mime_type'] ?: 'video/mp4'); ?>">
                <!-- Fallback image -->
                <?php if ($poster) : ?>
                    <img src="<?php echo esc_url($poster['url']); ?>" alt="">
                <?php endif; ?>
            </video>
        </div>
        <noscript>
            <?php if ($poster) : ?>
            <img class="preview-video__poster" src="<?php echo esc_url($poster['url']); ?>" alt="">
            <?php endif; ?>
        </noscript>
    </section>
    <?php endif; ?>

    <!-- Why Work With Us Section -->
    <section class="why" aria-labelledby="why-heading">
        <div class="container">
            <span class="title-tag">/ why work with us</span>
            <h2 id="why-heading" class="section-heading">
                <span class="primary"><?php the_field('why_heading_primary'); ?></span>
                <span class="secondary"><?php the_field('why_heading_secondary'); ?></span>
            </h2>

            <?php
                $q = new WP_Query([
                    'post_type'      => 'why_item',
                    'posts_per_page' => 4,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                ]);
                $landing_id = get_queried_object_id();
            ?>

            <?php if ($q->have_posts()) : ?>
                <div class="why-list">
                    <?php $i = 1; while ($q->have_posts()) : $q->the_post(); ?>
                    <article class="why-card">
                        <div class="why-num"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></div>
                        <div class="why-body">
                            <h3 class="why-title"><?php the_title(); ?></h3>
                            <p class="why-desc">
                                <?php echo has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 30); ?>
                            </p>
                        </div>
                    </article>
                    <?php $i++; endwhile; wp_reset_postdata(); ?>

                    <article class="why-card why-card-cta">
                        <div class="why-num" aria-hidden="true"></div>
                        <div class="why-body">
                            <div class="why-cta">
                            <a href="<?php echo esc_url(get_field('why_cta_link', $landing_id)); ?>"
                                class="btn-icon" aria-label="<?php echo esc_attr(get_field('why_cta_text', $landing_id)); ?>">
                                <span class="icon">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 13L13 1M13 1L4 1M13 1L13 10"
                                        stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </span>
                            </a>
                            <a href="<?php echo esc_url(get_field('why_cta_link', $landing_id)); ?>" class="btn">
                                <?php echo esc_html(get_field('why_cta_text', $landing_id)); ?>
                            </a>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Stories Section -->
    <section class="stories" aria-labelledby="stories-heading">
        <div class="container">
            <p class="eyebrow"><?php echo esc_html( get_field('stories_label') ?: '/ STORIES' ); ?></p>

            <h2 id="stories-heading" class="section-heading">
                <span class="primary">
                    <?php echo esc_html( get_field('stories_heading_primary') ?: 'Thoughts, stories, and lessons' ); ?>
                </span>
                <span class="secondary">
                    <?php echo esc_html( get_field('stories_heading_secondary') ?: 'from the design trenches' ); ?>
                </span>
            </h2>

            <?php
                $q = new WP_Query([
                    'post_type'      => 'story',
                    'posts_per_page' => 3,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                ]);
            ?>

            <?php if ( $q->have_posts() ) : ?>
            <div class="stories-list">
                <?php $index = 0; while ( $q->have_posts() ) : $q->the_post(); $index++; ?>
                <?php
                    $terms = get_the_terms( get_the_ID(), 'category' );
                    $cat   = ($terms && !is_wp_error($terms)) ? $terms[0]->name : '';
                    $is_featured = ($index === 1); // kartu pertama = overlay
                ?>

                <article class="story-card<?php echo $is_featured ? ' featured' : ''; ?>">
                    <a class="story-thumb" href="<?php the_permalink(); ?>">
                    <?php
                        if ( has_post_thumbnail() ) {
                        the_post_thumbnail('story-card', ['loading' => 'lazy']);
                        }
                    ?>
                    </a>

                    <?php if ( $is_featured ) : ?>
                    <div class="story-overlay">
                        <?php if ($cat) : ?><span class="cat"><?php echo esc_html($cat); ?></span><?php endif; ?>
                        <h3 class="story-title"><?php the_title(); ?></h3>
                    </div>
                    <?php else : ?>
                    <div class="story-meta">
                        <?php if ($cat) : ?><span class="cat"><?php echo esc_html($cat); ?></span><?php endif; ?>
                    </div>
                    <h3 class="story-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <?php endif; ?>
                </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
