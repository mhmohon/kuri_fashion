	function autoCompleteLocation(){

		var location_element = document.getElementById("new_city_address");
		
		var defaultBounds = new google.maps.LatLngBounds(
		new google.maps.LatLng(-33.8902, 151.1759),
			new google.maps.LatLng(-33.8474, 151.2631));
		var options = {
		 // bounds: defaultBounds,
		  types: ['address']
		};

		var autocomplete = new google.maps.places.Autocomplete(location_element,options);
		
		autocomplete.setComponentRestrictions(
		{'country': ['bd']});
		
		google.maps.event.addListener(autocomplete,'place_changed',function(){
			
			var place = autocomplete.getPlace();
			
			var lat = place.geometry.location.lat();
			var longt = place.geometry.location.lng();
			
			
			$("#long_field").val(longt);
			$("#lat_field").val(lat);
			$("#address").val($("#location").val());
		
			
			
			  var componentForm = {
				street_number: 'short_name',
				route: 'long_name',
				locality: 'long_name',
				administrative_area_level_1: 'short_name',
				country: 'long_name',
				postal_code: 'short_name'
			  };

			 
		var input_fields = {
			street_number: $("#str_num"),
			postal_code:$("#zip_code"),
			route:$("#route"),
			locality:$("#local"),
			administrative_area_level_1:$("#division"),
			country:$("#country")
		}
			  
			  
			  
			
			
			   // Get each component of the address from the place details
			// and fill the corresponding field on the form.
			for (var i = 0; i < place.address_components.length; i++) {
			  var addressType = place.address_components[i].types[0];
			  
			  if (componentForm[addressType]) {
				var val = place.address_components[i][componentForm[addressType]];
				//document.getElementById(addressType).value = val;
				
				
				var input = input_fields[addressType];
				
				if(input){
					input.val(val);
				}
				
				
				
				//console.log(addressType+" -> "+val);
			  }
			}
			
			
		});
	
	}