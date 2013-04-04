<?php
$file = 'textfile.txt';
include("textfile.txt");
$pyscript = '~/html/cgi-bin/pycount.py';
exec($pyscript, $output);
file_put_contents($file, $output);

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
if ($lang=="en"){
	print("<p> Browser language is English");
}
else if ($lang=="es"){
	print("<p> Browser language is Spanish");
}
else if ($lang=="it"){
	print("<p> Browser language is Italian");
}
else if ($lang=="fr"){
	print("<p> Browser language is French");
}
else{
	print("<p> You're using a weird, unknown browser language");
}
?>
