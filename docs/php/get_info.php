<?php
include 'utils.php'; 

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

function getLoggedUsers(){
	return shell_exec('who | wc -l');
	
}

function getCpuTemp(){
    $temp = shell_exec('sensors -j');
    $jsontemp = json_decode($temp, true);
    $cpu_temp = $jsontemp["coretemp-isa-0000"]["Package id 0"]["temp1_input"] . "°C";
    consollog($cpu_temp);
    return $cpu_temp;

}

function getBattery(){
    $battery_command = str_replace("Battery 0: ","",shell_exec("acpi -b"));
    return $battery_command;
}
?>