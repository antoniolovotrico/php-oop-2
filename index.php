<?php

include __DIR__ . "/user.php";
include __DIR__ ."/role.php";
include __DIR__  ."/post.php";

$antonio = new User('Antonio','Lo Votrico','antoniolovotrico','passpass');
$marco = new User('Marco','Mandi','marcomandi','wowowo');
$paolo = new User('Paolo','Antani','paoloantani','superp');
$oscar = new User('Oscar','Carogna','oscarcarogna','inviato');

$users = [$antonio,$marco,$paolo,$oscar];

$admin = new Role('Antonio','Lo Votrico','antoniolovotrico','passpass','Administrator','Yes');
$editor = new Role('Paolo','Antani','paoloantani','superp','Editor',  'Yes');

$roles = [$admin,$editor];

$post1 = new Post('Primo Post','General','Antonio');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style.css">
        <title>php-oop-2</title>
    </head>
    <body>
       
        <h2>User Box</h2>
           <?php foreach ($users as $user) { ?>
            <div class="user_card">
                <p> Name: <?php echo $user -> name   ?> </p>
                <p> Last Name: <?php echo $user -> last_name ?> </p>
                <p> Username: <?php echo $user -> username  ?> </p>
                <p> Password: <?php echo $user -> password ?> </p>
            </div>
            <?php } ?>
        
        <h2>Card Box</h2>
           <?php foreach ($roles as $user) { ?>
            <div class="role_card">
                <p> Name: <?php echo $user -> name   ?> </p>
                <p> Last Name: <?php echo $user -> last_name ?> </p>
                <p> Username: <?php echo $user -> username  ?> </p>
                <p> Password: <?php echo $user -> password ?> </p>
                <p> Role: <?php echo $user -> role  ?> </p>
                <p> Permission: <?php echo $user -> write_permission ?> </p>
                </div> 
            <?php } ?>
           
    </body>
</html>