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
        <div class="selloutForm">
            <form action="sellitem.php" class="selling" method="post">
                <textarea placeholder="Opis produktu..." required name="descOfProduct" class="descOfProduct"></textarea>
                <input type="file" accept="image/jpeg,image/png,image/gif, image/jpg" name="image" class="imgOfProduct">
                <input type="submit" value="Utwórz reklamę" class="productBtn" name="createProductBtn">
            </form>
        </div>
    </div>
</body>
</html>

<?php
error_reporting(E_ALL);
if(isset($_POST['createProductBtn'])){
require('sql.php');
    $productNameSell = $_POST['nameOfProduct'];
    $productDescriptionSell = $_POST['descOfProduct'];
    $productImgSell = $_POST['image'];
$sql = "INSERT INTO website (NameOF, DescriptionOf, ImageOf)  
VALUES ('$productNameSell', '$productDescriptionSell', '$productImgSell')";
    echo "<script lang='js'>alert('Reklama utworzona pomyślnie')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();




?> 