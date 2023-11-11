<?php
error_reporting("E_ALL & ~ E_NOTICE");
switch($_GET["file"])
{
	default:
	{
	$TIEUDE="Chúc Vk yêu 20/10 Vui vẻ";
	include_once("tpl/header.php");
	include_once("tpl/mylove.php");
	break;
	}
	case "enter":
	{
	$TIEUDE="Free PHP Lancer";
	include_once("tpl/header.php");
	include_once("tpl/enter.php");
	}
}
?>