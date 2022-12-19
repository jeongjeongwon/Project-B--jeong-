<!DOCTYPE html>
<html>
  <head>
    <title>search map</title>
  <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=be3a1d6c5b6bf597e6aea03d01ceb7b5&libraries=services"></script>
  </head>
  <body>
    <div id="map" style="width: 500px;height: 500px;"></div>
    <script>
      let infowindow = new kakao.maps.InfoWindow({zIndex:1});
      let mapData = document.getElementById('map')
      let center = new kakao.maps.LatLng(36.349264, 127.377699)
      mapOption = {
        center: center,
        level: 3
      }

      let map = new kakao.maps.Map(mapData, mapOption);

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
      ps.keywordSearch("대전 맛집", placesSearchDB);

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
    </script>
</body>
</html>