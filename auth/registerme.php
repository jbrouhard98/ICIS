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



error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
// include configuration file

include (dirname(dirname(__FILE__)) . "/includes/config.inc.php"); // Include configuration
include (dirname(dirname(__FILE__)) . "/includes/password.php"); // include password_hash functionality

// Lets get the POST variables and put them into the DB

$username = $_POST['username'];
$password = $_POST['password'];

// We need to hash the password before we put it in.

$hash = password_hash($password, PASSWORD_BCRYPT);

// Now lets put this into the database

$sql = "INSERT INTO member (username, password) VALUES ('$username', '$hash')";
$result = mysqli_query($link, $sql) or die(mysql_error());

if (!$result){
	echo 'Failed to register you.';
   }
else {
	header("Location:/auth");
    }
