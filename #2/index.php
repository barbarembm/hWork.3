<?php
  include "table1.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="" method="post">
    <input type="number" name="row" id="">Row====><br><br>
    <input type="number" name="column" id="">Column=><br><br>
    <input type="number" name="a" id="">Number a<br><br>
    <input type="number" name="b" id="">Number b<br><br>
    <input type="submit" value="submit" name="submit">
</form>

</body>
</html>

<?php
        // print_r($_POST);
        if(isset($_POST['submit'])){
            tanTable($_POST['row'],$_POST['column'],$_POST['a'] ,$_POST['b']);
        }
?>
