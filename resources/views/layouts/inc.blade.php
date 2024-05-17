<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.head')

</head>
<body>
@include('includes.preloader')	
@include('includes.header')		
@include('includes.search')

@if(Request::route()->getName()!='indx')		
@include('includes.slider')	
@endif
@yield('slider')	

@include('includes.feature')		
@include('includes.productSection')
@include('includes.cartSection')	

@include('includes.testimonial')	

@include('includes.advertisment')	
	
@include('includes.shop')	
	
@include('includes.latestNews')	
	
@include('includes.logo')	
	
@include('includes.footer')	

@include('includes.copyright')		
	
@include('includes.foot')	
	
	

</body>
</html>