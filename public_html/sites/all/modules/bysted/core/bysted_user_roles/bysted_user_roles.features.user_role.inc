<?php
/**
 * @file
 * bysted_user_roles.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function bysted_user_roles_user_default_roles() {
  $roles = array();

  // Exported role: Editor.
  $roles['Editor'] = array(
    'name' => 'Editor',
    'weight' => '2',
  );

  // Exported role: Site administrator.
  $roles['Site administrator'] = array(
    'name' => 'Site administrator',
    'weight' => '3',
  );

  return $roles;
}
