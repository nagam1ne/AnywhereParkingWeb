<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<div id="map" style="width: 400px; height: 280px;"></div>
<script type="text/javascript">
// 地図
var map = new google.maps.Map(document.getElementById("map"), {
  zoom: 14,
  center: new google.maps.LatLng(35.710139, 139.810833),
  scrollwheel: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
});

// マーカー
new google.maps.Marker({
  position: new google.maps.LatLng(35.710139, 139.810833),
  map: map,
  icon: new google.maps.MarkerImage(
    "images/car.png"                     // url
    //new google.maps.Size(31,31), // size
    //new google.maps.Point(0,0),  // origin
    //new google.maps.Point(16,16) // anchor
  )
});
</script>