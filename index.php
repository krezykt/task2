<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<?php
if ( isset($_GET['math']) ) {
    switch ($_GET['math']) {
        case 'addition':
            $answer = $_GET['num1'] + $_GET['num2'];
            break;
        case 'substraction':
            $answer = $_GET['num1'] - $_GET['num2'];
            break;
        case 'multiplication':
            $answer = $_GET['num1'] * $_GET['num2'];
            break;
        case 'division':
            $answer = $_GET['num1'] / $_GET['num2'];
            break;      
    }
}
?>
<body>
    <form action="index.php" method="get">
        <input type="number" name="num1">
            <select name="math">
                <option value="addition">+</option>
                 <option value="substraction">-</option>
                 <option value="multiplication">*</option>
                <option value="division">/</option>
            </select>
        <input type="number" name="num2">
        <input type="submit" name="submit" value="Вывести результат">
        <p>Результат:</p>
        <input type="text" name="answer" value="<?php echo $answer;?>">
    </form>
</body>
</html>