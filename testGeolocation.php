<!DOCTYPE html>
<html>

    <head>
      <title>geolocation 연습작업</title>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=be3a1d6c5b6bf597e6aea03d01ceb7b5"></script>
  </head>

  <body>
    <div id="map" style="width:500px;height:500px;"></div>
    <p id="result"></p>

    <script>
      let mapData = document.getElementById('map')
      mapOption = {
        center: new kakao.maps.LatLng("36.349273", "127.377693"),
        level: 3
      }
      let map = new kakao.maps.Map(mapData, mapOption)

      //? navigator.geolocation은 HTTP에서 사용하는 속성
      if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(function(position){
          let lat = position.coords.latitude //위도를 가져오는 변수
          let lug = position.coords.longitude //경도를 가져오는 변수
        })
      }
    </script>
  </body>

</html>