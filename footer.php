        <section class="contato">
            <div class="container">
                <h1 class="text-center">CONTATO</h1>
                <div class="row">
                    <div class="col-md-2 col-sm-2"></div>
                    <div class="col-md-8 col-sm-8">
                        <form id="_form_contato">
                            <input type="text" name="nome" id="contato_nome" class="form-control" placeholder="seu nome">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <input type="tel" name="telefone" id="contato_telefone" class="form-control" placeholder="seu telefone">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <input type="email" name="email" id="contato_email" class="form-control" placeholder="seu e-mail">
                                </div>
                            </div><!-- row -->
                            <textarea name="mensagem" id="contato_mensagem" class="form-control" placeholder="mensagem"></textarea>
                            <button type="submit" name="action" class="btn-geral">ENVIAR</button>
                        </form>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- interna -->
    
        <footer>
            <div class="rodape">
                <h2><strong>Atacamix.</strong> Todos os direitos reservados.</h2>
                <h4><a href="https://wa.me/+5584988880000" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i> 84 98888-0000</a> <span>|</span> <a href="tel:+5584988880000" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i> 84 98888-0000</a> <span>|</span> <a href="mailTo:contato@atacamix.com.br" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i> contato@atacamix.com.br</a></h4>
                <div class="redes-sociais">
                    <a href="https://www.instagram.com/atacamixoficial/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div><!-- redes-sociais -->
            </div><!-- rodape -->
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