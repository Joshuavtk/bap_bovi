<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cola, Bier of Water</title>
</head>
<body>

<h1>Cola, Bier of Water</h1>

<form method="post" id="from">
    <label for="beverage">put it in</label>
    <input type="text" name="beverage" id="beverage"><br>
    <input type="submit" name="submit" value="garbage">

</form>


<?php
$drank = $_POST['beverage'];

switch ($drank) {
    case "cola":
        echo "Your favorite beverage is cola!";
        echo '<img src="http://www.coca-colacompany.com/brands/coca-cola/_jcr_content/representativephoto.img.png/1447039951329.png" alt="cola">';
        break;
    case "beer":
        echo "Beer is not allowed";
        echo '<img src="http://www.bsoos.nl/wp-content/uploads/logo-jupiler.png" alt="bier">';
        break;
    case "water":
        echo "Mineral water is the best for your body";
        echo '<img src="http://www.mountainspring.co.in/wp-content/uploads/2013/12/mineralPic.jpg" alt="mineralwater"> ';
        break;
    default:
        echo "Your favorite beverage is garbage";
}

?>
</body>
</html>
