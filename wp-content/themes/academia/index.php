<?php get_header();?>
<div class="body">
	<section id="slider">
		<?php
			echo do_shortcode( '[serious-slider id="3"]' ); 
		?>
	</section>
	<?php
    $args = array(
        'name'        => 'bienvenida',
        'post_type'   => 'post'
    );
    $query = get_posts($args);
    if($query){
        ?>
		<section class="seccion s-azul" id="bienvenida">
			<div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2">
				<h1><?php echo $query[0]->post_title; ?></h1>
				<?php echo $query[0]->post_content; ?>
			</div>
		</section>	
	<?php } ?>	
	<section class="seccion" id="competencias">		
		<h1>COMPETENCIAS</h1>
		<?php echo do_shortcode('[MEC id="17"]'); ?>	
		<a href="<?php bloginfo( 'url' ); ?>/competencias/" class="ver_competencias">Ver Más</a>	
	</section>
	<section class="seccion s-azul" id="galeria">
		<h1>GALERIA</h1>
		<?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>		
	</section>
	<section class="seccion" id="experiencias">
		<h1>EXPERIENCIAS (VIDEOS)</h1>
		<?php echo do_shortcode('[wonderplugin_carousel id="2"]'); ?>		
	</section>
</div>

<?php
get_footer();