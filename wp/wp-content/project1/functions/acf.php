<?php
// advance custom field option page
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'PICK UP ARTICLES',
    'menu_title'  => 'PICK UP ARTICLES',
    'menu_slug'   => 'pick-up-articles',
    'capability'  => 'edit_themes',
    'redirect'    => false
  ));

}
