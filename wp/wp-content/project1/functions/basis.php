<?php

/**
 * WPの自動更新をしない
 */
//define('AUTOMATIC_UPDATER_DISABLED', true);

/**
 * ヘッダーにWPのバージョンを表示させない
 */
//remove_action('wp_head', 'wp_generator');

/**
 * adminbarを表示させない
 *
 * @memo adminbarを表示させるとスタイルが崩れることがある
 */
add_filter( 'show_admin_bar' , 'lig_wp_hide_admin_bar');
function lig_wp_hide_admin_bar() {
  return false;
}
