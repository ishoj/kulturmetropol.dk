<?php
/**
 * @file
 * bysted_standard_page_designguide_.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function bysted_standard_page_designguide__ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
}
