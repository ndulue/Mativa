<!DOCTYPE html>
<html>

<head>

    @section('title')
    Mativa - Restarant
    @endsection('title')
	@include('body.partials.head')

    </head>

    <body id="impx-body">

		<!-- HEADER -->
		<header id="impx-header">
			<div>
				<div class="impx-menu-wrapper style2 resto" data-uk-sticky="top: .impx-slide-container; animation: uk-animation-slide-top">

					<!-- Mobile Nav Start -->
					<div id="mobile-nav" data-uk-offcanvas="mode: push; overlay: true">
				        <div class="uk-offcanvas-bar">

				            <ul class="uk-nav uk-nav-default">
				                <li>
				                	<a href="index.html">Home</a>
				                </li>
				                <li>
						        	<a href="rooms1.html" class="uk-navbar-nav-subtitle">Rooms</a>
				                </li>
				                <li class="uk-active"><a href="restaurant.html">Restaurant</a></li>
				                <li><a href="spa.html">Spa</a></li>
				                <li><a href="activities.html">Activities</a></li>
				                <li class="uk-parent">
				                	<a href="#">Pages</a>
				                	<ul class="uk-nav-sub">
					                	<li><a href="about.html">About Us</a></li>
										<li><a href="testimonial.html">Testimonial</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="single-post.html">Single Post</a></li>
										<li><a href="gallery.html">Gallery</a></li>
										<li><a href="element.html">Element</a></li>
									</ul>
				                </li>
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
										<p><i class="fa fa-phone"></i> Phone : +62 123456789</p>
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
									<a href="index.html"><img src="{{ asset('src/images/logo.png') }}" class="" alt="Logo"></a>
								</div>
							</div>
							<!-- Header Logo End-->

							<!-- Header Navigation -->
							<div class="uk-width-expand uk-position-relative">
								<nav class="uk-navbar-container uk-navbar-transparent uk-visible@s uk-visible@m" data-uk-navbar>
									<div class="uk-navbar-right impx-navbar-right">
	        							<ul class="uk-navbar-nav impx-nav style2">
											<!-- Navigation Items -->
									    	<li class="uk-parent">
								    			<a href="index.html"><div>Home<div class="uk-navbar-subtitle">Welcome</div></div></a>
									    	</li>
									    	<li>
									        	<a href="rooms1.html"><div>Rooms<div class="uk-navbar-subtitle">Our Best Suites</div></div></a>

									        </li>
									        <li class="uk-active"><a href="restaurant.html"><div>Restaurant<div class="uk-navbar-subtitle">In-house Restaurant</div></div></a></li>
											<li><a href="spa.html"><div>Spa<div class="uk-navbar-subtitle">Our Spa Service</div></div></a></li>
											<li><a href="activities.html" class="uk-navbar-nav-subtitle"><div>Activities<div class="uk-navbar-subtitle">Our Facilities</div></div></a></li>
											<li class="uk-parent">
								    			<a href="#" class="uk-navbar-nav-subtitle"><div>Pages<div class="uk-navbar-subtitle">the Other Pages</div></div></a>
									    		<div class="uk-navbar-dropdown">
	                								<ul class="uk-nav uk-navbar-dropdown-nav">
														<li><a href="about.html">About Us</a></li>
														<li><a href="testimonial.html">Testimonial</a></li>
														<li><a href="blog.html">Blog</a></li>
														<li><a href="single-post.html">Single Post</a></li>
														<li><a href="gallery.html">Gallery</a></li>
														<li><a href="element.html">Element</a></li>
													</ul>
												</div>
									    	</li>
									        <li><a href="contact.html" class="uk-navbar-nav-subtitle"><div>Contact<div class="uk-navbar-subtitle">Get in Touch</div></div></a></li>
									    </ul>
									    <!-- Navigation Items End -->
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header>
		<!-- HEADER END -->

		<!-- HERO IMAGE -->
		<div class="impx-slide-container style1 resto">
			<div class="impx-slideshow-fw">
				<div class="impx-hero-resto uk-position-relative  uk-background-fixed uk-background-center-center uk-height-1-1">
					<div class="impx-overlay dark"></div>
			    	<div class="uk-container">
			    		<div class="uk-grid uk-flex uk-flex-center uk-flex-middle">
			    			<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-1@m  uk-width-1-1@s uk-position-center uk-margin-large-top">
		    					<div class="impx-slide-fw-caption resto-caption uk-position-relative uk-position-z-index uk-text-center uk-light">
		    						<!-- intro -->
						    		<h1 class="impx-text-shadow">Mativa Restaurant</h1>
						    		<p class="uk-margin-remove impx-text-shadow uk-text-lead">Etiam efficitur dapibus faucibus vehicula nulla sed.</p>
						    		<div class="uk-margin">
				    					<i class="fa fa-coffee impx-slide-icon impx-text-white"></i>
				    					<i class="fa fa-cutlery impx-slide-icon impx-text-white"></i>
				    					<i class="fa fa-glass impx-slide-icon impx-text-white"></i>
			    					</div>
			    					<!-- intro end -->
					    		</div>
				    		</div>
			    		</div>
		    		</div>
				</div>
			</div>
		</div>
		<!-- HERO IMAGE END -->

		<!-- FEATURES -->
        <div class="uk-padding uk-padding-remove-horizontal uk-padding-remove-bottom bg-color-gray  pattern-1 impx-resto-badge">
            <div class="uk-container">
                <div class="uk-grid">
                    <!-- Image -->
                    <div class="uk-width-2-5@xl uk-width-2-5@l uk-width-2-5@m uk-width-1-1@s uk-vertical-align-bottom uk-position-relative uk-position-z-index impx-negative-top xxlarge">
                        <img src="{{ asset('src/images/chef-woman.png') }}" alt="Chef Stand" class="img-resto-intro uk-align-center"/>
                    </div>
                    <!-- Image End -->
                    <!-- Contact Info -->
                    <div class="uk-width-3-5@xl uk-width-3-5@l uk-width-3-5@m uk-width-1-1@s impx-intro resto">
                        <h3>Make an Appointment</h3>
                        <p class="impx-text-large uk-margin-bottom">Rapior illuc, revocat autem Antiochus praeterea, quem audiamus. Immo videri fortasse. Nonne videmus quanta perturbatio rerum omnium consequatur, quanta confusio?</p>
                        <ul class="impx-list-inline impx-hours">
                            <li><i class="fa fa-check impx-text-aqua"></i><strong class="impx-text-aqua">Breakfast</strong> 6.00 AM  - 10.00 AM</li>
                            <li><i class="fa fa-check impx-text-aqua"></i><strong class="impx-text-aqua">Lunch</strong> 10.00 AM - 2.00 PM</li>
                            <li><i class="fa fa-check impx-text-aqua"></i><strong class="impx-text-aqua">Dinner</strong> 4.00 PM - 12.00 PM</li>
                        </ul>
                    </div>
                    <!-- Contact Info End -->
                </div>
            </div>
        </div>
        <!-- FEATURES END -->

        <!-- HIGHLIGHT -->
        <div class="uk-padding uk-margin-bottom resto-feat uk-padding-remove-horizontal">
			<div class="uk-container">
				<div data-uk-grid>

    				<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-width-1-1@s uk-margin-top">
    					<div class="impx-intro resto margin-medium"><!-- intro -->
    						<h3>Get Special Offers Now!</h3>
    						<p class="uk-margin-medium-bottom impx-text-large">Partim cursu et peragratione laetantur, congregatione aliae coetum quodam modo civitatis imitantur; Sed quae tandem ista ratio est? Nondum autem explanatum quid maxime natura vellet.</p>
    					</div><!-- intro end -->

    					<!-- highlight items -->
                        <ul class="uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-2@s" data-uk-grid>
                            <li class="resto-feat-item"><!-- highlight item #1 -->
                            	<div data-uk-grid>
	                                <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
	                                	<div class="uk-position-relative">
		                                    <img src="{{ asset('src/images/intro-img-1.jpg') }}" alt="resort" class="uk-border-circle">
		                                    <div class="impx-overlay light overlay-outline padding-medium"></div>
	                                    </div>
	                                </div>
	                                <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
	                                     <h5 class="uk-margin-remove-bottom">Feature Title</h5>
	                                    <p class="uk-margin-small-top uk-margin-remove-bottom">Nunc omni virtuti vitium contrario constructio interrete. Itaque ad tempus ad Pisonem omnes</p>
	                                </div>
	                            </div>
                            </li><!-- highlight item #1 end -->
                            <li class="resto-feat-item"><!-- highlight item #2-->
                            	<div data-uk-grid>
	                                <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
	                                	<div class="uk-position-relative">
	                                    	<img src="{{ asset('src/images/intro-img-2.jpg') }}" alt="resort" class="uk-border-circle">
	                                    	<div class="impx-overlay light overlay-outline padding-medium"></div>
	                                	</div>
	                                </div>
	                                <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
	                                    <h5 class="uk-margin-remove-bottom">Feature Title</h5>
	                                    <p class="uk-margin-small-top uk-margin-remove-bottom">Nunc omni virtuti vitium contrario constructio interrete. Itaque ad tempus ad Pisonem omnes</p>
	                                </div>
                                </div>
                            </li><!-- highlight item #2 end -->

                            <li class="resto-feat-item"><!-- highlight item #3 -->
                            	<div data-uk-grid>
	                                <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
	                                	<div class="uk-position-relative">
	                                    	<img src="{{ asset('src/images/intro-img-3.jpg') }}" alt="resort" class="uk-border-circle">
	                                    	<div class="impx-overlay light overlay-outline padding-medium"></div>
	                                	</div>
	                                </div>
	                                <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
	                                     <h5 class="uk-margin-remove-bottom">Feature Title</h5>
	                                    <p class="uk-margin-small-top uk-margin-remove-bottom">Nunc omni virtuti vitium contrario constructio interrete. Itaque ad tempus ad Pisonem omnes</p>
	                                </div>
	                            </div>
                            </li><!-- highlight item #3 end -->
                            <li class="resto-feat-item"><!-- highlight item #4 -->
                            	<div data-uk-grid>
	                                <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
	                                	<div class="uk-position-relative">
	                                    	<img src="{{ asset('src/images/intro-img-4.jpg') }}" alt="resort" class="uk-border-circle">
	                                    	<div class="impx-overlay light overlay-outline padding-medium"></div>
	                                	</div>
	                                </div>
	                                <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
	                                    <h5 class="uk-margin-remove-bottom">Feature Title</h5>
	                                    <p class="uk-margin-small-top uk-margin-remove-bottom">Nunc omni virtuti vitium contrario constructio interrete. Itaque ad tempus ad Pisonem omnes</p>
	                                </div>
	                            </div>
                            </li><!-- highlight item #4 end -->
                        </ul>
                        <!-- highlight items end -->
                    </div>

    				 <!-- Intro Text -->
                    <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-1@m">
                    	<div class="impx-img-stacked uk-padding-remove-horizontal">
                        	<img src="{{ asset('src/images/gallery/resto-gal-7.jpg') }}" alt="" class="">
                        	<img src="{{ asset('src/images/gallery/resto-gal-2.jpg') }}" alt="" class="">
                    	</div>
                    </div>
                    <!-- Intro Text End -->

				</div>
			</div>
		</div>
		<!-- HIGHLIGHT -->

		<!-- MENU BOOK -->
		<div id="impx-menu-carousel" class="impx-menu-carousel uk-padding uk-position-relative uk-padding-remove-horizontal mobile-rmv-pad vert uk-background-fixed uk-background-center-center uk-height-1-1">
			<div class="impx-overlay dark"></div>
			<div class="uk-container uk-container-large">

				<!-- Intro -->
				<div class="uk-grid uk-light">
					<div class="uk-width-xlarge-2-3 uk-width-large-2-3 uk-width-medium-3-4  uk-width-xlarge-1-1 uk-container-center impx-margin-top">
						<div class="impx-intro intro-light uk-text-center uk-contrast uk-position-relative uk-position-z-index" >
    						<h2 class="uk-margin-remove">Find Our Best Tasty Menu</h2>
    					</div>
					</div>
				</div>
				<!-- Intro End -->

				<!-- Menu groups -->
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-1-1">

						<div class="impx-menu-cat-group impx-menu-cat-group-carousel">
							<div class="uk-position-relative">
								<!-- Menu group #1 -->
								<ul class="uk-grid uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-collapse impx-menu-page-2col">
			    					<li class="impx-menu-cat-group-wrapper">
			    						<div class="impx-menu-cat-group-outline"></div>
			    						<div class="impx-menu-page-group impx-menu-page-3col">
			    							<div class="uk-grid uk-grid-medium uk-margin-medium-bottom impx-margin-bottom">
			    								<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-4-5@s impx-menu-page-group-title">
			    									<h4 class="uk-margin-remove">Breakfast</h4>
			    									<p>Nam vehementer repugnat, eundem beatum esse sunt</p>
			    								</div>
                                                <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-5@s uk-container-center">
                                                    <img src="{{ asset('src/images/menu/menu-square3.jpg') }}" alt="Menu Image" class="uk-border-circle uk-align-center" />
                                                </div>
			    							</div>
				    						<ul class="impx-menu-page menu-list">
                                                @foreach($breakfast as $bf)
												<li>
													<div class="impx-menu-page-item">
						    							<div class="impx-menu-page-content">
						  									<h5>{{ $bf->menu_title }}</h5>
						  									<div class="impx-menu-page-price">
						  										<h5>${{$bf->price}}</h5>
						  									</div>
						  									<p>{{$bf->menu_desc}}</p>
						  								</div>
								    				</div>
                                                </li>
                                                @endforeach
							    			</ul>
						    			</div>
			    					</li>
			    					<!-- Menu group #1 end -->

			    					<!-- Menu group #2 -->
			    					<li class="impx-menu-cat-group-wrapper">
			    						<div class="impx-menu-cat-group-outline"></div>
			    						<div class="impx-menu-page-group impx-menu-page-3col">
			    							<div class="uk-grid uk-grid-medium uk-margin-medium-bottom impx-margin-bottom">
			    								<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-4-5@s impx-menu-page-group-title">
			    									<h4 class="uk-margin-remove">Lunch</h4>
			    									<p>Nam vehementer repugnat, eundem beatum esse sunt</p>
			    								</div>
                                                <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-5@s">
                                                    <img src="{{ asset('src/images/menu/menu-square6.jpg') }}" alt="Menu Image" class="uk-border-circle uk-align-center" />
                                                </div>
			    							</div>
				    						<ul class="impx-menu-page menu-list">
                                                @foreach($lunch as $lh)
												<li>
													<div class="impx-menu-page-item">
						    							<div class="impx-menu-page-content">
						  									<h5>{{ $lh->menu_title }}</h5>
						  									<div class="impx-menu-page-price">
						  										<h5>${{$lh->price}}</h5>
						  									</div>
						  									<p>{{$lh->menu_desc}}</p>
						  								</div>
								    				</div>
                                                </li>
                                                @endforeach
							    			</ul>
						    			</div>
			    					</li>
			    					<!-- Menu group #2 end -->

			    					<!-- Menu group #3 -->
			    					<li class="impx-menu-cat-group-wrapper">
			    						<div class="impx-menu-cat-group-outline"></div>

			    						<div class="impx-menu-page-group impx-menu-page-3col">
			    							<div class="uk-grid uk-grid-medium uk-margin-medium-bottom impx-margin-bottom">
			    								<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-4-5@s impx-menu-page-group-title">
			    									<h4 class="uk-margin-remove">Dinner</h4>
			    									<p>Nam vehementer repugnat, eundem beatum esse sunt</p>
			    								</div>
                                                <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-5@s uk-container-center">
                                                    <img src="{{ asset('src/images/menu/menu-square3.jpg') }}" alt="Menu Image" class="uk-border-circle uk-align-center" />
                                                </div>
			    							</div>
				    						<ul class="impx-menu-page menu-list">
                                                @foreach($dinner as $dn)
												<li>
													<div class="impx-menu-page-item">
						    							<div class="impx-menu-page-content">
						  									<h5>{{ $dn->menu_title }}</h5>
						  									<div class="impx-menu-page-price">
						  										<h5>${{$dn->price}}</h5>
						  									</div>
						  									<p>{{$dn->menu_desc}}</p>
						  								</div>
								    				</div>
                                                </li>
                                                @endforeach
							    			</ul>
						    			</div>
			    					</li>
			    					<!-- Menu group #3 end -->
								</ul>
								<!-- Menu Groups End -->
							</div>
						</div>
						<!-- Menu Carousel Group End -->
					</div>
				</div>
				<!-- Menu Carousel End -->
    		</div>
		</div>
		<!-- MENU BOOK -->

		<!-- GALLERY -->
		<div class="uk-padding uk-margin-medium-bottom uk-padding-remove-horizontal">
            <div class="uk-container">
               <div class="uk-flex-center" data-uk-grid>
                    <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-text-center uk-margin-small-bottom"><!-- gallery intro -->
                        <h2 class="uk-margin-remove-bottom">Our Gallery</h2>
                        <p class="impx-text-large uk-margin-remove-bottom uk-margin-small-top impx-margin-bottom-small">Quare attende, quaeso. Illa sunt similia: hebes acies est cuipiam oculorum, corpore alius senescit; Quo modo autem optimum, si bonum praeterea nullum.</p>
                    </div><!-- gallery intro end -->
                </div>

                <!-- gallery items -->
           		<div class="uk-child-width-1-4@xl uk-child-width-1-4@l uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-medium impx-margin-top-small" data-uk-grid="masonry : true" data-uk-lightbox>
                    <div class="grid-item uk-margin-bottom"><!-- gallery item #1 -->
                    	<a class="uk-inline-clip uk-transition-toggle" href="images/gallery/resto-gal-1.jpg" data-caption="Caption 1">
	                        <img src="{{ asset('src/images/gallery/resto-gal-1.jpg') }}" alt="">
	                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
                                <h5>Image 1</h5>
                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
	                        </div>
	                    </a>
                    </div><!-- gallery item #1  end -->
                    <div class="grid-item" data-uk-lightbox><!-- gallery item #2 -->
                        <a class="uk-inline-clip uk-transition-toggle" href="images/intro-img-1.jpg" data-caption="Caption 2">
	                        <img src="{{ asset('src/images/intro-img-1.jpg') }}" alt="">
	                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 2</h5>
                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
	                        </div>
	                    </a>
                    </div><!-- gallery item #2 end -->
                    <div class="grid-item" data-uk-lightbox><!-- gallery item #3 -->
                        <a class="uk-inline-clip uk-transition-toggle" href="images/gallery/resto-gal-5.jpg"  data-caption="Caption 3">
	                        <img src="{{ asset('src/images/gallery/resto-gal-5.jpg') }}" alt="">
	                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 3</h5>
                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
	                        </div>
	                    </a>
                    </div><!-- gallery item #3 end -->
                    <div class="grid-item" data-uk-lightbox><!-- gallery item #4 -->
                        <a class="uk-inline-clip uk-transition-toggle" href="images/gallery/resto-gal-4.jpg"  data-caption="Caption 4">
	                        <img src="{{ asset('src/images/gallery/resto-gal-4.jpg') }}" alt="">
	                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 4</h5>
                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
	                        </div>
	                    </a>
                    </div><!-- gallery item #4 end -->
                    <div class="grid-item" data-uk-lightbox><!-- gallery item #5 -->
                        <a class="uk-inline-clip uk-transition-toggle" href="images/gallery/resto-gal-7.jpg"  data-caption="Caption 5">
	                        <img src="{{ asset('src/images/gallery/resto-gal-7.jpg') }}" alt="">
	                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 5</h5>
                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
	                        </div>
	                    </a>
                    </div><!-- gallery item #5 end -->
                    <div class="grid-item" data-uk-lightbox><!-- gallery item #6 -->
                        <a class="uk-inline-clip uk-transition-toggle" href="images/intro-img-3.jpg"  data-caption="Caption 6">
	                        <img src="{{ asset('src/images/intro-img-3.jpg') }}" alt="">
	                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 6</h5>
                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
	                        </div>
	                    </a>
                    </div><!-- gallery item #6 end -->
                    <div class="grid-item" data-uk-lightbox><!-- gallery item #7 -->
                        <a class="uk-inline-clip uk-transition-toggle" href="images/gallery/resto-gal-2.jpg" data-caption="Caption 7">
	                        <img src="{{ asset('src/images/gallery/resto-gal-2.jpg') }}" alt="">
	                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 7</h5>
                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
	                        </div>
	                    </a>
                    </div><!-- gallery item #7 -->
                    <div class="grid-item" data-uk-lightbox>
                        <a class="uk-inline-clip uk-transition-toggle" href="images/gallery/resto-gal-8.jpg" data-caption="Caption 8">
	                        <img src="{{ asset('src/images/gallery/resto-gal-8.jpg') }}" alt="">
	                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 8</h5>
                                <p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
	                        </div>
	                    </a>
                    </div><!-- gallery item #7 end -->
                </div>
                <!-- gallery items end -->
            </div>
        </div>
        <!-- GALLERY END -->

        <!-- CTA -->
        <div class="impx-resto-content bg-color-aqua pattern-1">
            <div class="uk-container">
            	<div data-uk-grid>
	            	<div class="uk-width-expand@xl uk-width-expand@l uk-width-expand@m uk-width-1-1@s">
	            		<div class="impx-badge-content left uk-light uk-margin-medium-top uk-text-right">
	                        <h4 class="uk-margin-small-bottom">Enim ad omnia respondere</h4>
	                        <p class="impx-text-large uk-margin-remove uk-visible@s">Omnes enim iucundum motum, quo sensus Neque solum ea communia, verum etiam paria dixerunt. Quicquid porro</p>
	                    </div>
	            	</div>
	            	<div class="uk-width-1-5@xl uk-width-1-5@l uk-width-1-4@m uk-width-1-1@s">
	            		<div class=" impx-resto-img impx-negative-top tiny">
	                        <img src="images/chef.jpg" alt="resort" class="uk-border-circle impx-outline-border transparent large">
	                    </div>
	            	</div>
	            	<div class="uk-width-expand@xl uk-width-expand@l uk-width-expand@m uk-width-1-1@s">
	            		<div class="impx-badge-content right uk-light uk-margin-medium-top">
	                        <h4 class="uk-margin-small-bottom">Longum est enim ad omnia</h4>
	                        <p class="impx-text-large uk-margin-remove uk-visible@s">Omnes enim iucundum motum, quo sensus Neque solum ea communia, verum etiam paria dixerunt. Quicquid porro</p>
	                    </div>
	            	</div>
            	</div>
            </div>
        </div>
        <!-- CTA END -->

		<!-- FOOTER -->
		@include('body.partials.footer')
		<!-- FOOTER END -->

    	<!-- Javascript -->
    	@include('body.partials.js-scripts')
    </body>


</html>
