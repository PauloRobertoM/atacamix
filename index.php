<?php get_header(); ?>
    
    <?php $page = 'home'; ?>

    <?php get_template_part('components/vitrine'); ?>

    <section class="palestras">
        <div class="container">
            <h1 class="text-center">OFERTAS</h1>
            <div class="owl-carousel owl-theme owl-palestra">
                <?php
                    $args = array(
                        'posts_per_page' => 20,
                        'post_type'      => 'categorias',
                    );
                    $categorias = get_posts($args);
                ?>
                <?php foreach ($categorias as $categoria) : ?>
                    <?php $cat_categoria = $categoria->categorias_categoria; ?>
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
                            <a href="<?php echo site_url('palestra?cat='); ?><?= $cat_categoria ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i> SAIBA MAIS</a>
                        </div><!-- conteudo -->
                    </div><!-- item -->
                <?php endforeach; ?>
            </div><!-- owl-carousel -->
        </div><!-- container -->
    </section><!-- categorias -->

    <section class="depoimentos">
        <div class="container">
            <h1 class="text-center">DEPOIMENTOS</h1>
            <div class="owl-carousel owl-theme owl-depoimento">
                <?php
                    $args = array(
                        'posts_per_page' => 20,
                        'post_type'      => 'depoimentos',
                    );
                    $depoimentos = get_posts($args);
                ?>
                <?php foreach ($depoimentos as $depoimento) : ?>
                    <?php $tit_depoimento = $depoimento->post_title; ?>
                    <?php $corpo_depoimento = $depoimento->post_content; ?>
                    <div class="item">
                        <h4 class="text-center">"<?= $corpo_depoimento ?>"</h4>
                        <p class="text-center"><?= $tit_depoimento ?></p>
                    </div><!-- item -->
                <?php endforeach; ?>
            </div><!-- owl-carousel -->
        </div><!-- container -->
    </section><!-- depoimentos -->

    <section class="instagram">
        <div class="container">
            <h1 class="text-center">@ATACAMIX</h1>
            
        </div><!-- container -->
    </section><!-- instagram -->

    <?php get_template_part('content', 'sobre'); ?>

<?php get_footer(); ?>