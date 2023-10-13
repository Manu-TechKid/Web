<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name1 =test_input($_POST["name"]);
    $email=test_input($-PODT["email"]);
     $website=test_input($-PODT["website"]);
      $comment =test_input($-PODT["comment"]);
       $gender=test_input($-PODT["gender"]);
}
echo $name1 ."</br>".$email ."<br/>" .$website ."<br/>".$comment "<br/>" .$gender;
function test_input($data){
    $data =trim_input($data);
    $data =stripslashes($data);
    $data =htmlspecialchars($data)
    return $data;
}
?>