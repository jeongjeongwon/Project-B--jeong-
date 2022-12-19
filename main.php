<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=be3a1d6c5b6bf597e6aea03d01ceb7b5"></script>
  </head>
  <body>
    <?php
    $databaseDirectory = __DIR__ . "/myDatabase";
    $newsStore = new \SleekDB\Store("news", $databaseDirectory);
    ?>

  </body>
</html>