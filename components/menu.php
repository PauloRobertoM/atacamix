<div class="nav menu">
    <nav class="navbar navbar-default" id="meuMenu">
        <div class="container">
            <div class="conteudo">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('/'); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-atacamix.png" alt="Logo Atacamix" /></a>
                </div><!-- .navbar-header -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url('/'); ?>">HOME</a></li>
                        <li><a href="<?php echo site_url('atacamix'); ?>">ATACAMIX</a></li>
                        <li><a href="#">OFERTAS</a></li>
                        <li><a href="<?php echo site_url('blog'); ?>">NOTÍCIAS</a></li>
                        <li>
                            <a href="#">CONTATO</a>
                            <ul class="sub-menu">
                                <li><a href="">FALE CONOSCO</a></li>
                                <li><a href="<?php echo site_url('trabalhe'); ?>">TRABALHE CONOSCO</a></li>
                            </ul>
                        </li>
                        <li class="redes-sociais">
                            <a href="https://www.instagram.com/atacamixoficial/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li><!-- redes-sociais -->
                    </ul><!-- .nav -->
                </div><!-- .navbar-collapse -->
            </div><!-- conteudo -->
        </div><!-- container -->
    </nav><!-- .navbar -->
</div><!-- .nav -->