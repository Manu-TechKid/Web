<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameErr="name is a required field";
        echo $nameErr;
    }
    else{
        $name=test_input($_POST["name"]);
        encho $name."<br/>"
    }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["email"])){
        $emailErr="email is required field";
    }
    else{
        $email = test_input($_POST["email"]);
        encho $email ."<br/>"

    }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["website"])){
        echo"website is required field";
    }
    else{
        $website=test_input($_POST["website"]);
        echo $website."<br/>"
    }
}
f($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["comment"])){
        echo"comment is required field";
    }
    else{
        $comment=test_input($_POST["comment"]);
        echo $commebt."<br/>"
    }
}
f($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["gender"])){
        echo"genderis required field";
    }
    else{
        $website=test_input($_POST["gender"]);
        echo $gender."<br/>"
    }
}
function test_input($data){
    $data=trim ($data);
    $data=stripslsshes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>