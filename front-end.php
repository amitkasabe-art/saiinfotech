<?php 
include 'connection.php';
$select = "SELECT * FROM demo";
// echo $select;
$fire1 = mysqli_query($connection , $select);
// echo "<pre>";
// print_r($fire1);
// echo "<pre>";
$rows = mysqli_num_rows($fire1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front end</title>
</head>
<body>
    <table style="border:1px solid black">
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <tr>
            <?php 
                while($row = mysqli_fetch_assoc()){

                }
            ?>
            <td><?php echo "123" ?></td>
            <td>123</td>
        </tr>
    </table>
</body>
</html>