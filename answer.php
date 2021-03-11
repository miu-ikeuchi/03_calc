<?php
if (isset($_POST["num1"])) {
    $num1 = $_POST["num1"];
}
if (isset($_POST["operator"])) {
    $operator = $_POST["operator"];
}
if (isset($_POST["num2"])) {
    $num2 = $_POST["num2"];
}
if ($operator == "+") {
    $answer = $num1 + $num2; 
} elseif ($operator == "-") {
    $answer = $num1 - $num2;
} elseif ($operator == "×") {
    $answer = $num1 * $num2;
} elseif ($operator == "÷") {
    $answer = $num1 / $num2;
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h2, initial-scale=1.0">
    <title>計算結果</title>
</head>

<body>
    <h1>計算結果</h1>
    <div>
        <?php echo "$num1 " . "$operator " . "$num2 " . "= " . $answer ?>
    </div>
    <a href="calc_form.php">戻る</a>
</body>

</html>