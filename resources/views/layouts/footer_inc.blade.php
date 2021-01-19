		<!-- jQuery library -->
		<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script> 
		{{-- Global Script --}}
		<script type="text/javascript">
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			    }
			}); 
		</script>
		{{-- PAGE LEVEL SCRIPTS --}}
		@stack('script')
	</head>
</html>
