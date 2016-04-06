<?php
require_once("class.php");
$monitor = new energyMonitor();
$op = $_POST['option'];
?>

<html>
<title>Linux ACPI Monitor</title>
<head>
<style type="text/css">
body{background-color: black; color: white; text-align: center;}
</style>

</head>

<body>

<div style="width: 100%; float: left; text-align: center;">LINUX ACPI MONITOR</div>

<div style="width: 100%; margin-top: 20px; float: left; text-align: center;">

<div style="margin: auto; width: 35%;">

<div style="float: left; margin-left: 10px;">
<form name="battery" action="index.php" method="post">
<button>BATTERY</button>
<input type="hidden" name="option" value="battery">
</form>
</div>


<div style="float: left; margin-left: 10px;">
<form name="acAdapter" action="index.php" method="post">
<button>AC ADAPTER</button>
<input type="hidden" name="option" value="acAdapter">
</form>
</div>


<div style="float: left; margin-left: 10px;">
<form name="cooling" action="index.php" method="post">
<button>COOLING</button>
<input type="hidden" name="option" value="cooling">
</form>
</div>


<div style="float: left; margin-left: 10px;">
<form name="details" action="index.php" method="post">
<button>DETAILS</button>
<input type="hidden" name="option" value="details">
</form>
</div>


<div style="float: left; margin-left: 10px;">
<form name="all" action="index.php" method="post">
<button>ALL</button>
<input type="hidden" name="option" value="all">
</form>
</div>
</div>

</div>

<div style="width: 100%; float:left; text-align: center; margin-top: 20px;">
<?php
if($op == "" || $op == "all"){
$monitor -> battery();	
print '<br />';
$monitor -> acAdapter();
print '<br />';
$monitor -> thermal();
print '<br />';
$monitor -> cooling();
print '<br />';
$monitor -> details();
}
else if($op == "battery"){
$monitor -> battery();	
print '<br />';
}
else if($op == "acAdapter"){
$monitor -> acAdapter();
print '<br />';
}
else if($op == "cooling"){
$monitor -> cooling();
print '<br />';
}
else if($op == "details"){
$monitor -> details();
print '<br />';
}
else{
$monitor -> battery();	
print '<br />';
$monitor -> acAdapter();
print '<br />';
$monitor -> thermal();
print '<br />';
$monitor -> cooling();
print '<br />';
$monitor -> details();
	
}
?>
</div>

</body>
</html>