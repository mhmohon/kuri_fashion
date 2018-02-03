var a = document.getElementById('street_address');
var b = document.getElementById('route');
var c = document.getElementById('locality');
var d = document.getElementById('administrative_area_level_1');
var e = document.getElementById('country');
var full = document.getElementById('my_full_address');

var lati = document.getElementById('latitude');
var longi = document.getElementById('longitude');

	function getMyLocation() {

    if(!!navigator.geolocation) {
    
        var map;
    
        var mapOptions = {
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        map = new google.maps.Map(document.getElementById('map'), mapOptions);
    
        navigator.geolocation.getCurrentPosition(function(position) {
			
			lati.value = position.coords.latitude;
			longi.value = position.coords.longitude;
			
            var geolocate = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            
            var infowindow = new google.maps.InfoWindow({
                map: map,
                position: geolocate
                
                    
            });
			
			
			var marker = new google.maps.Marker({
			  position: geolocate,
			  map: map
			});
            
            map.setCenter(geolocate);
            
			var locAPI = "http://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&sensor=true";
		
			$.get({
				url : locAPI,
				success: function(data){
					console.log(data);
					a.value = data.results[1].address_components['0'].long_name;
					b.value = data.results[1].address_components['1'].long_name;
					c.value = data.results[1].address_components['2'].long_name;
					d.value = data.results[1].address_components['5'].long_name;
					e.value = data.results[1].address_components['6'].long_name;
					
					full.value = data.results[1].address_components['0'].long_name+", ";
					full.value += data.results[1].address_components['1'].long_name+", ";
					full.value += data.results[1].address_components['2'].long_name+", ";
					full.value += data.results[1].address_components['5'].long_name+", ";
					full.value += data.results[1].address_components['6'].long_name;
				}
			});
        });
        
    } else {
        document.getElementById('map').innerHTML = 'No Geolocation Support.';
    }
    
};