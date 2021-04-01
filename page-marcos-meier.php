<?php get_header(); ?>

    <section class="titulo-interno">
        <h1 class="text-center">MARCOS MEIER</h1>
    </section><!-- titulo-interno -->

    <section class="interna sobre">
        <?php get_template_part('content', 'sobre'); ?>
        <div class="perfil perfil2">
            <div class="item1 visible-xs">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sobre2.jpg">
            </div><!-- item1 -->
            <div class="item2">
                <h1>REDES SOCIAIS</h1>
                <div class="redes-sociais">
                    <a href="https://www.facebook.com/professormarcosmeier/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/MARCOSMEIEROFICIAL/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/channel/UCrFqDm31B-00F8V-TCIj3cA" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="https://br.linkedin.com/in/marcos-meier-777b6480" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div><!-- redes-sociais -->
            </div><!-- item2 -->
            <div class="item1 hidden-xs">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sobre2.jpg">
            </div><!-- item1 -->
        </div><!-- perfil -->
        <a href="" class="btn-geral">Contratar palestrante</a>
        <?php get_template_part('components/iframe'); ?>
    </section><!-- interna -->

<?php get_footer(); ?>