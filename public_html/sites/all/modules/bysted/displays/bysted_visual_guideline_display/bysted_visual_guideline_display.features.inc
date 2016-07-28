<?php
/**
 * @file
 * bysted_visual_guideline_display.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function bysted_visual_guideline_display_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
}
