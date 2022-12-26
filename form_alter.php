<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Form Validation Check</h4>

<!-- Form build using html tag -->

    <form action="form_submit.php" method="POST">
        <div>
            <label>Name :</label>
                <input type="text" name="name" value="" >
        </div><br>

        <div>
            <label>Phone:</label>
                <input type="number" name="phone" value="" >
            </div><br>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="" >
        </div><br>
       
        <div>
            <label for="gender">Gender:</label><br>
                <input type="radio" name="gender" value=""><label for="gender">Male</label><br>
                <input type="radio" name="gender" value=""><label for="gender">Female</label><br>
                <input type="radio" name="gender" value=""><label for="gender">Others</label>
        </div><br>

        <div>
            <label for="age">Your age range?</label><br>
                <input type="checkbox" name="age" value=""><label>under 20</label><br>
                <input type="Checkbox" name="age" value=""><label>20-40</label><br>
                <input type="checkbox" name="age" value=""><label>40 or above</label>
        </div><br>

        <div>
            <label for="">Date of Birth</label>
            <input type="date" name="date">
        </div><br>

        <div>
            <label for="city">Address:</label>
                <select id="city" name="city">
                    <option value="">Select City</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                </select>
        </div><br>

        <div>
            <!-- <label for="bio">Write your bio:</label> -->
                <textarea name="bio" id="" cols="30" rows="10" placeholder="Write your bio here..."></textarea>
        </div>

        <input type="submit" name="submit" value="Submit Your Information">
    </form>
</body>
</html>