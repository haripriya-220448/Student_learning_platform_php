<?php


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    $pwd=$_POST["pwd"];
    try{
        require_once "dbh.inc.php";

        $query="SELECT * FROM users WHERE email=? AND pwd=?;";
        $stmts=$pdo->prepare($query);
        $stmts->execute([$email,$pwd]);
        $user=$stmts->fetch(PDO::FETCH_ASSOC);

        if($user){
            echo "Login successful. Welcome, " .htmlspecialchars($user["username"]) . "!";

        } else{
            echo "Invalid email or password.";

        }

        $pdo=null;
        $stmts=null;

        die();

    } catch(PDOException $e){
        die("Query failed: " .$e->getMessage());
    }
}