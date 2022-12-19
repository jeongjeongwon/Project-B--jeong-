<!DOCTYPE html>
<html>
  <head>
    <title>search map</title>
  <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=be3a1d6c5b6bf597e6aea03d01ceb7b5&libraries=services"></script>
  </head>
  <body>
    <div id="map" style="width: 500px;height: 500px;"></div>
    <script>
      //? 지도 화면에 출력
      let infowindow = new kakao.maps.InfoWindow({zIndex:1});
      let mapData = document.getElementById('map')
      let center = new kakao.maps.LatLng(36.349264, 127.377699)
      mapOption = {
        center: center,
        level: 3
      }

      let map = new kakao.maps.Map(mapData, mapOption);

      //? 컨트롤러
      let controler = new kakao.maps.MapTypeControl();
      map.addControl(controler, kakao.maps.ControlPosition.TOPRIGHT);

      /**
       * ? 화면에 출력한 지도에서 입력한 장소 찾는 코드
       */
      let ps = new kakao.maps.services.Places();
      function placesSearchDB(data, status){
        if(status === kakao.maps.services.Status.OK){
          let bound = new kakao.maps.LatLngBounds();
          for(let i = 0; i < data.length; i++){
            displayMarker(data[i]);
            bound.extend(new kakao.maps.LatLng(data[i].y, data[i].x));
          }
          map.setBounds(bound);
        }
      }
      ps.keywordSearch("대전복합터미널", placesSearchDB);
      //? 마커를 찍는 코드
      function displayMarker(place){
        let marker = new kakao.maps.Marker({
          map: map,
          position : new kakao.maps.LatLng(place.y, place.x)
        });

        kakao.maps.event.addListener(marker, 'click', function(){
          infowindow.setContent('<div style="padding:5px; font-size:12px">' + place.place_name +'</div>');
          infowindow.open(map, marker);
        });
      }

      //? 선을 그리고 거리를 계산
    </script>
  </body>
</html>