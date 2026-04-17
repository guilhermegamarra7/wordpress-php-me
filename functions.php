<?php
function me_imprensa_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'me_imprensa_setup' );


function registrar_cpt_cases() {
    $labels = array(
        'name'               => 'Cases',
        'singular_name'      => 'Case',
        'menu_name'          => 'Cases',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Case',
        'edit_item'          => 'Editar Case',
        'new_item'           => 'Novo Case',
        'view_item'          => 'Ver Case',
        'search_items'       => 'Buscar Cases',
        'not_found'          => 'Nenhum case encontrado',
        'not_found_in_trash' => 'Nenhum case encontrado na lixeira',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => false,
        'menu_icon'           => 'dashicons-portfolio',
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'cases', $args );
}
add_action( 'init', 'registrar_cpt_cases' );


function registrar_cpt_clientes() {
    $labels = array(
        'name'               => 'Clientes',
        'singular_name'      => 'Cliente',
        'menu_name'          => 'Clientes',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Cliente',
        'edit_item'          => 'Editar Cliente',
        'new_item'           => 'Novo Cliente',
        'view_item'          => 'Ver Cliente',
        'search_items'       => 'Buscar Clientes',
        'not_found'          => 'Nenhum cliente encontrado',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => false,
        'menu_icon'           => 'dashicons-building',
        'supports'            => array( 'title', 'thumbnail' ),
    );

    register_post_type( 'clientes', $args );
}
add_action( 'init', 'registrar_cpt_clientes' );