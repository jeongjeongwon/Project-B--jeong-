<!DOCTYPE html>
<html>
  <head>
    <title>API활용 지도 출력</title>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=be3a1d6c5b6bf597e6aea03d01ceb7b5"></script>
  </head>
  <body>
    <div id="map" style="width:500px;height:400px;"></div>
    <script>
      var testmap = document.getElementById('map'),
      mapoption = {
        center: new kakao.maps.LatLng(33.450701, 126.570667),
        level: 3
      }

      var map = new kakao.maps.Map(testmap, mapoption)
    </script>

    <?php
    //? 해당 작업 뭔가 문제가 존재 그 전에 돌아가던 PHP 파일도 현 파일 실행시 실행되지 않는 오류 확인
    ?>
  </body>
</html>