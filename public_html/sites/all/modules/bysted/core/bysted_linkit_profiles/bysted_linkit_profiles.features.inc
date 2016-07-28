<?php
/**
 * @file
 * bysted_linkit_profiles.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function bysted_linkit_profiles_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "linkit" && $api == "linkit_profiles") {
    return array("version" => "1");
  }
}
