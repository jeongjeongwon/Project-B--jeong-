<!DOCTYPE html>
<html>
  <body>
    <?php
    $file = "./project-B/LK_MASTER.csv";

    //? fopen은 파일을 여는 기능을 하며 mode라는 변수가 필요하고 이는 액세스 유형 방식을 선택하는 역할을 진행한다
    //? 이번의 경우 "r"은 읽기 전용으로 연다는 선언이다.
    $openfile = fopen($file, "r");

    //? 파일을 읽고 반환하는 역할
    $cont = fread($openfile, filesize($file));
    echo $cont
    ?>
  </body>
</html>