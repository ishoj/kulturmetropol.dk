<?php
/**
 * @file
 * bysted_design_element.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function bysted_design_element_ctools_plugin_api() {
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
function bysted_design_element_image_default_styles() {
  $styles = array();

  // Exported image style: element_list_image.
  $styles['element_list_image'] = array(
    'name' => 'element_list_image',
    'effects' => array(
      1 => array(
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

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function bysted_design_element_node_info() {
  $items = array(
    'element' => array(
      'name' => t('Element'),
      'base' => 'node_content',
      'description' => t('A design element, comprised by one of more variantes and a common description.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
