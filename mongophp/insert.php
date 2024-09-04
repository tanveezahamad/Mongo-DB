<?php
	require 'vendor/autoload.php';
	$client=new MongoDB\Client("mongodb://localhost:27017");
	$companydb=$client->companydb;
	$empcollection=$companydb->empcollection;
	

	$insertOneResult=$empcollection->insertOne(
		['name'=>'bharath','age'=>21,'skill'=>'java']
	);
	printf("inserted %d documents",$insertOneResult->getInsertedCount());


	var_dump($insertOneResult->getInsertedId());
?>