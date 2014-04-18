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

/*
 * Session Checker
 * Check to see if session exists.  if not, send people back to the login screen.
 */
 
session_start();

// first lets find out if the session is VALID...

if (isset ($_SESSION['HTTP_USER_AGENT'])){
	{
		if($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT'])){
			header('location:'. dirname(dirname(__FILE__)) . '/login.php');
		}
	}
}
else
	{
		$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
	}
	
// Now lets check to see if the sesison username exists...
if(!isset($_SESSION['uname'])){
	header('location:'. dirname(dirname(__FILE__)) . '/login.php');
}
else{
	
}
