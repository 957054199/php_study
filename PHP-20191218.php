<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>my first php page</h1>
    <?php
        $x = 5;
        $z = 5;
        $cars = array("volvo","bmw","toyota");

        function myTest()
        {
            static $y = 10;
            global $x, $cars;
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['z'];
            echo "<p>测试函数内变量：</p>";
            echo "变量 x 为：$x";
            echo "<br>";
            echo "变量 y 为：$y";
            echo "<br>";
            echo "我车的品牌是$cars[1]";
            $y++;
        }

        echo "<br>";
        echo "变量 z 为：$z";

        myTest();
        myTest();

        echo "<br>";
        echo "变量 z 为：$z";

        echo "<p>测试函数外变量</p>";
        echo "变量 x 为：$x";
        echo "<br>";
        echo "变量 y 为：$y";
    ?>
</body>
</html>