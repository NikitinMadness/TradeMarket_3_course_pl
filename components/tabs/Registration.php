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
        <form action="Registration.php" method="post" class="regFormArea">
            <input type="text" placeholder="Wpisz imię..." required class="nameRegUser" name="userLogin">
            <input type="text" placeholder="Hasło..." required class="passRegUser" name="userPassword">
            <input type="text" placeholder="Wprowadź numer telefonu..." required class="numberRegUser" name="userPhoneNumber">
            <input type="submit" value="Zarejestrować się" class="regBtn" name="goRegBtn">
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST[goRegBtn])){
require('sql.php');
    $loginName =  $_POST['userLogin'];
    $userPassword = $_POST['userPassword'];
    $userPhoneNumber = $_POST['userPhoneNumber'];
$sql = "INSERT INTO registr (UserName, UserPassword, UserPhone) 
VALUES ('$loginName', '$userPassword', '$userPhoneNumber')";
if ($conn->query($sql) === TRUE) {
    echo "<script lang='js'> alert('Konto zostało utworzone pomyślnie!')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>