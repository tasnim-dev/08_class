<?php

    $age=$_POST['age'] ?? '';
    
    if(isset($_POST['submit'])){
            if($age >=18){ ?>
               <p style="color: green;"><?php echo "Access";  ?></p> 
            <?php } else{ ?>
                <p style="color: red;"> <?php echo "Access denied!";?></p>
            <?php }?>
   <?php }
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age validation</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <label for="">Enter Your Age : </label>
            <input type="text" name="age">
            <input type="submit" name="submit" value="Age validation"></br></br>
        </div>
        
    </form>
</body>
</html>

