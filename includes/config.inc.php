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

/**
 * Global Configuration Includes
 */
 
$host = "localhost"; // Database Host
$db_user = "proxmemdb"; // Database username
$db_pass = "seme2uhaq"; // Database password
$database = "jbrouhard_proxmemdb"; // Database name

$theme = dirname(dirname(__FILE__)) .'/theme/default/'; // Which theme are you using

// DO NOT EDIT BELOW THIS LINE! //

$link = mysqli_connect($host, $db_user, $db_pass, $database); // Create the link to the database
 
// If SQL connection fails, tell us why.
if(!$link){
	die(mysqli_connect_error() );
		}

	
$info = "You are logged in as ". $_SESSION['uname'] ."";

