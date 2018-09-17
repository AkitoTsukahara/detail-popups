<?php
/*
Plugin Name: Detail Popups
Description: ショートコード[detail_popups]で囲むとテキストの詳細情報を表示することができます
Author: Akito Tsukahara
Version: 0.1
Author URI: https://profiles.wordpress.org/tsukahara
License: GPL2
*/

function detail_popups($atts, $content = null) {

  register_setting('detailpopups_optiongroup', 'detailpopups_option');
  //CSSfile register
  $style_urlpath = plugins_url('/style/detail-popups.css', __FILE__ );
  wp_register_style('detail-popups-style', $style_urlpath);
  wp_enqueue_style('detail-popups-style');
  //jsfile register
  $js_urlpath = plugins_url('/js/detail-popups.js', __FILE__ );
  wp_register_script('detail-popups-js', $js_urlpath);
  wp_enqueue_script('detail-popups-js');

  //add shortcode
  extract(shortcode_atts(array(
    'detail' => 0,
  ), $atts));

  return '<div class="target_wrapper"><span data-side_type="target" class="detail_target">' . $content . '</span><span data-side_type="popups" class="popups">' . $detail .'</span></div>';
}
add_shortcode( 'detail_popups', 'detail_popups' );