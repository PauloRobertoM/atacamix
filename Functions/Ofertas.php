<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Ofertas {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'ofertas_register_meta_boxes'));
   }

   public function init() {
      $this->ofertas_post_type();
   }

   public function ofertas_post_type() {

      $labels = array(
         'name'                => _x( 'Ofertas', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Oferta', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Ofertas', 'text_domain' ),
         'name_admin_bar'      => __( 'Ofertas', 'text_domain' ),
         'parent_item_colon'   => __( 'Oferta pai:', 'text_domain' ),
         'all_items'           => __( 'Todas as ofertas de palestras', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar nova Oferta', 'text_domain' ),
         'add_new'             => __( 'Adicionar nova', 'text_domain' ),
         'new_item'            => __( 'Nova Oferta', 'text_domain' ),
         'edit_item'           => __( 'Ediar Oferta', 'text_domain' ),
         'update_item'         => __( 'Atualizar Oferta', 'text_domain' ),
         'view_item'           => __( 'Ver Oferta', 'text_domain' ),
         'search_items'        => __( 'Procurar Oferta', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'ofertas', 'text_domain' ),
         'description'         => __( 'Cadastro de Ofertas', 'text_domain' ),
         'labels'              => $labels,
         'supports'            => array( 'title', 'editor', ),
         'taxonomies'          => array( ),
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'menu_position'       => 5,
         'show_in_admin_bar'   => true,
         'show_in_nav_menus'   => true,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'page',
         'menu_icon'           => 'dashicons-archive',
      );
      register_post_type( 'ofertas', $args );
   }

   public function ofertas_register_meta_boxes( $meta_boxes ) {
      $prefix = 'ofertas_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}foto",
         'title'      => 'Foto da oferta',
         'post_types' => array( 'ofertas' ),
         'context'    => 'normal',
         'priority'   => 'high',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'               => "{$prefix}foto",
               'name'             => null,
               'type'             => 'image_advanced',
               'force_delete'     => false,
               'desc'             => 'Adicionar foto',
               'max_file_uploads' => 1,
            ),
         )
      );
      $meta_boxes[] = array(
         'id'         => "{$prefix}pdf",
         'title'      => 'PDF do Encarte',
         'post_types' => array( 'ofertas' ),
         'context'    => 'normal',
         'priority'   => 'high',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'               => "{$prefix}pdf",
               'name'             => null,
               'type'             => 'file',
               'force_delete'     => false,
               'desc'             => 'Adicionar pdf',
               'max_file_uploads' => 1,
            ),
         )
      );
      
      return $meta_boxes;
   }
}