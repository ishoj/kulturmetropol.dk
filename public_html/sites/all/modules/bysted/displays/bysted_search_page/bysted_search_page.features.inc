<?php
/**
 * @file
 * bysted_search_page.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function bysted_search_page_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
}
