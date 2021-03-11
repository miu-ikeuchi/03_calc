<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>計算アプリ</h1>
    <h2>計算入力して下さい</h2>
    <form action="answer.php" method="POST" style="display:flex;">
        <div>
            <label for="num1"></label><br>
            <input required type="number" name="num1" id="num1">
        </div>
        <div style="margin-top: 24px; margin-left: 5px; margin-right: 5px;">
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="×">×</option>
                <option value="÷">÷</option>
            </select>
        </div>
        <div>
            <label for="num2"></label><br>
            <input required type="number" name="num2" id="num2">
        </div>
        <div>
            <input type="submit" value="計算" style="margin-top: 24px; margin-left: 5px;">
        </div>
    </form>
</body>

</html>