<?php
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$insert =  "INSERT INTO demo (username,password) values ('$username','$password') ";
echo $insert;
// echo $insert;
$fire = mysqli_query($connection , $insert);
echo $fire;
if($fire){
    echo "success";
}
else{
    echo "query failed";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:silver;
        }
        form{
            padding:15px;
            width:350px;
            height:auto;
            background-color:white; 
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);   
            border-radius:15px;
        }
        .submit{
            cursor: pointer;
        }
        .inner-form{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        .input-field{
            width:90%;
            margin:8px 0px;
            outline: none!important;
            height:30px;

        }
        .submit{
            width:90%;
            height:30px;
            border:none;
            background-color:lightgreen;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="inner-form">
        <input type="text" name="username" id="username" class="input-field">
        <input type="password" name="password" id="password" class="input-field">
        <input type="submit" value="login" class="submit" name="submit">
        </div>
    </form>
</body>
</html>