<script>
    var resizefunc = [];
</script>
	
	<script src='https://cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js'></script>
	<script src='https://rawgit.com/adrotec/knockout-file-bindings/master/knockout-file-bindings.js'></script>

	<!-- jQuery -->
	<script src="{{ asset('js/back_end/jquery.min.js') }}"></script>
	<script src="{{ asset('js/back_end/bootstrap.min.js') }}"></script>
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	<!-- jQuery Validation -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>


	<script src="{{ asset('js/back_end/detect.js') }}"></script>
	<script src="{{ asset('js/back_end/fastclick.js') }}"></script>
	<script src="{{ asset('js/back_end/jquery.blockUI.js') }}"></script>
	<script src="{{ asset('js/back_end/waves.js') }}"></script>
	<script src="{{ asset('js/back_end/jquery.slimscroll.js') }}"></script>
	<script src="{{ asset('js/back_end/jquery.scrollTo.min.js') }}"></script>
	
	<script src="{{ asset('js/back_end/plugins/imageupload.js') }}"></script>

	<script src="{{ asset('js/back_end/plugins/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('js/back_end/plugins/dataTables.bootstrap.js') }}"></script>
	<script src="{{ asset('js/back_end/plugins/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('js/back_end/plugins/buttons.bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/back_end/plugins/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('js/back_end/plugins/responsive.bootstrap.min.js') }}"></script>

	<script src="{{ asset('js/back_end/plugins/jquery.toast.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/back_end/plugins/select2.min.js') }}" type="text/javascript"></script>

	<!-- App js -->
	<script src="{{ asset('js/back_end/jquery.core.js') }}"></script>
	<script src="{{ asset('js/back_end/jquery.app.js') }}"></script>

	<script type="text/javascript">

		$.validate({
            modules : 'location, date, security, file, sanitize, toggleDisabled',
            disabledFormFilter : 'form.btn-disabled',
    
        });
		$(document).ready(function(){
			$('#datatable').DataTable();
			$('#datatable-1').DataTable();
		});

		// Select2
		$(".select2").select2();

        window.setTimeout(function(){
		  $('.alert').addClass("fadeOut");
		}, 7000);

		tinymce.init({
            selector: '#productDescription',
            /* theme of the editor */
            theme: "modern",
            skin: "lightgray",
            
            /* width and height of the editor */
            width: "100%",
            height: 200,
            
            /* display statusbar */
            statubar: true,
            
            /* plugin */
            plugins: [
                "advlist autolink link image lists charmap preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality paste textcolor"
            ],

            /* toolbar */
            toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor",
            
            
        });
	</script>

      

 