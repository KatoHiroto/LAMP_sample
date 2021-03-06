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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar bg-dark navbar-dark">
            <div class="container-fruir">
                <div class="nav-header">
                    <a class="navbar-brand" href="index/html">LAMP SAMPLE PAGE</a>
                </div>
            </div>
        </nav>

        <div class="jumbotrom jumbotrom-fluid">
            <h1 class="display-4">DB Manager -sample_db-</h1>
            <p class="read">ただいまサンプルの制作を突貫工事で行っております<br>
            なにがなんだかさっぱりでございます。</p>
            <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="#insert" class="nav-link active" data-toggle="tab"></a></li>
                    <li class="nav-item"><a href="#select" class="nav-link" data-toggle="tab"></a></li>
                    <li class="nav-item"><a href="#update" class="nav-link" data-toggle="tab"></a></li>
                    <li class="nav-item"><a href="#deleat" class="nav-link" data-toggle="tab"></a></li>
                </ul>
                
                <div class="rab-page active" id="insert">
                    <p>Select</p>
                </div>
                <div class="rab-page " id="insert">
                    <p>Insert</p>
                </div>
                <div class="rab-page " id="insert">
                    <p>Update</p>
                </div>
                <div class="rab-page " id="insert">
                    <p>Deleat</p>
                </div>
            </div>
            
            <div class="containar">
                <div class="tab-pane active" id="Select">
                    <table class="table class table-striped">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Age</td>
                            </tr>
                        </thead>
                        <tbody >
                            <?php foreach($result as $value){ ?>
                            <tr>
                                <td><?php echo '$value[id]'; ?></td>
                                <td><?php echo '$value[name]'; ?></td>
                                <td><?php echo '$value[age]'; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            
            </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>