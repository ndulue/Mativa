<!DOCTYPE html>
<html>

<head>
        @section('page-content-title')
        Mativa - Checkout
        @endsection('page-content-title')
        @include('body\partials\head')

        <script src="https://js.stripe.com/v3/"></script>
        <style>
            .StripeElement {
                box-sizing: border-box;
                height: 40px;
                padding: 10px 12px;
                border: 1px solid transparent;
                border-radius: 4px;
                background-color: white;
                box-shadow: 0 1px 3px 0 #e6ebf1;
                -webkit-transition: box-shadow 150ms ease;
                transition: box-shadow 150ms ease;
            }

            .StripeElement--focus {
                box-shadow: 0 1px 3px 0 #cfd7df;
            }

            .StripeElement--invalid {
                border-color: #fa755a;
            }

            .StripeElement--webkit-autofill {
                background-color: #fefde5 !important;
            }
        </style>

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
        @section('page-content-title')
        Checkout
        @endsection('page-content-title')

        @section('page-content-subtitle')
        Proceed to order your room
        @endsection('page-content-subtitle')
		@include('body\partials\Head-content')
		<!-- PAGE HEADING END -->

		<!-- BOOKING FORM -->
		<div class="uk-padding bg-color-aqua pattern-1">
			<div class="uk-container">


                @if(session()->has('email') || session()->has('guest') || session()->has('arrival') || session()->has('departure') || session()->has('room'))


                @php
                    $type = session()->get("room");
                    $room = DB::table('rooms')->where('title',$type)->pluck('price');
                    $email = session()->get('email');
                    $duration = session()->get('time')/86400;
                    $guest = session()->get('guest');
                    $room_type = session()->get('room');

                @endphp


                    <div class="uk-flex uk-flex-center" data-uk-grid>
					<div class="uk-width-1-1">
						<div class="impx-hp-booking-form hp2 no-margin">
							<h6 class="uk-heading-line uk-text-center impx-text-white uk-text-uppercase"><span>Checkout Form</span></h6>
							<form action="{{route('checkout.store')}}" method="POST" class="uk-grid-margin-small uk-child-width-1-1@xl uk-child-width-1-1@l uk-child-width-1-1@m uk-child-width-1-3@s" id="payment-form" data-uk-grid>
                                {{ csrf_field() }}
                                <div class="uk-form-controls uk-position-relative">
							    	<label class="uk-form-label">Email</label>
							    	<span class="uk-form-icon select-icon" data-uk-icon="icon: mail"></span>
							        <input class="uk-input uk-border-rounded" value="{{$email}}" name="email" type="text" disabled>
							    </div>
								<div class="uk-form-controls uk-position-relative">
							    	<label class="uk-form-label">Duration</label>
							    	<span class="uk-form-icon select-icon" data-uk-icon="icon: time"></span>
							        <input class="uk-input uk-border-rounded" name="duration" value="{{$duration}} days" type="clock" disabled>
							    </div>
								<div class="uk-form-controls uk-position-relative">
							    	<label class="uk-form-label">Guest</label>
							    	<span class="uk-form-icon select-icon" data-uk-icon="icon: user"></span>
							        <input class="uk-input uk-border-rounded" value="{{$guest}}" type="text" disabled>
							    </div>
								<div class="uk-form-controls uk-position-relative">
							    	<label class="uk-form-label">Room</label>
							    	<span class="uk-form-icon select-icon" data-uk-icon="icon: home"></span>
							        <input class="uk-input uk-border-rounded" name="room_type" type="text" value="{{$room_type}}" disabled>
                                </div>
                                @foreach ($room as $price)
								<div class="uk-form-controls uk-position-relative">
							    	<label class="uk-form-label">Price of selected room</label>
							    	<span class="uk-form-icon select-icon" data-uk-icon="icon: home"></span>
							        <input class="uk-input uk-border-rounded" type="text" value="₦{{$price}}" disabled>
							    </div>
                                @endforeach

							    <input class="uk-input uk-border-rounded" name="total" type="text" value="{{$price*$duration}}" hidden>
                                <div class="form-group">
                                    <label for="card-element">
                                      Credit or debit
                                    </label>
                                    <div id="card-element">
                                      <!-- Elements will create input elements here -->
                                    </div>

                                    <!-- We'll put the error messages in this element -->
                                    <div id="card-errors" role="alert"></div>
                                </div>

							    <!--<div>
							    	<label class="uk-form-label empty-label">&nbsp;</label>
							        <button></button>
							    </div>-->

                                <button class="uk-button submit uk-width-1-1" id="submit">₦{{$price*$duration}}</button>
							</form>
						</div>
					</div>
                    </div>

                @else
                    @php
                        redirect()->back();
                    @endphp
                @endif



			</div>
		</div>
		<!-- BOOKING FORM END -->

		<!-- FOOTER -->
		@include('body\partials\footer')
		<!-- FOOTER END -->

    	<!-- Javascript -->
        @include('body\partials\js-scripts')
        @section('extra-js')
            <script>
                function() {
                // Create a Stripe client.
                var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');

                // Create an instance of Elements.
                var elements = stripe.elements();

                // Custom styling can be passed to options when creating an Element.
                // (Note that this demo uses a wider set of styles than the guide below.)
                var style = {
                    base: {
                        color: '#32325d',
                        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                        fontSmoothing: 'antialiased',
                        fontSize: '16px',
                        '::placeholder': {
                            color: '#aab7c4'
                        }
                    },
                    invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a'
                    }
                };

                // Create an instance of the card Element.
                var card = elements.create('card', { style: style });

                // Add an instance of the card Element into the `card-element` <div>.
                card.mount('#card-element');

                // Handle real-time validation errors from the card Element.
                card.addEventListener('change', function(event) {
                    var displayError = document.getElementById('card-errors');
                    if (event.error) {
                        displayError.textContent = event.error.message;
                    } else {
                        displayError.textContent = '';
                    }
                });

                // Handle form submission.
                var form = document.getElementById('payment-form');
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    var options = {
                        name: document.getElementById('name_on_card').value,
                        address_line1: document.getElementById('address').value,
                        address_city: document.getElementById('city').value,
                        address_state: document.getElementById('province').value,
                        address_zip: document.getElementById('postal_code').value,
                    }

                    stripe.createToken(card).then(function(result) {
                        if (result.error) {
                            // Inform the user if there was an error.
                            var errorElement = document.getElementById('card-errors');
                            errorElement.textContent = result.error.message;
                        } else {
                            // Send the token to your server.
                            stripeTokenHandler(result.token);
                        }
                    });
                });

                // Submit the form with the token ID.
                function stripeTokenHandler(token) {
                    // Insert the token ID into the form so it gets submitted to the server
                    var form = document.getElementById('payment-form');
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', token.id);
                    form.appendChild(hiddenInput);

                    // Submit the form
                    form.submit();
                }
            }
        </script>
        @endsection

    </body>


</html>
