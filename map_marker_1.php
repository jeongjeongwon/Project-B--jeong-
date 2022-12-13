<!DOCTYPE html>
<html>
  <head>
    <title>카카오 맵에 마커 찍기</title>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=be3a1d6c5b6bf597e6aea03d01ceb7b5"></script>
  </head>
  <body>
    <div id="map" style="width:500px;height:500px;"></div>
    <p id="result"></p>

    <script>
      let mapData = document.getElementById('map')
      mapOption ={
        center: new kakao.maps.LatLng(36.349264, 127.377699),
        level: 3
      }

      let map = new kakao.maps.Map(mapData, mapOption)

      let mapMarker = new kakao.maps.Marker({
        position: map.getCenter()
      });

      mapMarker.setMap(map);

      kakao.maps.event.addListener(map, 'click', function(mouseEvent){
        let latlng = mouseEvent.latLng;
        mapMarker.setPosition(latlng);
        let message = "위도 : " + latlng.getLat() + ", ";
        message += "경도 : " + latlng.getLng();

        let result = document.getElementById('result')
        result.innerHTML = message;
      })
    </script>
  </body>
</html>