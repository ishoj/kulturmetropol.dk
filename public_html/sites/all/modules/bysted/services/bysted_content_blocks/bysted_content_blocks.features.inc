<?php
/**
 * @file
 * bysted_content_blocks.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function bysted_content_blocks_ctools_plugin_api() {
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
 * Implements hook_node_info().
 */
function bysted_content_blocks_node_info() {
  $items = array(
    'content_block' => array(
      'name' => t('Content block'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
