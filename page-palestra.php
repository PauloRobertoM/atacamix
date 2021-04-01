<?php get_header(); ?>

    <?php $url = $_SERVER['REQUEST_URI']; ?>

    <section class="titulo-interno">
        <h1 class="text-center">PALESTRAS</h1>
        <?php
            $args = array(
                'posts_per_page' => 1,
                'post_type'      => 'categorias',
            );
            $categorias = get_posts($args);
        ?>
        <?php foreach ($categorias as $categoria) : ?>
            <?php if ($url == "/palestra/?cat=Categoria1") { ?>
                <h2 class="text-center">Qualidade de Vida</h2>
            <?php } ?>
            <?php if ($url == "/palestra/?cat=Categoria2") { ?>
                <h2 class="text-center">Educação de filhos</h2>
            <?php } ?>
            <?php if ($url == "/palestra/?cat=Categoria3") { ?>
                <h2 class="text-center">Relacionamento interpessoal nas empresas</h2>
            <?php } ?>
            <?php if ($url == "/palestra/?cat=Categoria4") { ?>
                <h2 class="text-center">FORMAÇÃO DE PROFESSORES</h2>
            <?php } ?>
		 <?php if ($url == "/palestra/?cat=Categoria5") { ?>
                <h2 class="text-center">YOUBUNTU CURSOS</h2>
            <?php } ?>
        <?php endforeach; ?>
    </section><!-- titulo-interno -->

    <section class="interna palestras-listagem">
        <?php
            $args = array(
                'posts_per_page' => 20,
                'post_type'      => 'palestras',
            );
            $palestras = get_posts($args);
        ?>
        <?php foreach ($palestras as $palestra) : ?>
            <?php $cat_palestra = $palestra->palestras_categoria; ?>
            <?php if ($url == "/palestra/?cat=Categoria1" && $cat_palestra == "Categoria1") { ?>
                <?php $tit_palestra = $palestra->post_title; ?>
                <?php $texto_palestra = $palestra->post_content; ?>
                <?php $subtit_palestra = $palestra->palestras_subtitulo; ?>
                <div class="palestras-lista">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <?php
                                    $palestras = rwmb_meta('palestras_foto', 'type=plupload_image', $palestra->ID);
                                    foreach ( $palestras as $palestra ) {
                                        echo "<img src='{$palestra['url']}' alt='{$palestra['alt']}' class='img-responsive' />";
                                    }
                                ?>
                            </div><!-- md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <h4><?= $tit_palestra ?></h4>
                                <a href="<?php echo site_url('contrate'); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> CONTRATAR PALESTRA</a>
                            </div><!-- md-6 -->
                        </div><!-- row -->
                        <p><?= $texto_palestra ?></p>
                    </div><!-- container -->
                </div><!-- palestras-lista -->
            <?php } ?>
            <?php if ($url == "/palestra/?cat=Categoria2" && $cat_palestra == "Categoria2") { ?>
                <?php $tit_palestra = $palestra->post_title; ?>
                <?php $texto_palestra = $palestra->post_content; ?>
                <?php $subtit_palestra = $palestra->palestras_subtitulo; ?>
                <div class="palestras-lista">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <?php
                                    $palestras = rwmb_meta('palestras_foto', 'type=plupload_image', $palestra->ID);
                                    foreach ( $palestras as $palestra ) {
                                        echo "<img src='{$palestra['url']}' alt='{$palestra['alt']}' class='img-responsive' />";
                                    }
                                ?>
                            </div><!-- md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <h4><?= $tit_palestra ?></h4>
                                <a href="<?php echo site_url('contrate'); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> CONTRATAR PALESTRA</a>
                            </div><!-- md-6 -->
                        </div><!-- row -->
                        <p><?= $texto_palestra ?></p>
                    </div><!-- container -->
                </div><!-- palestras-lista -->
            <?php } ?>
            <?php if ($url == "/palestra/?cat=Categoria3" && $cat_palestra == "Categoria3") { ?>
                <?php $tit_palestra = $palestra->post_title; ?>
                <?php $texto_palestra = $palestra->post_content; ?>
                <?php $subtit_palestra = $palestra->palestras_subtitulo; ?>
                <div class="palestras-lista">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <?php
                                    $palestras = rwmb_meta('palestras_foto', 'type=plupload_image', $palestra->ID);
                                    foreach ( $palestras as $palestra ) {
                                        echo "<img src='{$palestra['url']}' alt='{$palestra['alt']}' class='img-responsive' />";
                                    }
                                ?>
                            </div><!-- md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <h4><?= $tit_palestra ?></h4>
                                <a href="<?php echo site_url('contrate'); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> CONTRATAR PALESTRA</a>
                            </div><!-- md-6 -->
                        </div><!-- row -->
                        <p><?= $texto_palestra ?></p>
                    </div><!-- container -->
                </div><!-- palestras-lista -->
            <?php } ?>
            <?php if ($url == "/palestra/?cat=Categoria4" && $cat_palestra == "Categoria4") { ?>
                <?php $tit_palestra = $palestra->post_title; ?>
                <?php $texto_palestra = $palestra->post_content; ?>
                <?php $subtit_palestra = $palestra->palestras_subtitulo; ?>
                <div class="palestras-lista">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <?php
                                    $palestras = rwmb_meta('palestras_foto', 'type=plupload_image', $palestra->ID);
                                    foreach ( $palestras as $palestra ) {
                                        echo "<img src='{$palestra['url']}' alt='{$palestra['alt']}' class='img-responsive' />";
                                    }
                                ?>
                            </div><!-- md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <h4><?= $tit_palestra ?></h4>
                                <a href="<?php echo site_url('contrate'); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> CONTRATAR PALESTRA</a>
                            </div><!-- md-6 -->
                        </div><!-- row -->
                        <p><?= $texto_palestra ?></p>
                    </div><!-- container -->
                </div><!-- palestras-lista -->
            <?php } ?>
            <?php if ($url == "/palestra/?cat=Categoria5" && $cat_palestra == "Categoria5") { ?>
                <?php $tit_palestra = $palestra->post_title; ?>
                <?php $texto_palestra = $palestra->post_content; ?>
                <?php $subtit_palestra = $palestra->palestras_subtitulo; ?>
                <div class="palestras-lista">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <?php
                                    $palestras = rwmb_meta('palestras_foto', 'type=plupload_image', $palestra->ID);
                                    foreach ( $palestras as $palestra ) {
                                        echo "<img src='{$palestra['url']}' alt='{$palestra['alt']}' class='img-responsive' />";
                                    }
                                ?>
                            </div><!-- md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <h4><?= $tit_palestra ?></h4>
                                <a href="<?php echo site_url('contrate'); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> CONTRATAR PALESTRA</a>
                            </div><!-- md-6 -->
                        </div><!-- row -->
                        <p><?= $texto_palestra ?></p>
                    </div><!-- container -->
                </div><!-- palestras-lista -->
            <?php } ?>
            <?php if ($url == "/palestra/?cat=Categoria6" && $cat_palestra == "Categoria6") { ?>
                <?php $tit_palestra = $palestra->post_title; ?>
                <?php $texto_palestra = $palestra->post_content; ?>
                <?php $subtit_palestra = $palestra->palestras_subtitulo; ?>
                <div class="palestras-lista">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <?php
                                    $palestras = rwmb_meta('palestras_foto', 'type=plupload_image', $palestra->ID);
                                    foreach ( $palestras as $palestra ) {
                                        echo "<img src='{$palestra['url']}' alt='{$palestra['alt']}' class='img-responsive' />";
                                    }
                                ?>
                            </div><!-- md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <h4><?= $tit_palestra ?></h4>
                                <a href="<?php echo site_url('contrate'); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> CONTRATAR PALESTRA</a>
                            </div><!-- md-6 -->
                        </div><!-- row -->
                        <p><?= $texto_palestra ?></p>
                    </div><!-- container -->
                </div><!-- palestras-lista -->
            <?php } ?>
            <?php if ($url == "/palestra/?cat=Categoria7" && $cat_palestra == "Categoria7") { ?>
                <?php $tit_palestra = $palestra->post_title; ?>
                <?php $texto_palestra = $palestra->post_content; ?>
                <?php $subtit_palestra = $palestra->palestras_subtitulo; ?>
                <div class="palestras-lista">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <?php
                                    $palestras = rwmb_meta('palestras_foto', 'type=plupload_image', $palestra->ID);
                                    foreach ( $palestras as $palestra ) {
                                        echo "<img src='{$palestra['url']}' alt='{$palestra['alt']}' class='img-responsive' />";
                                    }
                                ?>
                            </div><!-- md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <h4><?= $tit_palestra ?></h4>
                                <a href="<?php echo site_url('contrate'); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> CONTRATAR PALESTRA</a>
                            </div><!-- md-6 -->
                        </div><!-- row -->
                        <p><?= $texto_palestra ?></p>
                    </div><!-- container -->
                </div><!-- palestras-lista -->
            <?php } ?>
            <?php if ($url == "/palestra/?cat=Categoria8" && $cat_palestra == "Categoria8") { ?>
                <?php $tit_palestra = $palestra->post_title; ?>
                <?php $texto_palestra = $palestra->post_content; ?>
                <?php $subtit_palestra = $palestra->palestras_subtitulo; ?>
                <div class="palestras-lista">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <?php
                                    $palestras = rwmb_meta('palestras_foto', 'type=plupload_image', $palestra->ID);
                                    foreach ( $palestras as $palestra ) {
                                        echo "<img src='{$palestra['url']}' alt='{$palestra['alt']}' class='img-responsive' />";
                                    }
                                ?>
                            </div><!-- md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <h4><?= $tit_palestra ?></h4>
                                <a href="<?php echo site_url('contrate'); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> CONTRATAR PALESTRA</a>
                            </div><!-- md-6 -->
                        </div><!-- row -->
                        <p><?= $texto_palestra ?></p>
                    </div><!-- container -->
                </div><!-- palestras-lista -->
            <?php } ?>
            <?php if ($url == "/palestra/?cat=Categoria9" && $cat_palestra == "Categoria9") { ?>
                <?php $tit_palestra = $palestra->post_title; ?>
                <?php $texto_palestra = $palestra->post_content; ?>
                <?php $subtit_palestra = $palestra->palestras_subtitulo; ?>
                <div class="palestras-lista">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <?php
                                    $palestras = rwmb_meta('palestras_foto', 'type=plupload_image', $palestra->ID);
                                    foreach ( $palestras as $palestra ) {
                                        echo "<img src='{$palestra['url']}' alt='{$palestra['alt']}' class='img-responsive' />";
                                    }
                                ?>
                            </div><!-- md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <h4><?= $tit_palestra ?></h4>
                                <a href="<?php echo site_url('contrate'); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> CONTRATAR PALESTRA</a>
                            </div><!-- md-6 -->
                        </div><!-- row -->
                        <p><?= $texto_palestra ?></p>
                    </div><!-- container -->
                </div><!-- palestras-lista -->
            <?php } ?>
            <?php if ($url == "/palestra/?cat=Categoria10" && $cat_palestra == "Categoria10") { ?>
                <?php $tit_palestra = $palestra->post_title; ?>
                <?php $texto_palestra = $palestra->post_content; ?>
                <?php $subtit_palestra = $palestra->palestras_subtitulo; ?>
                <div class="palestras-lista">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <?php
                                    $palestras = rwmb_meta('palestras_foto', 'type=plupload_image', $palestra->ID);
                                    foreach ( $palestras as $palestra ) {
                                        echo "<img src='{$palestra['url']}' alt='{$palestra['alt']}' class='img-responsive' />";
                                    }
                                ?>
                            </div><!-- md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <h4><?= $tit_palestra ?></h4>
                                <a href="<?php echo site_url('contrate'); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> CONTRATAR PALESTRA</a>
                            </div><!-- md-6 -->
                        </div><!-- row -->
                        <p><?= $texto_palestra ?></p>
                    </div><!-- container -->
                </div><!-- palestras-lista -->
            <?php } ?>
        <?php endforeach; ?>
        <div class="palestras">
            <div class="container">
                <div class="owl-carousel owl-theme owl-palestra">
                    <?php
                        $args = array(
                            'posts_per_page' => 3,
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
        </div><!-- palestras -->
    </section><!-- interna -->

<?php get_footer(); ?>