<html> 
<head> 
<title>Navigates</title> 
</head> 
<body bgcolor= <?php echo $var='yellow' ?> > 
<?php
	require 'vendor/autoload.php';
	$client=new MongoDB\Client("mongodb+srv://syedahamadtanveez:21121A3540@ahamad01.vcdhj.mongodb.net/mydata?retryWrites=true&w=majority&appName=ahamad01");
	$companydb=$client->companydb;
	$empcollection=$companydb->empcollection;
	

	$insertOneResult=$empcollection->insertOne(
		['name'=>'ramanji','age'=>20,'skill'=>'frontend','color'=>'red','fontsize'=>12]
	);
	//printf("inserted %d documents",$insertOneResult->getInsertedCount());


	//var_dump($insertOneResult->getInsertedId());
?>
<p style="fontSize:1000px ;color:green;" ><?php echo 'ahamad' ?></p> 
</body> 
</html> 