<?php
/* 
 *  Copyright (C) 2012  Eric Isakson
 *  
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *  
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

function wywla_ptsa_theme_init() {
  
	// Extend system CSS with our own styles, set priority high to ensure we override everything else
	// This plugin should also be moved to the bottom of the plugin list in the admin console
	elgg_extend_view('css/elgg','wywla_ptsa_theme/css', 1000);
	
	// remove the elgg logo from the topbar
	elgg_unregister_menu_item('topbar', 'elgg_logo');
	
	// replace it with a link to the school website
	elgg_register_menu_item('topbar', array(
			'name' => 'wywla_logo',
			'href' => 'http://girls.wakeacademy.org/',
			'text' => "WYWLA",
			'priority' => 1,
			'link_class' => 'wywla-topbar-logo'
	));
	
}

elgg_register_event_handler('init','system','wywla_ptsa_theme_init');
?>