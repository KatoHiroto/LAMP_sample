<?php
$dsn = 'mysql:dbname=user_db;host=localhost;';
$user = 'hiroto';
$password = 'Hiroto101!';
try {
    $dbh = new PDO($dsn, $user, $password);
    
    $sql = "select * "from user;";
    $result = $dbh->query($sql);
} catch (PDOException $e) {
    print "Failed: " . $e->getMessage() . "\n";
    exit();
}


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <mata name="viewport" content="width=devive-hidth, initial-scale=1.0">
</head>
<body>
    <?php foreach( $result as $calue) { ?>
    
        <h1><?php echo "$value[name]"; ?></h1>
        
    <? php } ?>    
</body>