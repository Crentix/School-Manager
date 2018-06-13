<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>School-Manager</title>

	<meta name="viewport" content="width=divice-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
	
	<div class="wrapper">
	<div id="bg"></div>
	<div class="mask"></div>

	<div id="overlay" class="overlay" onclick="toggleMenu();"></div>

	<div id="header">
		<div class="header-section">
			<img class="lang-flag" src="images/if_flag-english_be.png" alt="lang" />
			<span class="divider"></span>
			<a href="#" class="logout">Logout</a>
		</div>
		<a id="menu-icon" class="menu-icon" onclick='toggleMenu();'></a>
		<div id="mobile-header-section" class="mobile-header-section">
			<img id="lang-flag" class="lang-flag" src="images/if_flag-english_be.png" alt="lang" />
			<span class="divider"></span>
			<a href="#" class="logout">Logout</a>
		</div>
	</div>