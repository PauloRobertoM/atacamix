<section class="perfil">
	<?php
        $args = array(
            'posts_per_page' => 1,
            'post_type'      => 'biografias',
        );
        $biografias = get_posts($args);
    ?>
    <?php foreach ($biografias as $biografia) : ?>
    	<?php $tit_biografia = $biografia->post_title; ?>
        <?php $corpo_biografia = $biografia->post_content; ?>
    	<div class="item1">
	        <?php
                $biografias = rwmb_meta('biografias_foto', 'type=plupload_image', $biografia->ID);
                foreach ( $biografias as $biografia ) {
                    echo "<img src='{$biografia['url']}' alt='{$biografia['alt']}' />";
                }
            ?>
	    </div><!-- item1 -->
	    <div class="item2">
	        <h1><?= $tit_biografia ?></h1>
	        <p><?= $corpo_biografia ?></p>
	    </div><!-- item2 -->
    <?php endforeach; ?>
</section><!-- perfil -->