<?php get_header(); ?>
    
    <?php
        $args = array (
            'post_status'    => 'publish',
            'pagination'     => true,
            'posts_per_page' => '10',
        );
        $posts = new WP_Query( $args );
    ?>

    <section class="titulo-interno">
        <h1 class="text-center">BLOG</h1>
    </section><!-- titulo-interno -->

    <section class="interna blog">
        <div class="container">
            <div class="listagem">
                <div class="row">
                <?php if ( $posts->have_posts() ) : ?>
                    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                        <?php $dia = get_the_date('d'); ?>
                        <?php $mes = ucfirst(get_the_date('m')); ?>
                        <?php $ano = get_the_date('Y'); ?>
                        
                            <div class="col-md-6 col-sm-6">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('responsive-img'); ?>
                                            <?php endif; ?>
                                        </div><!-- md-5 -->
                                        <div class="col-md-7 col-sm-7">
                                            <span><?php echo "{$dia}.{$mes}.{$ano}"; ?></span>
                                            <h2><?php the_title(); ?></h2>
                                            <a href="<?php the_permalink(); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> LEIA MAIS</a>
                                        </div><!-- md-7 -->
                                    </div><!-- row -->
                                </div><!-- item -->
                            </div><!-- md-6 -->
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                </div><!-- row -->
            </div><!-- listagem -->
        </div><!-- container -->
    </section><!-- interna -->

<?php get_footer(); ?>