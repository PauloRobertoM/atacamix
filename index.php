<?php get_header(); ?>
    
    <?php $page = 'home'; ?>

    <?php get_template_part('components/vitrine'); ?>

    <section class="palestras">
        <div class="container">
            <h1 class="text-center">OFERTAS</h1>
            <div class="owl-carousel owl-theme owl-palestra">
                <?php
                    $args = array(
                        'posts_per_page' => 10,
                        'post_type'      => 'ofertas',
                    );
                    $ofertas = get_posts($args);
                ?>
                <?php foreach ($ofertas as $oferta) : ?>
                    <div class="item">
                        <?php
                            $pdfs = rwmb_meta('ofertas_pdf', 'type=file', $oferta->ID);
                            $img_ofertas = rwmb_meta('ofertas_foto', 'type=plupload_image', $oferta->ID);
                            foreach ( $pdfs as $pdf ) {
                                echo "<a href='{$pdf['url']}' target='_blank'>";
                                    foreach ( $img_ofertas as $img_oferta ) {
                                        echo "<img src='{$img_oferta['url']}' alt='{$img_oferta['alt']}' />";
                                    }
                                echo "</a>";
                            }
                        ?>
                    </div><!-- item -->
                <?php endforeach; ?>
            </div><!-- owl-carousel -->
        </div><!-- container -->
    </section><!-- ofertas -->

    <section class="depoimentos">
        <div class="container">
            <h1 class="text-center">NOTÍCIAS</h1>
            <div class="owl-carousel owl-theme owl-depoimento">
                <?php
                    $args = array (
                        'post_status'    => 'publish',
                        'pagination'     => true,
                        'posts_per_page' => '10',
                    );
                    $posts = new WP_Query( $args );
                ?>
                <?php if ( $posts->have_posts() ) : ?>
                    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                        <div class="item">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(''); ?>
                                <?php endif; ?>
                                <h4 class="text-center"><?php the_title(); ?></h4>
                            </a>
                            <a href="<?php the_permalink(); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> LEIA MAIS</a>
                        </div><!-- item -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!-- owl-carousel -->
        </div><!-- container -->
    </section><!-- depoimentos -->

    <section class="instagram">
        <div class="container">
            <h1 class="text-center"><a href="https://www.instagram.com/atacamixoficial/" target="_blank">@ATACAMIXOFICIAL</a></h1>
            <div class="itens">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sobre2.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta1.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta2.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sobre2.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta2.jpg">
            </div><!-- itens -->
        </div><!-- container -->
    </section><!-- instagram -->

    <?php get_template_part('content', 'sobre'); ?>

<?php get_footer(); ?>