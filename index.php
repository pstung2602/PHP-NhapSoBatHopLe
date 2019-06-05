<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>
        input[type=number] {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<br/>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="number" name="search1" placeholder="Nhập so 1"/><br>
    <input type="number" name="search2" placeholder="Nhập so 2"/><br>
    <input type="submit" id="submit" value="Calculate"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["search1"];
    $number2 = $_POST["search2"];
    function checkNumber($number1, $number2)
    {
        if ($number2 == 0 || $number1 == 0 && $number2 == 0) {
            throw new Exception("/by zero");
        } else {
            echo "tong = " . ($number1 + $number2) . "<br>";
            echo "hieu = " . ($number1 - $number2) . "<br>";
            echo "tich = " . ($number1 * $number2) . "<br>";
            echo "thuong = " . ($number1 / $number2);
        }
    };
    try {
        checkNumber($number1,$number2);
        echo 'If you see this, /by zero';
    }
    catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }



}
?>
</body>
</html>