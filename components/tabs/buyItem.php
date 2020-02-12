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
    <div class="contentLine"></div>
    <div class="uploadItems">
        <?php
            require('sql.php');
            $sql = "SELECT NameOf, DescriptionOf FROM website ORDER BY id DESC";
            $result = $conn->query($sql);
        ?>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_array()): ?>
                <div class="buyProductName">
                    <p class="productNameBuy"><?php echo $row['NameOf']; ?></p>
                    <p class="productDescBuy"><?php echo $row['DescriptionOf'] ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif;?>
    <?php $conn->close(); ?>
    </div>
</body>
</html>

<!--  $show_img = base64_encode($row['ImageOf']); -->
