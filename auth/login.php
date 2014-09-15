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

include (dirname( __FILE__ ) . '/includes/config.inc.php'); // Include configuration

// Lets run the login paths

ob_start();

$uname = $_POST['username'];
$passwd = $_POST['password'];

// Protect against MySQL Injection
$uname = stripslashes($uname);
$passwd = stripslashes($passwd);
$uname = mysqli_real_escape_string($link,$uname);
$passwd = mysqli_real_escape_string($link,$passwd);

// Hash the password
		
$passwd_hash = password_hash($passwd, PASSWORD_BCRYPT);

//Lets run the SQL
$sql = "SELECT * FROM member WHERE username = '$uname'";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($result);

$passwd_db = $row['password'];


// If result matched username and password, table row must be *ONE* row only
if (password_verify($passwd_hash, $passwd_db)){
	session_start();
		
	$_SESSION['uname'] = $uname;
	$_SESSION['token'] = $token;
	
	header("Location:/main");
	}
else{
	echo '<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Dark Login Form</title>
  <link rel="stylesheet" href="/assets/css/login.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body><center></center><h1 class=login>Unauthorized Access<br><br>Wrong Username or Password</h1></center></body></html>';
	header('Refresh:5; url=index.php');
}

ob_end_flush();
