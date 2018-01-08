<?php
return array(
	'_root_'  => 'original',  // The default route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
