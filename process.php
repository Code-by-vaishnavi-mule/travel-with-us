<?php
if(isset($_POST['btnsend'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $description=$_POST['description'];

    if(empty($name) || empty($email) || empty($description)){
        header('location:contactus.php?error');
    }
    
    else{
        $to= "admin@onlineittituts.com";
        if(mail($to,$description,$email)){
          header("location:contactus.php?success");
        }

      }
}
else{
    header("location:contactus.php");
}

?>