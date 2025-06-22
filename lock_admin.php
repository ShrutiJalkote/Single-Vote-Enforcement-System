<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['login_admin']))
{
	header("location: login.php");
}
include("config.php");
$user_check=$_SESSION['login_admin'];
$ses_sql=mysql_query("select * from polling_stations where username='$user_check' ");
$row=mysql_fetch_array($ses_sql);
?>