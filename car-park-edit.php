<?php
/*
Plugin Name: Car Park Edit
Description: A plugin to customize the Car Park Booking System plugin for 241parking.com.
Version: 1.0
Author: Tabi Idris
Author URI: https://github.com/DriZy
License: GNU General Public License v2 or later
*/

  add_filter('gettext','change_shipping_text');
  add_filter('ngettext','change_shipping_text');
  function change_shipping_text($text) {
      $text = str_ireplace('Select Dates','Select Parlking',$text);
      $text = str_ireplace('Get My Quote','Book Parking',$text);
      $text = str_ireplace('Extra Options', 'Taxes and Fees',$text);
      $text = str_ireplace('Space', 'Booking',$text);
      return $text;
  }


//   change_shipping_text plugin parent plugin
// 				{
// 					$html.=
// 					'
// 						<img src="'.esc_attr($locationMeta['payment_'.$value[1].'_logo_src']).'" alt="">
// 					';
//                     $html.=
// 					'
// 				        <div class="cpbs-header cpbs-header-style-4">'.esc_html('Credit Card').'</div>
// 					';
// 				}

// Set the option with text "Cruise Parking" as the default option
//   $self.e('select').val($self.e('select option:contains("Cruise Parking")').val()).selectmenu('refresh');