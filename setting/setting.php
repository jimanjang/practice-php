<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?= $form->encode($_SERVER['PHP_SELF']) ?>">
        <section>
            <div id="setting_name">
                <h1>환영합니다.</h1> <br>
                <h1>이름을 알려주세요.</h1> <br>
                <h2>당신을 표현하는 별명이나 애칭도 좋아요.</h2> <br>
                    <?= $form->input(['name' => 'name']) ?>
                    <a href="#select_method"></a>
                        <!--<input type="text" placeholder="이름">
                            <a href="">
                                <button type="submit" form="selectform">선택</button>
                            </a>
                        -->
        </section>
        <section>
            <div id="select_method">
                <h1>무엇이 고민인가요?</h1> <br>
                <h2>개선하고 싶은 문제를 골라보세요.</h2> <br>
                    <ol>
                        <?= $form->select($GLOBALS['method'], ['name' => 'method', 'multiple' => true]) ?>
                    </ol>
                    <button type="submit" form="selectform">
                        <a href="#setting_fin"></a>
                    </button>
                        <!--<ol>
                        <button type="button">깊은 수면</button>
                        <button type="button">감정 다스리기</button>
                        <button type="button">집중과 몰입</button>
                        <button type="button">일상에서 벗어나기</button>
                        <button type="button">삶의 의미 찾기</button>
                        </ol>
                        <a href="">
                            <button type="submit" form="selectform">선택</button>
                        </a>
                        -->
            </div>
        </section>
        <section>
            <div id="setting_fin">
                <h1>고요한 자연 속에서</h1> <br>
                <h1>깊은 잠을 청해보세요</h1> </br>
                    <p>숙면이 어려운 이유는 원인 모를 불안과 피로,
                        스트레스 때문입니다. 자연이 지닌 치유의
                        힘으로 지친 심신을 회복하세요.
                    </p>
                <a href="setting_noti">
                    <button type="submit" form="selectform">블림프 타고 떠나기</button>
                </a>
            </div>
        </section>
        <section>
            <div id="setting_noti">
                <button id="enable" onClick="notification">알림 허용</button>
            </div>
            <a href="./home.html"></a>
        </section>
    </form>
</body>
</html>