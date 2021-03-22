<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="setting-method.css?after">
    <title>Document</title>
</head>
<body>
    <h1><?php include 'setting-name.php'?> 님은 </h1> <br>
    <h1>무엇이 고민인가요?</h1> <br>
    <p> 개선하고 싶은 문제를 골라보세요. </p> <br>
        <div id="holder">
            <form method="POST" action="fin-setting.php">
                <button class="select-method" type="select"> 깊은수면</button><br>
                <button class="select-method" type="select"> 감정 다스리기</button><br>
                <button class="select-method" type="select"> 집중과 몰입</button><br>
                <button class="select-method" type="select"> 일상에서 벗어나기</button><br>
                <button class="select-method" type="select"> 삶의 의미 찾기</button>
           </form>     
        </div>
        <button class="button">선택</button>
        <script src="Page Transition Effect.js"></script>
</body>
</html>