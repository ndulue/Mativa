<div class="impx-content impx-services style2 bg-color-aqua pattern-1">
			<div class="uk-container">

				<div class="uk-margin-medium-bottom impx-margin-bottom-small" data-uk-grid>

					<!-- Services List -->
					<div class="uk-width-expand impx-services-list uk-margin-bottom impx-margin-bottom-small">
						<h6 class="uk-heading-line uk-text-center uk-light uk-margin-bottom impx-text-black"><span>Our Services</span></h6>
						<div class="uk-child-width-1-4@xl uk-child-width-1-4@l uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-medium" data-uk-grid>
							<div><!-- Services Item #1 -->
						        <div class="uk-card uk-card-default uk-box-shadow-hover-xlarge impx-service-card uk-padding-bottom">
						        	<div class="uk-card-media-top">
						                <img src="{{ asset('src/images/service-1.jpg') }}" alt="">
						            </div>
						            <div class="uk-card-body uk-card-small uk-text-center">
						            	<div class="uk-card-badge uk-label uk-label-danger bg-color-aqua">Hotel &amp; Resort</div>
						            	<p>Enjoy our comfortable and luxury room with constant electricity and free wifi</p>
						            	<a href="rooms.html" class="uk-button uk-button-default uk-button-small impx-button gold impx-button-outline outline-gold button-wide impx-button-rounded small-border">Learn More &raquo;</a>
						            </div>
						        </div>
						    </div><!-- Services Item #1 End -->
						    <div><!-- Services Item #2 -->
						        <div class="uk-card uk-card-default uk-box-shadow-hover-xlarge impx-service-card">
						        	<div class="uk-card-media-top">
						                <img src="{{ asset('src/images/service-2.jpg') }}" alt="">
						            </div>
						            <div class="uk-card-body uk-card-small uk-text-center">
						            	<div class="uk-card-badge uk-label uk-label-danger bg-color-aqua">Restaurant</div>
						            	<p>With our world class chefs, you will enjoy our delicious delicacies</p>
						            	<a href="#" class="uk-button uk-button-default uk-button-small impx-button gold impx-button-outline outline-gold button-wide impx-button-rounded small-border">Learn More &raquo;</a>
						            </div>
						        </div>
						    </div><!-- Services Item #2 End -->
						    <div><!-- Services Item #3 -->
						        <div class="uk-card uk-card-default uk-box-shadow-hover-xlarge impx-service-card">
						        	<div class="uk-card-media-top">
						                <img src="{{ asset('src/images/service-3.jpg') }}" alt="">
						            </div>
						            <div class="uk-card-body uk-card-small uk-text-center">
						            	<div class="uk-card-badge uk-label uk-label-danger bg-color-aqua">Spa</div>
						            	<p>Relax in our spa and get the right treatment to calm your nerve</p>
						            	<a href="#" class="uk-button uk-button-default uk-button-small impx-button gold impx-button-outline outline-gold button-wide impx-button-rounded small-border">Learn More &raquo;</a>
						            </div>
						        </div>
						    </div><!-- Services Item #3 End -->
						    <div><!-- Services Item #4 -->
						        <div class="uk-card uk-card-default uk-box-shadow-hover-xlarge impx-service-card">
						        	<div class="uk-card-media-top">
						                <img src="{{ asset('src/images/service-4.jpg') }}" alt="">
						            </div>
						            <div class="uk-card-body uk-card-small uk-text-center">
						            	<div class="uk-card-badge uk-label uk-label-danger bg-color-aqua">Outdoor</div>
										<p>Enjoy the various outdoor sports we provide like swimming and tennis</p>
										<a href="#" class="uk-button uk-button-default uk-button-small impx-button gold impx-button-outline outline-gold button-wide impx-button-rounded small-border">Learn More &raquo;</a>
						            </div>
						        </div>
						    </div><!-- Services Item #4 End -->
						</div>
					</div>
					<!-- Services List End -->

                </div>

                @if (count($errors) > 0)
                    <div class="alert alert-warning alert-dismissible fade show">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

				<!-- Booking Form -->
				<div class="uk-margin-medium-bottom uk-margin-medium-top">
					<div class="impx-hp-booking-form impx-margin-top-small">
						<h6 class="uk-heading-line uk-text-center uk-margin-small-bottom impx-text-white"><span>Booking Form </span></h6>
                        <form class="uk-child-width-1-6@xl uk-child-width-1-6@l uk-child-width-1-6@m uk-child-width-1-3@s uk-grid-medium form" method="POST" action="{{route('index.booking')}}" data-uk-grid>
                            {{ csrf_field()}}
							<div class="uk-form-controls">
							    <div class="uk-inline">
							    	<label class="uk-form-label  impx-text-white">Email</label>
							    	<span class="uk-form-icon" data-uk-icon="icon: mail"></span>
							        <input class="uk-input booking-email uk-border-rounded uk-width-1-1" name="email" type="email" placeholder="your e-mail">
							    </div>
						    </div>
						    <div class="uk-form-controls">
							    <div class="uk-inline">
							    	<label class="uk-form-label impx-text-white">Arrival</label>
							    	<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
							        <input class="uk-input uk-border-rounded" min="{{ date('Y-m-d') }}" name="arrival" type="date" placeholder="m/dd/yyyy">
							    </div>
							</div>
						    <div class="uk-form-controls">
							    <div class="uk-inline">
							    	<label class="uk-form-label impx-text-white">Departure</label>
							    	<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
							        <input class="uk-input uk-border-rounded" name="departure" min="{{ date('Y-m-d', strtotime('+1day')) }}"  type="date" placeholder="m/dd/yyyy">
							    </div>
						    </div>
						    <div class="uk-form-controls uk-position-relative">
						    	<label class="uk-form-label impx-text-white" for="form-guest-select">Guest</label>
						    	<span class="uk-form-icon select-icon" data-uk-icon="icon: users"></span>
					            <select class="uk-select uk-border-rounded" name="guest" id="form-guest-select">
					                <option value="">Please select...</option>
					                <option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
					            </select>
						    </div>
						   	<div class="uk-form-controls uk-position-relative">
						    	<label class="uk-form-label impx-text-white" for="form-rooms-select">Rooms</label>
						    	<span class="uk-form-icon select-icon" data-uk-icon="icon: album"></span>
					            <select class="uk-select uk-border-rounded" name="room" id="form-rooms-select">
					                <option value="">Please select...</option>
					                <option value="Single">Single</option>
									<option value="Double">Double</option>
									<option value="Premier">Premier</option>
									<option value="Deluxe">Deluxe</option>
					            </select>
						    </div>
						    <div>
						    	<label class="uk-form-label empty-label" >&nbsp;</label>
						        <button class="uk-button uk-width-1-1" id="button" type="submit">Book Now!</button>
						    </div>
						</form>
					</div>
				</div>
                <!-- Booking Form End -->

				<!-- Intro Text -->
				<div class="uk-flex uk-flex-center uk-position-relative uk-position-z-index" data-uk-grid>
					<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-width-1-1@s">
						<div class="impx-intro uk-text-center uk-light uk-margin-remove-bottom">
							<h2 class="uk-margin-remove-vertical uk-margin-remove-bottom">Choose the Best Rooms &amp; Make Reservation </h2>
							<p class="impx-text-large uk-margin-remove-bottom uk-margin-small-top">Etenim semper illud extra arte comprehenditur utebare non numquam.</p>
						</div>
					</div>
				</div>
				<!-- Intro Text End -->

			</div>
		</div>
