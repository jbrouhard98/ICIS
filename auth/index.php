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
 
 
 
include (dirname(dirname(__FILE__)) . "/includes/class_template.php");
include (dirname(dirname(__FILE__)) . "/includes/config.inc.php");

$engine = new template;

$page = $engine -> buff_template('template');

$content = '<form method="POST" action="login.php">
  Username: <input type="text" name="username" size="15" /><br />
  Password: <input type="password" name="password" size="15" /><br />
  <div align="center">
    <p><input type="submit" value="Login" /></p>
  </div>
</form>';

$title = "Login";

$array = array('title' => $title,
				'nav' => $nav,
				'sidebar' => $sidebar,
				'info' => $info,
				'content' => $content);
				
echo $engine -> parse_variables($page, $array);
