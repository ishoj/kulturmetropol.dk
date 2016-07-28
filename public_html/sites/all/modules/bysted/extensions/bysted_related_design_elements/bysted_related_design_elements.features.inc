<?php
/**
 * @file
 * bysted_related_design_elements.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function bysted_related_design_elements_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
}
