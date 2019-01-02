<?php
/**
 * Plugin Name:       tabSer
 * Description:       tab matters, do it well!
 * Version:           1.1.0
 * Author:            RTS team
 * Text Domain:       tabSer
 * GitHub Plugin URI: https://github.com/rockettravelsystem/tabSer/blob/master/tabSer.php
 */

// Hook the 'wp_footer' action hook, add the function named 'mfp_Add_Text' to it
add_action("wp_footer", "mfp_Add_Text");
 
// Define 'mfp_Add_Text'
function mfp_Add_Text()
{
  echo "<p style='color: black;'>After the footer is loaded, my text is added!</p>";
}
