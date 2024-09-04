<html> 
<head> 
<title>Navigates</title> 
</head> 
<body bgcolor= <?php echo $var=$_POST['co'] ?> > 
<?php
	require 'vendor/autoload.php';
	$client=new MongoDB\Client("mongodb://localhost:27017");
	$companydb=$client->companydb;
	$empcollection=$companydb->empcollection;
	

	$insertOneResult=$empcollection->insertOne(
		['name'=>$_POST['uname'],'age'=>21,'skill'=>'java','color'=>$_POST['co'],'fontsize'=>$_POST['fsa']]
	);
	//printf("inserted %d documents",$insertOneResult->getInsertedCount());


	//var_dump($insertOneResult->getInsertedId());
?>
<p style="fontSize:1000px ;color:green;" ><?php echo $_POST['uname'] ?></p> 
</body> 
</html> 