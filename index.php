<?php
include_once("config.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <a href="add.php">Add New Data</a><br/><br/>
 
    <table width='80%' border=1>
        <tr>
            <td>Name</td>
            <td>Age</td>
             <td>Address</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        <?php 
        
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['age']."</td>";
            echo "<td>".$res['address']."</td>";  
            echo "<td>".$res['email']."</td>";    
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>
</html>
