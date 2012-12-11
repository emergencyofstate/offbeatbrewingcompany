<?php
//
// Implements hook_metatag_info().
//
function offbeat_metatags_metatag_info() {
  $info['groups']['offbeat_metatags'] = array(
    'label' => t('My Custom Metatags'),
  );
 
  $info['tags']['my_custom_metatag'] = array(
    'label' => t('My Custom Meta Tag'),
    'description' => t('This is a custom meta tag'),
    'class' => 'DrupalTextMetaTag',
    'group' => 'offbeat_metatags',
  );
 
  return $info;
}
 
 
//
// Implements hook_metatag_config_default_alter().
//
function offbeat_metatags_metatag_config_default_alter(array &$configs) {
  foreach ($configs as &$config) {
    switch ($config->instance) {
      case 'global':
        $config->config += array();
        break;
 
      case 'global:frontpage':
        $config->config += array();
        break;
 
      case 'node':
        $config->config += array(
          'my_custom_metatag' => array('value' => 'This is a default value.'),
        );
        break;
 
      case 'taxonomy_term':
        $config->config += array();
        break;
 
      case 'user':
        $config->config += array( );
        break;
    }
  }
}