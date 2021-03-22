<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="setting-name.css?after">
    <title>Document</title>
</head>
<body>
    <h1><?php include 'setting-name.php';?></h1>
    <?php
        // 'user' 라는 폼 매개변수로 제출된 값 출력
        print $_POST['user'];
    ?>
    <h1>님은 무엇이 고민인가요?</h1> <br>
    <p> 개선하고 싶은 문제를 골라보세요. </p>

</body>
</html>