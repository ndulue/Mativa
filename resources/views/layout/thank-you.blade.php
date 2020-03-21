<!DOCTYPE html>
<html>

<head>
        @section('page-content-title')
        Mativa - Checkout
        @endsection('page-content-title')
        @include('body\partials\head')

    </head>

    <body class="impx-body" id="top">

		<!-- HEADER -->
		<header id="impx-header">
			<div>
			<div class="impx-menu-wrapper style2 hp2" data-uk-sticky="top:
			.impx-slide-container; animation: uk-animation-slide-top">
					<!-- Mobile Nav Start -->
					<div id="mobile-nav" data-uk-offcanvas="mode: push; overlay: true">
				        <div class="uk-offcanvas-bar">

				            <ul class="uk-nav uk-nav-default">
				                <li><a href="{{route('slider.index')}}">Home</a></li>
				                <li><a href="{{route('room.index')}}">Rooms</a></li>
				                <li><a href="{{route('restaurant.index')}}">Restaurant</a></li>
				                <li><a href="{{route('spa.index')}}">Spa</a></li>
				                <li><a href="{{route('activities.index')}}">Activities</a></li>
					            <li><a href="{{route('about.index')}}">About Us</a></li>
								<li><a href="contact.html">Contact</a></li>
				            </ul>
				        </div>
				    </div>
				    <a href="#mobile-nav" class="uk-hidden@xl uk-hidden@l uk-hidden@m mobile-nav" data-uk-toggle="target: #mobile-nav"><i class="fa fa-bars"></i>Menu</a>
		            <!-- Mobile Nav End -->

		            <!-- Top Header -->
					<div class="impx-top-header style2">
						<div class="uk-container uk-container-expand">

							<div class="uk-grid">
								<!-- header phone -->
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
									<div class="impx-top-phone">
										<p><i class="fa fa-phone"></i> Phone : +234 7066818156</p>
									</div>
								</div><!-- header phone end-->
								<!-- header social media -->
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
									<div class="impx-top-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook-f"></i>Facebook</a></li>
											<li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
											<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
										</ul>
									</div>
								</div><!-- header social media end -->
							</div>

						</div>
					</div>
					<!-- Top Header End -->

					<div class="uk-container uk-container-expand">
						<div data-uk-grid>
							<!-- Header Logo -->
							<div class="uk-width-auto">
								<div class="impx-logo">
									<a href="index.html"><img src="{{ URL::to('src/images/logo.png') }}" class="" alt="Logo"></a>
								</div>
							</div>
							<!-- Header Logo End-->

							<!-- Header Navigation -->
							<div class="uk-width-expand uk-position-relative">

								<nav class="uk-navbar-container uk-navbar-transparent uk-visible@s uk-visible@m" data-uk-navbar>
									<div class="uk-navbar-right impx-navbar-right">

	        							<ul class="uk-navbar-nav impx-nav style2">

											<!-- Navigation Items -->
									    	<li class="uk-parent uk-active">
								    			<a href="{{route('slider.index')}}" class="uk-navbar-nav-subtitle"><div>Home<div class="uk-navbar-subtitle">Welcome</div></div></a>
									    	</li>
									    	<li>
									        	<a href="{{route('room.index')}}" class="uk-navbar-nav-subtitle"><div>Rooms<div class="uk-navbar-subtitle">Our Best Suites</div></div></a>
									        </li>
									        <li><a href="{{route('restaurant.index')}}"><div>Restaurant<div class="uk-navbar-subtitle">In-house Restaurant</div></div></a></li>
											<li><a href="{{route('spa.index')}}"><div>Spa<div class="uk-navbar-subtitle">Our Spa Service</div></div></a></li>
											<li><a href="{{route('about.index')}}" class="uk-navbar-nav-subtitle"><div>About<div class="uk-navbar-subtitle">Our Facilities</div></div></a></li>
									        <li><a href="contact.html" class="uk-navbar-nav-subtitle"><div>Contact<div class="uk-navbar-subtitle">Get in Touch</div></div></a></li>
									    </ul>
									    <!-- Navigation Items End -->

									</div>
								</nav>
							</div>
							<!-- Header Navigation End -->
						</div>
					</div>
				</div>
			</div>

		</header>

		<!-- HEADER END -->

        <!-- PAGE HEADING -->
        <div class="impx-page-heading uk-position-relative rooms">
			<div class="impx-overlay dark"></div>
			<div class="uk-container">
				<div class="uk-width-1-1">
					<div class="uk-flex uk-flex-left">
						<div class="uk-light uk-position-relative uk-text-left page-title">
							<h1 class="uk-margin-remove">Order Confirmation</h1><!-- page title -->
							<p class="impx-text-large uk-margin-remove">Your booking is succesfull</p><!-- page subtitle -->
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- PAGE HEADING END -->

		<!-- FOOTER -->
		@include('body\partials\footer')
		<!-- FOOTER END -->

    	<!-- Javascript -->
        @include('body\partials\js-scripts')


    </body>


</html>
