<?php

$wetter = file_get_contents ("https://www.metaweather.com/api/location/638242/");

$wetter = json_decode($wetter, true);

$wetter_heute = $wetter["consolidated_weather"][0];
 ?>

 <pre>

     <?php

     print_r($wetter["consolidated_weather"][0]["weather_state_name"] );

      ?>

  </pre>
