<?php
/**
 * @file
 * Contains the theme's settings form.
 */
use Drupal\Core\Form\FormStateInterface;
use Drupal\system\Form\ThemeSettingsForm;
/**
 * Implements hook_form_system_theme_settings_alter().
 */
function sub_theme_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface &$form_state, $form_id = NULL) {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  // Create the form using Forms API: http://api.drupal.org/api/7


  $form['icon_select'] = array(
		"#type" => "textfield", 
		"#title" => t("enter breadcrum seprator."), 
		"#default_value" => theme_get_setting("->"),
		"#description" => t("Select icon."),
  );
  // */
  // */

  /* -- Delete this line if you want to remove this base theme setting.
  // We don't need breadcrumbs to be configurable on this site.
  unset($form['breadcrumb']);
  // */

  // We are editing the $form in place, so we don't need to return anything.
}
