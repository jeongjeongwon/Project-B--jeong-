<!DOCTYPE html>
<html>
  <head>
    <title>Draggable 마커 이벤트 연습</title>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=be3a1d6c5b6bf597e6aea03d01ceb7b5"></script>
  </head>
  <body>
    <div id="map" style="width:500px;height:500px;"></div>
    <script>
      let mapData = document.getElementById('map');
      mapOption={
        center: new kakao.maps.LatLng(36.349264, 127.377699),
        level: 3
      }
    </script>
  </body>
</html>