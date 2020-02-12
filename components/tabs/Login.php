<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/styles/style.css">
    <title>Document</title>
</head>
<body>
<?php 
require('navigation.php');
?>
    <div class="contentLine">
        <div class="LoginArea">
            <form action="Login.php" method="post">
                <li><input type="text" placeholder="Wpisz swoje imię..." class="nameToEnter" required name="login"></a></li>
                <li><input type="text" placeholder="Hasło..." class="pass" required name="passwords"></li>
                <input type="submit" value="Wchodzić" class="logInBtn" name="logBtn">
            </form>
        </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['logBtn'])){
require('sql.php');
$userName1 = $_POST['login'];
$sql = "SELECT UserName  FROM registr";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<script lang='js'> alert('Cześć $userName1 !')</script>";
} else {
    echo "0 results";
}
$conn->close();
}
?>

 