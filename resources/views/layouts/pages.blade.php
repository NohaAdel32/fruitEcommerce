<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.head')

</head>
<body>
@include('includes.preloader')	
@include('includes.header')		
@include('includes.search')		
	
@include('includes.breadcrumb')		

		
@yield('content')
	
@include('includes.logo')	
	
@include('includes.footer')	

@include('includes.copyright')		
	
@include('includes.foot')	
	
	

</body>
</html>