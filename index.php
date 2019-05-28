<html>
<head> motor </head>
<title> motor server </title>
<body>
<button><a href="?forward=true">forward</a></button>
<button><a href="?reverse=true">reverse</a> </button>
<button><a href="?left=true">left</a> </button>
<button><a href="?right=true">right</a></button>
<button><a href="?stop=true">stop</a></button>
<?php
shell_exec("/usr/local/bin/gpio -g mode 5 out");
shell_exec("/usr/local/bin/gpio -g mode 17 out");
shell_exec("/usr/local/bin/gpio -g mode 27 out");
shell_exec("/usr/local/bin/gpio -g mode 22 out");

if(isset($_GET['forward']))
{

echo "FORWARD";
shell_exec("/usr/local/bin/gpio -g write 5 1");


shell_exec("/usr/local/bin/gpio -g write 17 0");

shell_exec("/usr/local/bin/gpio -g write 27 0");

shell_exec("/usr/local/bin/gpio -g write 22 1");



}

else if(isset($_GET['reverse']))

{

echo "REVERSE";

shell_exec("/usr/local/bin/gpio -g write 5 0");

shell_exec("/usr/local/bin/gpio -g write 17 1");

shell_exec("/usr/local/bin/gpio -g write 27 1");

shell_exec("/usr/local/bin/gpio -g write 22 0");


}

else if(isset($_GET['left']))

{

echo "LEFT";

shell_exec("/usr/local/bin/gpio -g write 5 1");

shell_exec("/usr/local/bin/gpio -g write 17 0");

shell_exec("/usr/local/bin/gpio -g write 27 0");

shell_exec("/usr/local/bin/gpio -g write 22 0");

}

else if(isset($_GET['right']))
{
echo "RIGHT";

shell_exec("/usr/local/bin/gpio -g write 5 0");

shell_exec("/usr/local/bin/gpio -g write 17 0");

shell_exec("/usr/local/bin/gpio -g write 27 0");

shell_exec("/usr/local/bin/gpio -g write 22 1");


}
else if(isset($_GET['stop']))
{
echo "STOP";

shell_exec("/usr/local/bin/gpio -g write 5 0");

shell_exec("/usr/local/bin/gpio -g write 17 0");

shell_exec("/usr/local/bin/gpio -g write 27 0");

shell_exec("/usr/local/bin/gpio -g write 22 0");

}
?>
</body>
</html>
