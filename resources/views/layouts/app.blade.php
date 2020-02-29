<!DOCTYPE html>
<html>
<head>
	<title>Lagginy</title>
	@include('layouts.head')
</head>
<body>
	<div class="main">
		@include('layouts.header')
		  <div class="clear"></div>
		  @yield('content')
	

	</div>
@include('layouts.footer')
</body>

</html>