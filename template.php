<?php
    /**
    * Override of theme_breadcrumb().
    */

function birkeland_image($variables) {
  $attributes = $variables['attributes'];
  $attributes['src'] = file_create_url($variables['path']);

  foreach (array('width', 'height', 'alt', 'title') as $key) {
      
      if (isset($variables[$key])) {
          $attributes[$key] = $variables[$key];
      }
  }
  
  return '<span ' . drupal_attributes(array('class' => 'image-container')). '><img' . drupal_attributes($attributes) . ' /><span  class="description"> '. $variables["title"] .'</span></span>';
} 
