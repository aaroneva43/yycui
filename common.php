<?php 

function getImage ($dir) {
	$imgs = array();
	//�򿪵�ǰĿ¼�µ�Ŀ¼pic�µ���Ŀ¼common��
	
	$handler = opendir('resources/img/'.$dir);

	/* ����$filename = readdir($handler)��ÿ��ѭ����ʱ�򽫶�ȡ���ļ�����ֵ��$filename��Ϊ�˲�������ѭ�������Ի�Ҫ��$filename !== false��һ��Ҫ��!==����Ϊ���ĳ���ļ�������С�0�䣬����ĳЩ��ϵͳ��Ϊ�Ǵ���false����!=�ͻ�ֹͣѭ��*/
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