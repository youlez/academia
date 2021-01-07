<?php
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
    'top'    => __( 'Top Menu', 'academia' ),
) );

function cargar_javascript()
{
	wp_register_script('jquery-propio',get_template_directory_uri().'/js/jquery.js',array('jquery'),"2020.10.22.04",true);

	wp_enqueue_script('jquery-propio'); 
}

function cargar_estilos()
{  
    wp_register_style('estilo-principal',get_template_directory_uri().'/style.css',array(),'2020.10.22.04','all');

    wp_enqueue_style( 'estilo-principal' );
}

add_action( 'wp_enqueue_scripts', 'cargar_estilos' );
add_action( 'wp_enqueue_scripts', 'cargar_javascript' );

/*
$labels = array(
    'name' => __( 'Categoria' ),
    'singular_name' => __( 'Categoria' ),
    'search_items' =>  __( 'Buscar categoria' ),
    'all_items' => __( 'Todas' ),
    'parent_item' => __( 'Categoria padre' ),
    'parent_item_colon' => __( 'Categoria padre:' ),
    'edit_item' => __( 'Editar categoria' ), 
    'update_item' => __( 'Actualizar categoria' ),
    'add_new' => __( 'Añadir nueva categoria' ),
    'add_new_item' => __( 'Añadir nueva categoria' ),
    'not_found' =>  __( 'No se ha encontrado ninguna categoria' ),
    'menu_name' => __( 'Categorias' )
);
register_taxonomy(
    'categoria',
    'page', // Tipos de Post a los que asociaremos la taxonomía
    array(
        'hierarchical' => true, // True para taxonomías del tipo "Categoría" y false para el tipo 
        'labels' => $labels, // La variable con las traducciones de las etiquetas
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'rewrite' => array( 'slug' => 'Categoria' ),
    )
);*/