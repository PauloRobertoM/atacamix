<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Biografias {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'biografias_register_meta_boxes'));
   }

   public function init() {
      $this->biografias_post_type();
   }

   public function biografias_post_type() {

      $labels = array(
         'name'                => _x( 'Biografia', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Biografia', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Biografia', 'text_domain' ),
         'name_admin_bar'      => __( 'Biografia', 'text_domain' ),
         'parent_item_colon'   => __( 'Biografia pai:', 'text_domain' ),
         'all_items'           => __( 'Biografia', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar nova biografia', 'text_domain' ),
         'add_new'             => __( 'Adicionar nova', 'text_domain' ),
         'new_item'            => __( 'Nova biografia', 'text_domain' ),
         'edit_item'           => __( 'Ediar biografia', 'text_domain' ),
         'update_item'         => __( 'Atualizar biografia', 'text_domain' ),
         'view_item'           => __( 'Ver biografia', 'text_domain' ),
         'search_items'        => __( 'Procurar biografia', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'biografias', 'text_domain' ),
         'description'         => __( 'Cadastro de biografia', 'text_domain' ),
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
         'menu_icon'           => 'dashicons-id',
      );

      register_post_type( 'biografias', $args );

   }

   public function biografias_register_meta_boxes( $meta_boxes ) {
      $prefix = 'biografias_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}foto",
         'title'      => 'Foto da Biografia',
         'post_types' => array( 'biografias' ),
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
      
      return $meta_boxes;
   }

}