<!DOCTYPE html>
<html>
  <head>
    <title>API활용 지도 출력 및 위도 경도 표기</title>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=be3a1d6c5b6bf597e6aea03d01ceb7b5"></script>
  </head>
  <body>
    <div id="map" style="width:500px;height:500px;"></div>
    <p id="result"></p>
    
    <script>
      // let mapPosition = new kakao.maps.LatLng(33.450701, 126.570667);
      // let mapData = document.getElementById('map'),
      // mapOption = {
        // center: mapPosition,
        // level: 3
      // }
      // let map = new kakao.maps.Map(mapData, mapPosition)

      let mapData = document.getElementById('map')
      mapOption = {
        center: new kakao.maps.LatLng(36.349264, 127.377699),
        level: 3
      }
      let map = new kakao.maps.Map(mapData, mapOption);

      kakao.maps.event.addListener(map, 'click', function(mouseEvent){
        let latlng = mouseEvent.latLng;

        let message = '클릭한 위치의 위도 : ' + latlng.getLat() + ', ';
        message += '경도: ' + latlng.getLng();

        let result = document.getElementById('result');
        result.innerHTML = message;
      });

      /**
       * ! 경도와 위도가 표기의 오류 발생
       * ? 이유 getLat과 getLng의 구분에 실패함
       * * get Lat은 선택한 해당 위치의 위도, getLng은 해당위치의 경도
       * * kakao map의 method에 대한 학습이 필요하다 여겨진다.
       */

    </script>
  </body>
</html>