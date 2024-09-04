<html>
<head>
</head>
<body>

<?php
	require 'vendor/autoload.php';
	$client=new MongoDB\Client("mongodb://localhost:27017");
	$companydb=$client->companydb;
	$empcollection=$companydb->empcollection;
	
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$age = isset($_POST['age']) ? $_POST['age'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$score = isset($_POST['score']) ? $_POST['score'] : 0;

	$insertOneResult=$empcollection->insertOne(
    	['name'=>$name,'age'=>$age,'email'=>$email]
	);
	$updateOneResult=$empcollection->updateOne(
		['name'=>$_POST['name']],
		['$set'=>['score'=>$_POST['score']]]
	);
	//$insertOneResult=$empcollection->insertOne(
	//	['name'=>'bharath','age'=>21,'skill'=>'java']
	//);
	//printf("inserted %d documents",$insertOneResult->getInsertedCount());
	$insertedId = $insertOneResult->getInsertedId();
	$insertedDocument = $empcollection->findOne(['_id' => $insertedId]);
	$insertedName = $insertedDocument['name'];
	//echo "Inserted name: " . $insertedName;
	echo "<p style='font-size: 24px; margin-top: 20px; text-align: center; color: #007bff;'>$insertedName</p>";
	//var_dump($insertOneResult->getInsertedId());
?>
</body>
</html>	