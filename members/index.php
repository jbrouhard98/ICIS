<?php

/* 
 * Copyright (C) 2014 jbrouhard
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

//include './includes/session.inc.php'; // Include session header files

require dirname(dirname(__FILE__)) .'/includes/config.inc.php'; // Lets include the configuration file for this.

require dirname(dirname(__FILE__)) .'/includes/class_template.php'; // Include the theme engine

include 'sidebar.php'; // Include nav data for sidebar

$engine = new template;

$page = $engine -> buff_template('template');

$content = "Hello World<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";

$title = "USS Navras Membership Database";

$array = array('title' => $title,
				'nav' => $nav,
				'sidebar' => $sidebar,
				'info' => $info,
				'content' => $content);
				
echo $engine -> parse_variables($page, $array);
