<?php 

function getImage ($dir) {
	$imgs = array();
	//打开当前目录下的目录pic下的子目录common。
	
	$handler = opendir('resources/img/'.$dir);

	/* 其中$filename = readdir($handler)是每次循环的时候将读取的文件名赋值给$filename，为了不陷于死循环，所以还要让$filename !== false。一定要用!==，因为如果某个文件名如果叫’0′，或者某些被系统认为是代表false，用!=就会停止循环*/
	$filename = readdir($handler);
	while( ($filename = readdir($handler)) !== false ) 
	{
		  if($filename != "." && $filename != "..")
		  {
		  /**/
		  array_push($imgs, $filename);
		  }
	}

	closedir($handler);

	return $imgs;
}

//getImage('20140802');
?>