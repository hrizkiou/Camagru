<?php
require_once 'database.php';

//try {
//
//    /* Table Users */
//    $sql = "CREATE TABLE `camagru`.`users`
//    ( `id` INT(11) NOT NULL AUTO_INCREMENT ,
//    `full_name` VARCHAR(255) NOT NULL ,
//    `email` VARCHAR(255) NOT NULL ,
//    `username` VARCHAR(255) NOT NULL ,
//    `password` TEXT NOT NULL ,
//    `token` TEXT NOT NULL ,
//    `profilpic` VARCHAR(255) DEFAULT './images/profile.png' ,
//    `active` TINYINT NOT NULL ,
//    `deleted` TINYINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
//    ";
//    $pdo->exec($sql);   // use exec() because no results are returned
//
//} catch (PDOException $e) {
//    die('Erreur : ' . $e->getMessage());
//}
//
//$pdo = null;

//$sql = file_get_contents('camagru.sql');
$pdo = new Database();
if (file_exists('test.sql')){
    $sql = file_get_contents('test.sql');
    if($pdo->conn->exec($sql)){
        unlink("test.sql");
        echo '<script>alert("Success!")</script>';
        echo '<script>setTimeout(function() {
            location.href = "/camagru/index"
          }, 500);</script>';
    }
}
else {
    echo '<script>alert("Error!")</script>';
}