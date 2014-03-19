<!--hoofd inlcudes-->
@include('layout/shared/head.php')
@include('layout/shared/map.php')

	<!--map-->
	<div id="mapClick" onclick="hideContent()"><span >&nbsp;</span></div>

@include('layout/shared/filter.php')
	
	<section id="section" class="rounded-top">
		
@include('layout/shared/header.php')

		<div id="content" class="scroll">

@yield('content')

		</div>
	</section>

@include('layout/shared/footer.php')