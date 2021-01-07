<?php
    $args = array(
        'name'        => 'contactanos',
        'post_type'   => 'post'
    );
    $query = get_posts($args);
    if($query){
        ?>
        <footer class="seccion s-azul">
            <h1><?php echo $query[0]->post_title; ?></h1>
            <div class="row col-12 col-md-10 offset-md-1">
                <div class="col-12 col-md-6 mapa">                    
                </div>
                <div class="col-12 col-md-6">
                    <?php echo $query[0]->post_content; ?>
                </div>            
            </div>
            <div class="final">
                <span class="col-6 col-sm-8">Copyright <?php echo get_bloginfo('name'); ?> © 2020</span>
                <div class="redes col-6 col-sm-4">
                <a href="https://www.facebook.com/MIAMISOCCERCLUBCOTA">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/iconos/facebook.png" alt="">
                </a>
                <a href="https://twitter.com/miamisoccercota">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/iconos/twitter.png" alt="">
                </a>
                <a href="https://www.instagram.com/miamisoccerccota/?hl=es-la">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/iconos/instagram.png" alt="">
                </a>
                </div>
            </div>
        </footer>
        <?php
    }     
    wp_footer(); 
?>
    </body>
</html>