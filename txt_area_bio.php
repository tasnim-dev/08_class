<?php

    $click =$_POST['Click'] ?? '';
    $bio =$_POST['bio'] ?? '';

    if(isset($click)){     
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio</title>
</head>
<body>
    <form action="" method="POST">
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea></br>
        <input type="submit" name="Click" value="Click to see your Bio below!">
    </form>   
</body>
</html>

<?php if($click){ ?>
    <h4> Your bio : </h4>
    <?php echo $bio;} ?>
    
    






    


