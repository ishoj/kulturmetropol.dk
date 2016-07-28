<?php
/**
 * @file
 * bysted_standard_page.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function bysted_standard_page_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_image_default_styles().
 */
function bysted_standard_page_image_default_styles() {
  $styles = array();

  // Exported image style: page_list.
  $styles['page_list'] = array(
    'name' => 'page_list',
    'effects' => array(
      4 => array(
        'label' => 'Skalér og beskær',
        'help' => 'Skalering og beskæring bevarer billedets højde-bredde-forhold og beskærer derefter den største dimension. Det er nyttigt til at generere kvadratiske thumbnails uden at forvrænge billedet.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => '280',
          'height' => '150',
        ),
        'weight' => '1',
      ),
    ),
  );

  // Exported image style: page_title_wide.
  $styles['page_title_wide'] = array(
    'name' => 'page_title_wide',
    'effects' => array(
      3 => array(
        'label' => 'Skalér og beskær',
        'help' => 'Skalering og beskæring bevarer billedets højde-bredde-forhold og beskærer derefter den største dimension. Det er nyttigt til at generere kvadratiske thumbnails uden at forvrænge billedet.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 1980,
          'height' => 400,
        ),
        'weight' => '1',
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function bysted_standard_page_node_info() {
  $items = array(
    'bysted_page' => array(
      'name' => t('Page'),
      'base' => 'node_content',
      'description' => t('A basic page with title, image, formatted content and block of related information.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
