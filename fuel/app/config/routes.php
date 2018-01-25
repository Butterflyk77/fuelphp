<?php
return array(
	'_root_'  => 'original',  // 首頁
	'about'	 => 'original/about',
	'test' => 'original/test',

	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
