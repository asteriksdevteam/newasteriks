<!DOCTYPE html>
<html lang="en">
	<head><base href="">
		<title>Asteriks Digital Admin Panel</title>
		<meta charset="utf-8" />
		<meta name="keywords" content="Asteriks Digital Admin Panel" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="{{ url('adminAssets/media/logos/favicon.ico') }}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{ url('public/adminAssets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('public/adminAssets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('public/adminAssets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('public/adminAssets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('public/adminAssets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('userAssets/images/Icon.svg') }}">
	</head>
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		
        @include('adminPanel.layouts.header')

        @yield('content')

        @include('adminPanel.layouts.footer')

        <script>var hostUrl = "{{ url('adminAssets/') }}";</script>
		<script src="{{ url('public/adminAssets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ url('public/adminAssets/js/scripts.bundle.js') }}"></script>
		<script src="{{ url('public/adminAssets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<script src="{{ url('public/adminAssets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<script src="{{ url('public/adminAssets/js/widgets.bundle.js') }}"></script>
		<script src="{{ url('public/adminAssets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ url('public/adminAssets/js/custom/widgets.js') }}"></script>
		<script src="{{ url('public/adminAssets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ url('public/adminAssets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ url('public/adminAssets/js/custom/utilities/modals/create-app.js') }}"></script>
		<script src="{{ url('public/adminAssets/js/custom/utilities/modals/users-search.js') }}"></script>
		<script src="{{ url('public/adminAssets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
		<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

		@stack('scripts')
		<script>
			$('#datatable').dataTable();
	 	</script>

	</body>
</html>