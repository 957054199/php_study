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
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])){
        $nameErr = "名字是必须的";
    }
    else{
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])){
        $emailErr = "邮箱是必填的";
    }
    else{
        $email = test_input($_POST["email"]);
    }
    if (empty($_POST["website"])){
        $website = "";
    }
    else{
        $website = test_input($_POST["website"]);
    }
    if (empty($_POST["comment"])){
        $comment = "";
    }
    else{
        $comment = test_input($_POST["comment"]);
    }
    if (empty($_POST["gender"])){
        $genderErr = "性别是必须的";
    }
    else{
        $gender = test_input($_POST["gender"]);
    }
}

//if ($_SERVER["REQUEST_METHOD"] == "POST"){
//
//    $email = test_input($_POST["email"]);
//    $gender = test_input($_POST["gender"]);
//    $comment = test_input($_POST["comment"]);
//    $website = test_input($_POST["website"]);
//}

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<h2>PHP 表单验证实例</h2>
<p><span class="error">* 必填字段</span> </p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    名字：<input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    邮箱：<input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    网址：<input type="text" name="website">
    <span class="error"><?php echo $websiteErr; ?></span>
    <br><br>
    备注：<textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    性别：<input type="radio" name="gender" value="女">女
    <input type="radio" name="gender" value="男">男
    <span class="error">* <?php echo $genderErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2>您输入的内容是：</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>