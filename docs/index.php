<?php 
function getCpu(){
	$load = sys_getloadavg();
	return number_format((float)$load[0], 2, '.', '');
}

function getRam(){
	$free = shell_exec('free');
    $free = (string)trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    $memory_usage = $mem[2]/$mem[1]*100;

	
    return number_format((float)$memory_usage, 2, '.', '');
}

function getUsedSpace(){
	$df = disk_free_space("/");
	$ds = disk_total_space("/");
	$du = $ds - $df;
	$used_space_percentage = ($du / $ds)*100;
	return number_format((float)$used_space_percentage, 2, '.', '');
}
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
			<p>10</p>
		</div>
	</section>
</body>
</html>
