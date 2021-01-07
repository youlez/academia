<!DOCTYPE html>
<head>
	<title><?php echo get_bloginfo('name'); ?></title>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" data-auto-replace-svg="nest"></script>
	<?php wp_head(); ?>
	<header>
		<div class="row">
		    <div class="col-9 col-lg-4 col-xl-5">       
		      	<a href="<?php echo home_url(); ?>">
		      		<div class="row">        
		      			<div class="col-4 col-sm-3 col-xs-2 col-lg-5 col-xl-3 logo">
		      				<img class="img-fluid" src="<?php bloginfo( 'template_url' ); ?>/images/logo.png">
		      			</div>
		      			<div class="col-8 col-sm-9 col-lg-7 col-xl-9 slogan p-0">
		      				<span class="titulo"><?php echo get_bloginfo('name'); ?></span>
		      			</div>
		      		</div>
		        </a>		      	
		    </div>
		    <div class="col-3 col-lg-8 col-xl-7 menu_responsive">		    
				<nav class="navbar navbar-expand-lg navbar-dark">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				  	</button>
				</nav>			  	
			</div>
			<div class="col-12 col-lg-8 col-xl-7 menu">		    
				<nav class="navbar navbar-expand-lg navbar-dark">
					<div id="menu" class="collapse navbar-collapse">
						<?php
							wp_nav_menu(array(
								'menu'            => 'principal',
								'theme_location'  => 'top',                       
								'depth'           =>  4,
								'menu_class'      => 'navbar-nav')
							);
						?>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home">
							<a href="http://admin.miamisoccercota.com/admin"><i class="fas fa-sign-in-alt"></i></a>
						</li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home">
							<a href="<?php bloginfo( 'url' ); ?>/wp-admin"><i class="fas fa-cogs"></i></a>
						</li>
					</div>
				</nav>			  	
			</div>
		</div>
	</header>
</head>
