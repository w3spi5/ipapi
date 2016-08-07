<?php

	use Rypsx\Ipapi\Ipapi;

	require __DIR__ . '/../vendor/autoload.php';

	try {
	    $ipapi = new Ipapi('208.80.152.201');
	} catch (\Exception $e) {
	    print $e->getMessage();
	}

	var_dump($ipapi);
