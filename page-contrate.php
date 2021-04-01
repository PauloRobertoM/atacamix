<?php get_header(); ?>

    <section class="titulo-interno">
        <h1 class="text-center">CONTRATE</h1>
    </section><!-- titulo-interno -->

    <section class="interna sobre contrate">
        <div class="perfil">
            <div class="item2">
                <?php echo do_shortcode( '[contact-form-7 id="183" title="Sem título"]' ); ?>
                <?php /*
                <form>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" required />
                    </div><!-- form-group -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="empresa">Empresa</label>
                                <input type="text" name="empresa" id="empresa" class="form-control" required />
                            </div><!-- form-group -->
                        </div><!-- md-6 -->
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="localizacao">Cidade</label>
                                <input type="text" name="localizacao" id="localizacao" class="form-control" required />
                            </div><!-- form-group -->
                        </div><!-- md-6 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" id="telefone" class="form-control" required />
                            </div><!-- form-group -->
                        </div><!-- md-6 -->
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control" required />
                            </div><!-- form-group -->
                        </div><!-- md-6 -->
                    </div><!-- row -->
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                    </div><!-- form-group -->
                    <button type="submit">ENVIAR</button>
                </form>
                */ ?>
            </div><!-- item2 -->
            <div class="item1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contrate.jpg">
            </div><!-- item1 -->
        </div><!-- perfil -->
    </section><!-- interna -->

<?php get_footer(); ?>