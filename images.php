<?php

$filepath = "images";


$handle = opendir($filepath);
while (false != ($file = readdir($handle))) {
	if ($file != "." && $file != ".." && $file != ".DS_Store" && $file != "index.html" && $file != "index.htm" && $file != "index.php") { 
		if ($output) $output .= "|";
        $output .= "$file";
    }
}

closedir($handle);
echo "&files=$output&";

?>