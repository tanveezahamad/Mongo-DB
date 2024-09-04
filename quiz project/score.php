<html>
<head>
</head>
<body>

<?php
    require 'vendor/autoload.php';
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $companydb = $client->companydb;
    $empcollection = $companydb->empcollection;
    
    // Reading all documents from the collection
    $cursor = $empcollection->find();
?>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Score</th>
    </tr>
    <?php foreach ($cursor as $document): ?>
    <tr>
        <td><?php echo $document['name']; ?></td>
        <td><?php echo $document['age']; ?></td>
        <td><?php echo $document['email']; ?></td>
        <td><?php echo isset($document['score']) ? $document['score'] : ''; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>	