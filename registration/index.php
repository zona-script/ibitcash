﻿<?php
	$page = 'registration';
	$file = 'registration.php';
	$idpg = 3;
	include '../cfg.php';
	include '../ini.php';
	if($lng == "ru") {
		include "../template_ru.php";
	} else {
		include "../template.php";
	}
?>