<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php

include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
       
        $result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");
        
        
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
}
?>
</body>
</html>

<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="age" required=""></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" required=""></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>
