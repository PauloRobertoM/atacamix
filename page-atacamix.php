<?php get_header(); ?>

    <section class="titulo-interno">
        <h1 class="text-center"><?= the_title(); ?></h1>
    </section><!-- titulo-interno -->

    <section class="interna sobre">
        <?php get_template_part('content', 'sobre'); ?>
        <div class="perfil perfil2">
            <div class="item1 visible-xs">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sobre2.jpg">
            </div><!-- item1 -->
            <div class="item2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.681216388102!2d-34.83594608579521!3d-7.162803294828223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acc258532d420f%3A0xda59212e4c3a6a82!2sAv.%20H%C3%ADlton%20Souto%20Maior%20-%20Mangabeira%2C%20Jo%C3%A3o%20Pessoa%20-%20PB!5e0!3m2!1spt-BR!2sbr!4v1617389349183!5m2!1spt-BR!2sbr" width="100%" height="560" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div><!-- item2 -->
            <div class="item1 hidden-xs">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sobre2.jpg">
            </div><!-- item1 -->
        </div><!-- perfil -->
    </section><!-- interna -->

<?php get_footer(); ?>