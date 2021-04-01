<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Categorias {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'categorias_register_meta_boxes'));
   }

   public function init() {
      $this->categorias_post_type();
   }

   public function categorias_post_type() {

      $labels = array(
         'name'                => _x( 'Categoria de Palestras', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Categoria de Palestra', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Categoria de Palestras', 'text_domain' ),
         'name_admin_bar'      => __( 'Categoria de Palestras', 'text_domain' ),
         'parent_item_colon'   => __( 'Categoria de Palestra pai:', 'text_domain' ),
         'all_items'           => __( 'Todas as categorias de palestras', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar nova categoria de palestra', 'text_domain' ),
         'add_new'             => __( 'Adicionar nova', 'text_domain' ),
         'new_item'            => __( 'Nova categoria de palestra', 'text_domain' ),
         'edit_item'           => __( 'Ediar categoria de palestra', 'text_domain' ),
         'update_item'         => __( 'Atualizar categoria de palestra', 'text_domain' ),
         'view_item'           => __( 'Ver categoria de palestra', 'text_domain' ),
         'search_items'        => __( 'Procurar categoria de palestra', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'categorias', 'text_domain' ),
         'description'         => __( 'Cadastro de categorias de palestras', 'text_domain' ),
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
         'menu_icon'           => 'dashicons-editor-ul',
      );
      register_post_type( 'categorias', $args );
   }

   public function categorias_register_meta_boxes( $meta_boxes ) {
      $prefix = 'categorias_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}subtitulo",
         'title'      => 'Subtítulo',
         'post_types' => array( 'categorias' ),
         'context'    => 'advanced',
         'priority'   => 'default',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'   => "{$prefix}subtitulo",
               'type' => 'text',
               'name' => null,
               'desc' => 'Adicionar Subtítulo',
            ),
         ),
      );
      $meta_boxes[] = array(
         'id'         => "{$prefix}cor",
         'title'      => 'Cor da Categoria',
         'post_types' => array( 'categorias' ),
         'context'    => 'advanced',
         'priority'   => 'default',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'   => "{$prefix}cor",
               'type' => 'text',
               'name' => null,
               'desc' => 'Adicionar Cor da Categoria',
            ),
         ),
      );
      $meta_boxes[] = array(
         'id'         => "{$prefix}foto",
         'title'      => 'Foto da categoria',
         'post_types' => array( 'categorias' ),
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
         'id'         => "{$prefix}categoria",
         'title'      => 'Categoria',
         'post_types' => array( 'categorias' ),
         'context' => 'advanced',
         'priority' => 'default',
         'autosave' => 'false',
         'fields' => array(
            array(
               'id'          => "{$prefix}categoria",
               'name'        => null,
               'type'        => 'select',
               'placeholder' => 'Selecione uma Categoria',
               'options'     => array(
                  'Categoria1' => 'Qualidade de Vida',
                  'Categoria2' => 'Educação de filhos',
                  'Categoria3' => 'Relacionamento interpessoal nas empresas',
                  'Categoria4' => 'Formação de professores',
				  'Categoria5' => 'Youbuntu Cursos',
               ),
            ),
         ),
      );
      
      return $meta_boxes;
   }
}