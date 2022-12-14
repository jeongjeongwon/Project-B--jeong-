<!DOCTYPE html>
<html>
  <body>
    <?php
    class jeongjeongwon
    {
      public $name;
      public $age;
      public $contry;
      
      function set_profile($name, $age, $contry){
        $this->name = $name;
        $this->age = $age;
        $this->contry = $contry;
      }

      function get_name(){
        return "제 이름은 {$this->name} 입니다.";
      }
      function get_age(){
        return "제 나이는 {$this->age} 입니다";
      }
      function get_contry(){
        return "제가 살고 있는 곳은{$this->contry} 입니다.";
      }
    }

    $myprofile = new jeongjeongwon();
    $myprofile->set_profile("정정원", "26살", "대한민국 대전광역시");

    echo $myprofile->get_name();
    echo "<br>";
    echo $myprofile->get_age();
    echo "<br>";
    echo $myprofile->get_contry();
    ?>
  </body>
</html>