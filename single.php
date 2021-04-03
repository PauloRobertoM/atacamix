<?php get_header(); ?>

    <section class="titulo-interno">
        <h1 class="text-center">BLOG</h1>
    </section><!-- titulo-interno -->

    <section class="interna blog-interna">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <?php $dia = get_the_date('d'); ?>
                    <?php $mes = ucfirst(get_the_date('m')); ?>
                    <?php $ano = get_the_date('Y'); ?>
                    <span><?php echo "{$dia}.{$mes}.{$ano}"; ?></span>
                    <h2><?php the_title(); ?></h2>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(''); ?>
                        <?php endif; ?>
                        <p><?php the_content(); ?></p>
                    <?php endwhile; endif; ?>
                </div><!-- md-8 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- interna -->
  
<?php get_footer(); ?>