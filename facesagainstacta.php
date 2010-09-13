<?php
/*
Plugin Name: Faces against ACTA
Plugin URI: http://faces-against-acta.net/
Description: Adds a sidebar widget to display faces against ACTA.
Author: Peter Martischka
Version: 1.0.2
Author URI: http://pitapoison.de/
*/

function widget_faa_init()
{

	if ( !function_exists('register_sidebar_widget') || !function_exists('register_widget_control') )
		return;

	function widget_faa_control()
	{
	}

	function widget_faa($args)
	{
          echo "<style type=\"text/css\">";
          echo "#faa-table {border-collapse:collapse !important; border-spacing:0px !important; border-width:0px !important;;}";
          echo "#faa-table td, #faa-table tr, #faa-table a, #faa-table img {padding:0px !important; margin:0px !important; border-width:0px !important;}";      
          echo ".faa-link a {font-size:10px !important;font-family:Verdana,sans-serif !important;color:red !important;text-decoration:underline !important}";        
          echo "</style>";
                  
          echo "<center>";
          echo "<table id=\"faa-table\" style=\"border-width:0px;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"170\"><tr><td colspan=\"2\">";
          echo "<a href=\"http://faces-against-acta.net/\"><img src=\"".get_bloginfo('url')."/wp-content/plugins/faces-against-acta/header.png\" border=\"0\" width=\"170\" height=\"110\"></a>";
          echo "</td></tr><tr><td>";
          echo "<a href=\"http://faces-against-acta.net/\"><img src=\"http://img.faces-against-acta.net/random_small/?1\" border=\"0\" width=\"85\" height=\"110\"></a>";
          echo "</td><td>";        
          echo "<a href=\"http://faces-against-acta.net/\"><img src=\"http://img.faces-against-acta.net/random_small/?2\" border=\"0\" width=\"85\" height=\"110\"></a>";
       
          echo "</td></tr><tr><td>";
          echo "<a href=\"http://faces-against-acta.net/\"><img src=\"http://img.faces-against-acta.net/random_small/?3\" border=\"0\" width=\"85\" height=\"110\"></a>";
          echo "</td><td>";        
          echo "<a href=\"http://faces-against-acta.net/\"><img src=\"http://img.faces-against-acta.net/random_small/?4\" border=\"0\" width=\"85\" height=\"110\"></a>";
          echo "</td></tr>";
          echo "<tr class=\"faa-link\"><td colspan=\"2\"><center><b><a href=\"http://faces-against-acta.net/\">Put yourself into the galerie!</a></b></center></td></tr>";
          echo "<tr class=\"faa-link\"><td colspan=\"2\"><center><b><a href=\"http://wordpress.org/extend/plugins/faces-against-acta/\">Put this widget on your blog!</a></b></center></td></tr>";
          echo "</table></center>";
	}
	
	register_sidebar_widget('Faces against ACTA', 'widget_faa');
	register_widget_control('Faces against ACTA', 'widget_faa');
}

add_action('init', 'widget_faa_init');

?>
