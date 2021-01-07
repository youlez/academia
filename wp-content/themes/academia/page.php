<?php
if (have_posts()) the_post();
$post_name = get_post_field('post_name',get_post());
get_header();
?>
    <div class="body <?php echo $post_name; ?>">
<?php
if($post_name=="nuestra-academia"){
    academia($post_name);
}
elseif($post_name=="clases-y-costos"){
    clases();
    costos();
}
?>
    </div>
<?php
get_footer();

function academia($post_name){    
    $i = 0;
    $args = array(
        'post_type' => array('post'),
        'post_status' => 'publish',
        'orderby'  => 'date',
        'order' => 'ASC',
        'tax_query' => array
                        (array
                            ('taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => 'academia'
                            ),
                        'relation' => 'AND')
    );
    $query = new WP_Query( $args ); 
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {    
            $query->the_post();     
            $post_thumbnail_id = get_post_thumbnail_id();
            $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );       
            if(($i==0)||($i==3)){
                ?>
                    <section class="seccion">
                        <div class="col-12 col-sm-6 <?php if($i==0) echo 'col-lg-5 offset-lg-1'; else echo 'col-lg-4 offset-lg-2'; ?>">
                            <div class="col-5 col-md-4 col-lg-3 div_img" style="background-image: url(<?php echo $post_thumbnail_url; ?>);">
                                <!-- <img src="<?php echo $post_thumbnail_url; ?>" alt=""> -->
                            </div>                                
                            <div class="col-7 col-md-8 col-lg-9">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                <?php
            }             
            if(($i==1)||($i==4)){
                ?>                       
                        <div class="col-12 col-sm-6 <?php if($i==1) echo 'col-lg-5'; else echo 'col-lg-4'; ?> right">                                                        
                            <div class="col-7 col-md-8 col-lg-9">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                            <div class="col-5 col-md-4 col-lg-3 div_img" style="background-image: url(<?php echo $post_thumbnail_url; ?>);">
                                <!-- <img src="<?php echo $post_thumbnail_url; ?>" alt=""> -->
                            </div>    
                        </div>
                    </section>
                <?php
            }         
            if($i==2){
                ?>
                    <section class="seccion s-azul">                 
                        <div class="col-12 col-sm-7 col-lg-6">
                            <div class="col-12">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_content(); ?></p> 
                            </div>
                        </div>
                    </section>
                <?php
            }       
            if($i==5){
                ?>
                    <section class="seccion">
                        <div class="col-12 col-sm-6 col-lg-5 offset-lg-1 piramide">                             
                            <div class="col-7 col-md-8 col-lg-9">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                            <div class="col-5 col-md-4 col-lg-3 div_img" style="background-image: url(<?php echo $post_thumbnail_url; ?>);">
                                <!-- <img src="<?php echo $post_thumbnail_url; ?>" alt=""> -->
                            </div>   
                        </div>
                <?php
            }             
            if($i==6){
                ?>                       
                        <div class="col-12 col-sm-6 col-lg-5">     
                            <div class="col-5 col-md-4 col-lg-3 div_img" style="background-image: url(<?php echo $post_thumbnail_url; ?>);">
                                <!-- <img src="<?php echo $post_thumbnail_url; ?>" alt=""> -->
                            </div>                                                      
                            <div class="col-7 col-md-8 col-lg-9 coerver">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_content(); ?></p>
                            </div> 
                        </div>
                    </section>
                <?php
            }               
            if($i==7){
                ?>
                    <section class="seccion s-azul">                 
                        <div class="col-12 col-sm-7 col-lg-6 row">
                            <div class="col-12">
                                <h1><?php the_title(); ?></h1> 
                            </div>                       
                            <div class="col-7 col-md-8 col-lg-9">                                         
                                <p><?php the_content(); ?></p>
                            </div>
                            <div class="col-5 col-md-4 col-lg-3 div_img" style="background-image: url(<?php echo $post_thumbnail_url; ?>);">
                                <!-- <img src="<?php echo $post_thumbnail_url; ?>" alt=""> -->
                            </div>   
                        </div>
                    </section>
                <?php
            } 
            if($i==8){
                ?>
                    <section class="seccion">
                        <div class="col-12 col-sm-6 col-lg-5 offset-lg-1 piramide">
                            <div class="col-4 col-md-3 col-lg-2 div_img" style="background-image: url(<?php echo $post_thumbnail_url; ?>);">
                                <!-- <img src="<?php echo $post_thumbnail_url; ?>" alt=""> -->
                            </div>                                
                            <div class="col-8 col-md-9 col-lg-10">
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                <?php
            }             
            if($i==9){
                ?>                       
                        <div class="col-12 col-sm-6 col-lg-5 borde">                                                        
                            <div class="col-8 col-md-9 col-lg-10">
                                <p><?php the_content(); ?></p>
                            </div>
                            <div class="col-4 col-md-3 col-lg-2 div_img" style="background-image: url(<?php echo $post_thumbnail_url; ?>);">
                                <!-- <img src="<?php echo $post_thumbnail_url; ?>" alt=""> -->
                            </div>    
                        </div>
                    </section>
                <?php
            }
            $i++;
        }
    }
}

function clases(){ 
    $i = 1;
    $args = array(
        'post_type' => array('post'),
        'post_status' => 'publish',
        'orderby'  => 'date',
        'order' => 'ASC',
        'tax_query' => array
                        (array
                            ('taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => 'clases'
                            ),
                        'relation' => 'AND')
    );
    $query = new WP_Query( $args ); 
    ?>
    <section class="seccion">
    <?php
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {    
                $query->the_post();     
                $post_thumbnail_id = get_post_thumbnail_id();
                $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );   
                ?>
                    <div class="col-12 col-sm-6 <?php if(($i%3)==0) echo "offset-sm-3 "; ?>col-lg-4 <?php 
                    if((($i%4)==0)||($i==1)) echo "offset-lg-2 left"; 
                    elseif(($i%3)==0) echo "offset-lg-4";
                    else echo "right"; 
                    ?>">
                        <a href="#" class="enl_clases">
                            <div class="fondo_clases" style="background-image: url(<?php echo $post_thumbnail_url; ?>);">
                                <div class="cont_clases">
                                    <h4><?php the_title(); ?></h4>
                                    <div class="desc_clases">
                                        <?php the_content(); ?>
                                    </div>                                
                                </div>     
                            </div>                           
                        </a>
                    </div>
                <?php
                $i++;
            }
        } 
    ?>
    </section>
    <?php
}

function costos(){ 
    $i = 0;
    $j = 0;
    $args = array(
        'post_type' => array('post'),
        'post_status' => 'publish',
        'orderby'  => 'date',
        'order' => 'ASC',
        'tax_query' => array
                        (array
                            ('taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => 'costos'
                            ),
                        'relation' => 'AND')
    );
    $query = new WP_Query( $args ); 
    ?>
        <section class="seccion s_costos">
    <?php
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {    
                $query->the_post();     
                if(($i%4)==0)
                {
                    ?>
                    <div class="col-lg-10 offset-lg-1 costos">
                    <?php
                    $j++;
                }  
                if($i==0)
                {
                    ?>
                    <h1>COSTOS</h1>
                    <?php
                }
                if(($i%2)==0)
                {
                    ?>
                        <div class="col-12 col-md-5 costos_general">
                            <h2><?php the_title(); ?></h2>
                    <?php
                }
                        ?>
                            <div class="col-6 <?php if(($i%2)==0) echo "left"; else echo "right"; ?>">
                                <a href="#" class="div_costos s-azul">
                                    <?php the_content(); ?>
                                    <div class="precio">
                                        <?php echo get_post_meta(get_the_id(),'precio',true); ?>
                                    </div>                           
                                </a>
                            </div>
                        <?php
                if(($i%2)==1)
                {
                    ?>
                        </div>
                    <?php
                }
                if(($i%4)==3)
                {
                    ?>
                    </div>
                    <?php
                }             
                $i++;
            }
        } 
    ?>
    </section>
    <?php
}