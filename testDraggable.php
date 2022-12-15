<!DOCTYPE html>
<html>
  <head>
    <title>Draggable 마커 이벤트 연습</title>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=be3a1d6c5b6bf597e6aea03d01ceb7b5"></script>
  </head>
  <body>
    <div id="map" style="width:500px;height:500px;"></div>
    <p id="result"></p>
    <script>
      let mapData = document.getElementById('map');
      mapOption={
        center: new kakao.maps.LatLng(36.349264, 127.377699),
        level: 3
      }
      let map = new kakao.maps.Map(mapData, mapOption)

      kakao.maps.event.addListener(map, 'click', function(mouseEvent){
        let latlng = mouseEvent.latLng;

        let message = "위도" + latlng.getLat()
        message += "경도" + latlng.getLng()

        let result = document.getElementById('result');
        result.innerHTML = message
      })

      let startPosition = new kakao.maps.LatLng(36.349264, 127.377699);

      let startMarker = new kakao.maps.Marker({
        map: map,
        position: startPosition,
        draggable: true
      })

      let endPosition = new kakao.maps.LatLng(36.349513, 127.437236);

      let endMarker = new kakao.maps.Marker({
        map: map,
        position: endPosition,
        draggable: true
      })

    </script>
  </body>
</html>