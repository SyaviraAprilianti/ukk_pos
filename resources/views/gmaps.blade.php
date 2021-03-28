<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5 - Multiple markers in google map using gmaps.js</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

 
	<script src="http://maps.google.com/maps/api/js"></script>

 
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>


  	<style type="text/css">
    	#mymap {
      		border:1px solid red;
      		width: 800px;
      		height: 500px;
    	}
  	</style>


</head>
<body>


 

  <div id="mymap"></div>


  <script type="text/javascript">


    var outlet = <?php print_r(json_encode($outlet)) ?>;


    var mymap = new GMaps({
      el: '#mymap',
      lat: -6.430220,
      lng: 106.844310,
	//   lat: 'latitude',
    //   lng: 'longitude',
      zoom:14
    });
	

    $.each( outlet, function( index, value ){
	    mymap.addMarker({
	      lat: value.latitude,
	      lng: value.longitude,
	      title: value.id_provinces,
	      click: function(e) {
	        // alert('This is '+value.id_provinces+', gujarat from India.');
			// mebuat konten untuk info window
        var contentString = '<h2>Hello Dunia!</h2>';

        // membuat objek info window
        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          position: lombok
        });
        
        // tampilkan info window pada peta
        infowindow.open(map);
	      }
	    });
		
   });
  </script>


</body>
</html>