<?php
/**
 * @file
 * bysted_design_variant.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function bysted_design_variant_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_image_default_styles().
 */
function bysted_design_variant_image_default_styles() {
  $styles = array();

  // Exported image style: variant_list.
  $styles['variant_list'] = array(
    'name' => 'variant_list',
    'effects' => array(
      2 => array(
        'label' => 'Skalér',
        'help' => 'Skalering bevarer billedets højde-bredde-forhold. Hvis kun den ene dimension angives vil den anden blive beregnet.',
        'effect callback' => 'image_scale_effect',
        'dimensions callback' => 'image_scale_dimensions',
        'form callback' => 'image_scale_form',
        'summary theme' => 'image_scale_summary',
        'module' => 'image',
        'name' => 'image_scale',
        'data' => array(
          'width' => '574',
          'height' => '',
          'upscale' => 0,
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
function bysted_design_variant_node_info() {
  $items = array(
    'variant' => array(
      'name' => t('Variant'),
      'base' => 'node_content',
      'description' => t('A single variant of a design element. It could be a specific logo version, typeface or icon.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
