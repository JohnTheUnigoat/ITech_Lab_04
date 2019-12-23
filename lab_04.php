<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
    <form action="" method="post">
        <label for="first_num">First number:</label><br>
        <input type="number" name="first_num" id="first_num"><br>
        <label>Sign:</label><br>
        <input type="radio" name="sign" value="+" id="plus">
        <label for="plus">+</label><br>
        <input type="radio" name="sign" value="-" id="minus">
        <label for="minus">-</label><br>
        <input type="radio" name="sign" value="*" id="mult">
        <label for="mult">*</label><br>
        <input type="radio" name="sign" value="/" id="div">
        <label for="div">/</label><br>
        <label for="second_num">Second number:</label><br>
        <input type="number" name="second_num" id="second_num"><br>
        <!-- <button>Calculate</button> -->
        <input type="submit" name="submit"><br>

        <?php
        if(isset($_POST['submit']) && isset($_POST['sign'])) {
            echo (int)$_POST['first_num'] . ' ';
            echo $_POST['sign'] . ' ';
            echo (int)$_POST['second_num'] . ' = ';
            switch ($_POST['sign']) {
                case '+':
                    echo (int)$_POST['first_num'] + (int)$_POST['second_num'];
                    break;
                case '-':
                    echo (int)$_POST['first_num'] - (int)$_POST['second_num'];
                    break;
                case '*':
                    echo (int)$_POST['first_num'] * (int)$_POST['second_num'];
                    break;
                case '/':
                    echo (int)$_POST['first_num'] / (int)$_POST['second_num'];
                    break;
            }
        }
        ?>
    </form>
</body>
</html>
