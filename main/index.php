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

foreach (glob(dirname(dirname(__FILE__)) . "/includes/*.php") as $filename)
{
    include $filename;
}

$engine = new template;

$page = $engine -> buff_template('template');

$content = "<p>&nbsp;</p>
    <p><center><img src=../theme/default/images/vengeance.png /></center></p>
	<p>Welcome to the membership database.</p>
	<p>Please check your profile from the members area to make changes to your profile with the group.</p>
	<p>If you have anything you need to change, or have any questions, please contact Computer Operations <compops@issproxima.org>p>
";

$title = "Dashboard";

$array = array('title' => $title,
				'nav' => $nav,
				'sidebar' => $sidebar,
				'info' => $info,
				'content' => $content);
				
echo $engine -> parse_variables($page, $array);
