<?php
if (isset($_GET ['submit'])){
    $name=$_GET['name'];
    $email=$_GET['email'];
if(empty($name)){
        echo "name is not filled";
}

 else if
    (empty($email)){
        echo "email is not filled";
    }
 else

    echo $name;
    echo "<br>";
    echo $email;

}



?>