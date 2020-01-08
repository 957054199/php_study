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
    <?php
        $name = "runoob";
        $a = <<<EOF
                "abc"$name
                "123"
EOF;

        echo $a;
        echo <<<EOF
            <h1>我的第一个标题</h1>
            <p>我的第一个段落。</p>
EOF;

    ?>
</body>
</html>
