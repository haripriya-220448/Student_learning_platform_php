<!-- CREATE TABLE users(
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(20),
    email varchar(50) not null,
    pwd varchar(20) not null,
    PRIMARY KEY(id)
           
); -->

<?php


function reg(){
   
 

    $username=$_POST["username"];
    $pwd=$_POST["pwd"];
    $email=$_POST["email"];
    try{
        require_once "dbh.inc.php";

        $query="INSERT INTO users(username,email,pwd) VALUES (?, ?, ?);";
        $stmts=$pdo->prepare($query);
        $stmts->execute([$username,$email,$pwd]);
        
        echo "Successfully registered.";

        $pdo=null;
        $stmts=null;
    

        die();

    } catch(PDOException $e){
        die("query bfailed:" .$e->getMessage());

    }

    
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
    reg();

    
}else{
    header("Location: signup.html");

}