<?php

// This script will not read it self, and it will only effectively read documents from subfolders.

$required_folder = dirname($_SERVER['PHP_SELF']);
$root = $_SERVER['DOCUMENT_ROOT'].$required_folder;

function fixURL($url){
	$url = preg_replace(
		array('/http:\/\/[^\/]+/','/\.\./','/\/\//'),
		array('','','/'),
		$url);
	return $url;
}
function makeList($list,$title,$folder){
	if(count($list)) {
    	echo "<h2>$title</h2>";
    	foreach($list as $file) {
    		echo "<a href='?url=".fixURL("$folder/$file")."'>$file</a><br>";
    	}
	}
}


if(basename($_GET['url'])==basename($_SERVER['PHP_SELF'])) {
	echo "Can't view self.";
} else
if(empty($_GET['url']) || is_dir("$root/".$_GET['url'])) {
	$f = fixURL($_GET['url']);
	$folder = "$root/".$f;

	$folders = array();
	$files = array();

	if ($handle = opendir($folder)) {
    	while (false !== ($file = readdir($handle))) {
    		if($file=="." || $file==".." || $file==basename($_SERVER['PHP_SELF'])) continue;
    		if(is_dir("$folder/$file")) $folders[] = $file;
    		else $files[] = $file;
    	}

    	makeList($folders,"Folders",$f);
    	makeList($files,"Files",$f);

    	if(!count($folders) && !count($files)) {
    		echo "No Files";
    	}
    }
} else
if(!file_exists("$root/".$_GET['url'])) {
	echo "File or folder does not exist";
} else {
	header('Content-Type: text/plain');
	@readfile(fixURL("$root/".$_GET['url']));
}