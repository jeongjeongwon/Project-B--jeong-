
<!DOCTYPE html>
<html>
  <body>
    <?php
    //? class와 instance
    //? 자기소개 간단히 만들어서 출력하기
    class jeongwon{
      public $name;
      public $age;
      public $gender;
      public $hobby;
      public $want;
      public function __construct($name, $age, $gender, $hobby, $want)
      {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->hobby = $hobby;
        $this->want = $want;
      }
      public function __destruct()
      {
        echo "제 이름은 {$this->name} 입니다.<br>";
        echo "제 나이는 {$this->age}이고, 제 성별은 {$this->gender}입니다.<br>";
        echo "제 취미는 {$this->hobby}이며, 제가 만들고 싶은 것은 {$this->want}입니다.";
      }
    }
    class whoAreYou extends jeongwon{
      public function message(){
        echo "<h1>저는 누구인가요?</h1><br>";
      }
    }
    $myName = new whoAreYou("정정원", "26살", "남자", "소설읽기와 다큐멘터리 시청", "국내뿐만 아니라 해외에서도 사람들이 이용하는 대규모 커뮤니티 사이트");
    $myName->message();

    //? 클레스에서 변수와 상수를 정의하고 함수또한 정의하기도 한다. 이떄 instance는 이 클레스를 가져다 사용하는 것이다.
    //* jeongwon이라는 클레스가 선언이 되어 있고 이를 whoAreYou 라는 클래스 객체가 상속받아 사용한다 이때 myName은 whoAreYou의 인스턴스이다.
    ?>
  </body>
</html>