<?php

/**
 * Adds a stylesheet to recent content view
 * @param $vars
 */
function test_preprocess_views_view(&$vars)
{
    $view = $vars['view'];
    // Add the viewrc css file to recent content view
    if ($view->name == 'recent_content') {
        // add css stylesheet
        drupal_add_css(drupal_get_path('theme', 'test') . '/css/viewrc.css');
    }
}