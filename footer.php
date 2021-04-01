        <section class="livros">
            <div class="container">
                <h1 class="text-center">CONFIRA OS LIVROS ESCRITOS PELO PALESTRANTE MARCOS MEIER</h1>
                <div class="owl-carousel owl-theme owl-livro">
                    <?php
                        $args = array(
                            'posts_per_page' => 20,
                            'post_type'      => 'livros',
                        );
                        $livros = get_posts($args);
                    ?>
                    <?php foreach ($livros as $livro) : ?>
                        <?php $link_livro = $livro->livros_link; ?>
                        <div class="item">
                            <a href="<?= $link_livro ?>" target="_blank">
                                <?php
                                    $livros = rwmb_meta('livros_foto', 'type=plupload_image', $livro->ID);
                                    foreach ( $livros as $livro ) {
                                        echo "<img src='{$livro['url']}' alt='{$livro['alt']}' />";
                                    }
                                ?>
                            </a>
                        </div><!-- item -->
                    <?php endforeach; ?>
                </div><!-- owl-carousel -->
            </div><!-- container -->
        </section><!-- livros -->
    
        <footer>
            <div class="rodape">
                <h2><strong>Marcos meier.</strong> Todos os direitos reservados.</h2>
                <h4><a href="https://api.whatsapp.com/send?phone=5541992483040&text=Ol%C3%A1!%20Quero%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20palestrante%20Marcos%20Meier" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i> 41 99248.3040</a> <span>- 41 3107.6448 - meierpalestras@gmail.com</span></h4>
                <div class="redes-sociais">
                    <a href="https://www.facebook.com/professormarcosmeier/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/MARCOSMEIEROFICIAL/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/channel/UCrFqDm31B-00F8V-TCIj3cA" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="https://br.linkedin.com/in/marcos-meier-777b6480" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div><!-- redes-sociais -->
            </div><!-- rodape -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-footer.jpg">
        </footer>
<?php wp_footer(); ?>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js'></script>
        <script type="text/javascript">
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        </script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js'></script>
        <script src="https://use.fontawesome.com/6963733f46.js"></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/script.js'></script>
    </body>
</html>