<?php
    if(!empty($_POST)){
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="input.php" method="POST">
    氏名
    <input type="text" name="your_name"></input>
    <br>
    <input type="checkbox" name="sports[]" value="野球"></input>野球
    <input type="checkbox" name="sports[]" value="サッカー"></input>サッカー
    <input type="checkbox" name="sports[]" value="バスケ"></input>バスケ
    <input type="submit" value="送信">

</form>

</body>
</html>