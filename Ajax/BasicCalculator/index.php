<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["sub"])){
        $text1 = $_POST["number1"];
        $text2 = $_POST["number2"];
        $oprnd = $_POST["sub"];


        if($oprnd=="+")
            $res = $text1 + $text2;
        elseif($oprnd=="-")
            $res = $text1 - $text2;
        elseif($oprnd=="X")
            $res = $text1 * $text2;
        elseif($oprnd=="/")
            $res = $text1 / $text2;
    }




?>
    <h1 style="margin-left:40%;">Calculator</h1>
    <form action="" method="post" style="margin-left:40%;">
        <input type="number" name="number1" value="<?php echo $text1;?>">
        <br>
        <input type="number" name="number2" value="<?php echo $text2;?>">
        <br>
        <input type="text" name="res" value="<?php echo $res;?>">
        <br>
        <br>
        <input type="submit" name ="sub" value="+">
        <input type="submit" name ="sub" value="-">
        <input type="submit" name ="sub" value="X">
        <input type="submit" name ="sub" value="/">
    </form>
</body>
</html>