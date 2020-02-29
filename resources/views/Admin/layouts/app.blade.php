<!DOCTYPE html>
<html>
<head>
	<title>Laginny Admin Panel</title>
	@include('admin.layouts.head')
</head>
<body>
<div class="container-scroller">
	@include('admin.layouts.sidebar')
	 <div class="container-fluid page-body-wrapper">
 	@include('admin.layouts.nav')
 	<div class="main-panel">
 		@yield('content')
 		@include('admin.layouts.footer')
 	</div>
</div>
</div>	

	@include('admin.layouts.foot')
</body>
</html>