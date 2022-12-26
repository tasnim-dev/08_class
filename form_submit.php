<?php

    print_r($_POST);
    echo "<br/>";

    if(empty($_POST['name'])){
        echo "<p style='color: red;'> Name is Required!<br>";
    } elseif(strlen($_POST['name']) < 3){
        echo "<p style='color: red;'> enter your name at least 3 character <br> ";
    } else{
        echo $_POST['name'];
        echo "<br/>";
    }

    if(empty($_POST['phone'])){
        echo "<p style='color: red;'> Phone number is Required! <br>";
    } elseif(is_int($_POST['phone'])){
        echo "<p style='color: red;'> Enter valid number <br>";
    } else{
        echo $_POST['phone'];
        echo "<br>";
    }

    if(empty($_POST['email'])){
        echo "<p style='color: red;'> Email is Required! <br>";
    } else{
        echo $_POST['email'];
        echo "<br>";
    }

    if(empty($_POST['age'])){
        echo "<p style='color: red;'> Select your age! <br>";
    } else{
        echo $_POST['age'];
        echo "<br>";
    }

    if(empty($_POST['date'])){
        echo "";
    } else{
        echo $_POST['date'];
        echo "<br>";
    }

    if(empty($_POST['gender'])){
        echo "<p style='color: red;'> Click your gender! <br>";
    } else{
        echo $_POST['gender'];
        echo "<br>";
    }

    if(empty($_POST['city'])){
        echo "";
    } else{
        echo $_POST['city'];
        echo "<br>";
    }
    if(empty($_POST['bio'])){
        echo "<p style='color: red;'> Write your bio";
    } else{
        echo $_POST['bio'];
        echo "<br>";
    }
?>