<?php 
require 'php/get_info.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Server Dashboard</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
	<header>
		<h1>Server Dashboard</h1>
	</header>
	<nav>
		<ul>
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Settings</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
		<form>
			<input type="text" placeholder="Search...">
			<button type="submit">Search</button>
		</form>
	</nav>
	<section>
		<div class="card">
			<h2>Server Status</h2>
			<p>Online</p>
		</div>
		<div class="card">
			<h2>CPU Usage</h2>
			<p><?php echo getCpu() ?>%</p>
			
		</div>
		<div class="card">
			<h2>CPU Temperature</h2>
			<p><?php echo getCpuTemp() ?></p>
			
		</div>
		<div class="card">
			<h2>Memory Usage</h2>
			<p><?php echo getRam() ?>%</p>
		</div>
		<div class="card">
			<h2>Disk Usage</h2>
			<p><?php echo getUsedSpace() ?>%</p>
		</div>
		<div class="card">
			<h2>Network Usage</h2>
			<p>20%</p>
		</div>
		<div class="card">
			<h2>Users</h2>
			<p><?php echo getLoggedUsers() ?></p>
		</div>
	</section>
</body>
</html>
