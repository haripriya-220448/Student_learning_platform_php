
<?php
$dsn="mysql:host=localhost;dbname=userdb";
$dbusername="root";
$password="";
try{
    $pdo=new PDO($dsn,$dbusername,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} 
catch(PDOException $e){
    echo "Connection failed:" .$e->getMessage();

}


