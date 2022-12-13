<!DOCTYPE html>
<html>
  <head>
    <title>카카오 지도 API를 활용하기 위한 기본 연습 진행</title>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=be3a1d6c5b6bf597e6aea03d01ceb7b5"></script>
    <script type="text/javascript">
      window.onload = function(){
        var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(33.450701, 126.570667), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
  </body>
</html>