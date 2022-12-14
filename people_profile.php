<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <?php
    // class profileTag{
    //   public $name;
    //   public $age;
    //   public $gender;
    //   public $adress;

    //   public function __construct($name, $age, $gender, $adress)
    //   {
    //     $this->name = $name;
    //     $this->age = $age;
    //     $this->gender = $gender;
    //     $this->adress = $adress;
    //   }
    //   public function __destruct()
    //   {
    //     echo "이름: {$this->name}<br>";
    //     echo "나이: {$this->age}<br>";
    //     echo "성별: {$this->gender}<br>";
    //     echo "주소: {$this->adress}<br>";
    //   }
    // }

    // $jeong = new profileTag("정정원", "26살", "남", "대전대덕구법동");

//? if내부 class 구현 오류(될줄 알았다) 방식 변경 할 것
//? class내부에 if문 구현하는것도 오류
//     if($_SERVER["REQUEST_METHOD"] == "POST"){
//       class profile{
//       public $name = text_input($_POST["name"]);
//       public $age = text_input($_POST["age"]);
//       public $gender = text_input($_POST["gender"]);
//       public $adress = text_input($_POST["adress"]);
//       }
//       function text_input($data){
//         $data = trim($data);
//         $data = stripslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
//       }
//     }

class profile{
  public $name;
  public $age;
  public $gender;
  public $adress;
}
    $name = $age = $gender = $adress = " ";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = text_input($_POST["name"]);
  $age = text_input($_POST["age"]);
  $gender = text_input($_POST["gender"]);
  $adress = text_input($_POST["adress"]);
}

function text_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    ?>

    <h2>개인 정보 입력 장소</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      이름 : <input type="text" name="name"><br><br>
      나이 : <input type="text" name="age"><br><br>
      성별 : <input type="text" name="gender"><br><br>
      주소 : <input type="text" name="adress"><br><br>
      <input type="submit"><br>
    </form>

    <?php
    echo "이름 : $name<br>";
    echo "나이 : $age<br>";
    echo "성별 : $gender<br>";
    echo "주소 : $adress<br>";
    ?>
  </body>
</html>