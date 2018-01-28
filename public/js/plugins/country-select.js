$(document).ready(function(){

 load_json_data('division');

 function load_json_data(id, parent_id)
 {
  var html_code = '';
  $.getJSON('json/BD_country_state_city.json', function(data){

   html_code += '<option value="">Select '+id+'</option>';
   $.each(data, function(key, value){
    if(id == 'division')
    {
     if(value.parent_id == '0')
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
    else
    {
     if(value.parent_id == parent_id)
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
   });
   $('#'+id).html(html_code);
  });

 }

 $(document).on('change', '#division', function(){
  var country_id = $(this).val();
  if(country_id != '')
  {
   load_json_data('region', country_id);
  }
  else
  {
   $('#region').html('<option value="">Select Region</option>');
  }
 });
});