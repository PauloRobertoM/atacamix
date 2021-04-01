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
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="listagem">
                        <?php if ( $posts->have_posts() ) : ?>
                            <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                                <?php $dia = get_the_date('d'); ?>
                                <?php $mes = ucfirst(get_the_date('m')); ?>
                                <?php $ano = get_the_date('Y'); ?>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('responsive-img'); ?>
                                            <?php endif; ?>
                                        </div><!-- md-6 -->
                                        <div class="col-md-6 col-sm-6">
                                            <span><?php echo "{$dia}.{$mes}.{$ano}"; ?></span>
                                            <h2><?php the_title(); ?></h2>
                                            <a href="<?php the_permalink(); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> LEIA MAIS</a>
                                        </div><!-- md-6 -->
                                    </div><!-- row -->
                                </div><!-- item -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div><!-- listagem -->
                </div><!-- md-8 -->
                <div class="col-md-4 col-sm-4">
                    <aside>
                        <div class="banner">
                            <a href="<?php echo site_url('contrate'); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-sidebar.jpg" class="img-responsive" />
                            </a>
                        </div><!-- banner -->
                        <div class="perfil-sid">
                            <h4>MARCOS MEIER</h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/perfil-sidebar.jpg" class="img-responsive" />
                            <p style="color: #616162;">Psicólogo, professor de matemática, escritor e mestre em educação. Psicólogo, professor de matemática, escritor e mestre em educação. Psicólogo, professor de matemática, escritor e mestre em educação. Psicólogo, professor de matemática, escritor e mestre em educação.</p>
                        </div><!-- perfil-sid -->
                        <div class="palestras perfil-sid">
                            <h4>PALESTRAS</h4>
                            <div class="owl-carousel owl-theme owl-palestra-sid">
                                <?php
                                    $args = array(
                                        'posts_per_page' => 20,
                                        'post_type'      => 'categorias',
                                    );
                                    $categorias = get_posts($args);
                                ?>
                                <?php foreach ($categorias as $categoria) : ?>
                                    <?php $tit_categoria = $categoria->post_title; ?>
                                    <?php $subtit_categoria = $categoria->categorias_subtitulo; ?>
                                    <?php $cor = $categoria->categorias_cor; ?>
                                    <div class="item">
                                        <?php
                                            $categorias = rwmb_meta('categorias_foto', 'type=plupload_image', $categoria->ID);
                                            foreach ( $categorias as $categoria ) {
                                                echo "<img src='{$categoria['url']}' alt='{$categoria['alt']}' />";
                                            }
                                        ?>
                                        <div class="conteudo" style="background: <?= $cor ?>;">
                                            <h2><?= $tit_categoria ?></h2>
                                            <p><?= $subtit_categoria ?></p>
                                            <a href="<?php the_permalink($categoria->ID); ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i> SAIBA MAIS</a>
                                        </div><!-- conteudo -->
                                    </div><!-- item -->
                                <?php endforeach; ?>
                            </div><!-- owl-carousel -->
                        </div><!-- perfil-sid -->
                    </aside>
                </div><!-- md-4 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- interna -->

<?php get_footer(); ?>