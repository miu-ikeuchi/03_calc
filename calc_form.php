<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算アプリ</title>
</head>

<body>
    <h1>計算アプリ</h1>
    <h2>計算入力して下さい</h2>
    <form action="answer.php" method="POST">
        <input required type="number" name="num1" id="num1">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="×">×</option>
            <option value="÷">÷</option>
        </select>
        <input required type="number" name="num2" id="num2">
        <input type="submit" value="計算">
    </form>
</body>

</html>