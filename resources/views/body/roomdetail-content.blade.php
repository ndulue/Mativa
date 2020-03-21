<div class="uk-padding impx-padding-top-medium uk-padding-remove-horizontal">
			<div class="uk-container">
				<div data-uk-grid>

					<div class="uk-width-3-4@xl uk-width-3-4@l uk-width-3-4@m uk-width-1-1@s uk-margin-small-top">
						<!-- slider -->
						<div class="impx-room-slider">
							<div class="uk-position-relative" data-uk-slideshow="animation: fade">
							    <ul class="uk-slideshow-items">
							        <li>
							            <img src="{{ asset($RoomDetails->image1) }}" alt="" data-uk-cover>
							            <div class="impx-overlay"></div>
							        </li>
							        <li>
							            <img src="{{ asset($RoomDetails->image2) }}" alt="" data-uk-cover>
							            <div class="impx-overlay"></div>
							        </li>
							        <li>
							            <img src="{{ asset($RoomDetails->image3) }}" alt="" data-uk-cover>
							            <div class="impx-overlay"></div>
							        </li>
							        <li>
							            <img src="{{ asset($RoomDetails->image4) }}" alt="" data-uk-cover>
							            <div class="impx-overlay"></div>
							        </li>
							        <li>
							            <img src="{{ asset($RoomDetails->image5) }}" alt="" data-uk-cover>
							            <div class="impx-overlay"></div>
							        </li>
							    </ul>

							    <!-- slider thumb nav -->
							    <div class="uk-position-bottom-center uk-position-medium">
							        <ul class="uk-thumbnav">
							            <li data-uk-slideshow-item="0"><a href="#"><img src="{{ asset($RoomDetails->image1) }}" width="100" alt=""></a></li>
							            <li data-uk-slideshow-item="1"><a href="#"><img src="{{ asset($RoomDetails->image2) }}" width="100" alt=""></a></li>
							            <li data-uk-slideshow-item="2"><a href="#"><img src="{{ asset($RoomDetails->image3) }}" width="100" alt=""></a></li>
							            <li data-uk-slideshow-item="3"><a href="#"><img src="{{ asset($RoomDetails->image4) }}" width="100" alt=""></a></li>
							            <li data-uk-slideshow-item="4"><a href="#"><img src="{{ asset($RoomDetails->image5) }}" width="100" alt=""></a></li>
							        </ul>
							    </div>
							    <!-- slider thumb nav end -->

							</div>
						</div>
						<!-- slider end -->

						<!-- description -->
						<h4>Room Description</h4>
						<p class="impx-text-large uk-margin-medium-bottom">{{ $RoomDetails->room_desc }}</p>

						<!-- tabs button -->
						<ul data-uk-tab class="uk-text-bold uk-tab impx-room-tabs">
						    <li><a href="#">Room Detail</a></li>
						    <li><a href="#">Booking</a></li>
						</ul>
						<!-- tabs button end -->

						<!-- tabs content -->
						<ul class="uk-switcher impx-room-tabs-content bg-color-white uk-box-shadow-medium">
						    <li><!-- tab content #1 -->
						    	<h5>Additional Description</h5>
						    	<p class="uk-margin-medium-bottom">{{ $RoomDetails->add_desc }}</p>

								<div data-uk-grid>
									<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s">
										<h6>More Facilities</h6>
										<ul class="uk-list uk-list-bullet impx-list">
											<li>{{ $RoomDetails->feature1 }}</li>
											<li>{{ $RoomDetails->feature2 }}</li>
											<li>{{ $RoomDetails->feature3 }}</li>
										</ul>
									</div>
								</div>
						    </li><!-- tab content #1 end -->
						    <li><!-- tab content #2 (booking form) -->
						    	<h5>Booking Form</h5>
						    	<div class="impx-hp-booking-form side-form normal uk-margin-bottom">
									@include('body.partials.form');
								</div>
						    </li><!-- tab content #3 end -->
						</ul>
						<!-- tabs content end -->

						<!-- related rooms -->
						<div class="impx-other-rooms uk-margin-medium-top">
							<h4 class="uk-margin-bottom uk-heading-line"><span>Other Rooms</span></h4>
							<ul class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-3@s impx-rooms style3 bottom uk-margin-bottom data-uk-grid" data-uk-grid>
								<li><!-- related room item #1 -->
									<a href="room-detail.html" class="uk-inline-clip uk-transition-toggle">
										<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card other-item bg-color-aqua">
								        	<div class="uk-card-media-top">
								        		<div class="uk-position-relative">
									                <img src="{{ asset('src/images/rooms/room-1.jpg') }}" alt="">
									                <div class="impx-overlay light overlay-squared padding-xwide"></div>
									            </div>
								                <div class="uk-card-body impx-padding-small uk-position-relative uk-position-z-index">
								                	<h6 class="uk-card-title uk-margin-remove-bottom impx-text-white">Single Room</h6>
								                	<div class="uk-card-badge uk-label bg-color-gold impx-text-white small">start from $33</div>
									            </div>
								            </div>
								            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary impx-overlay aqua-darkest">
								            	<p class="impx-text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum</p>
			                                    <ul class="uk-list room-fac impx-text-white">
													<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Beatus in maximarum timore</li>
													<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Oculis Compensabatur</li>
													<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Dolorisnos veriusque nihil</li>
												</ul>
								        	</div>
							        	</div>
							        </a>
								</li><!-- related room item #1 end -->
								<li><!-- related room item #2 -->
									<a href="room-detail.html" class="uk-inline-clip uk-transition-toggle">
										<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card other-item bg-color-aqua">
								        	<div class="uk-card-media-top">
								        		<div class="uk-position-relative">
									                <img src="{{ asset('src/images/rooms/room-5.jpg') }}" alt="">
									                <div class="impx-overlay light overlay-squared padding-xwide"></div>
									            </div>
								                <div class="uk-card-body impx-padding-small uk-position-relative uk-position-z-index">
								                	<h6 class="uk-card-title uk-margin-remove-bottom impx-text-white">Double Room</h6>
								                	<div class="uk-card-badge uk-label bg-color-gold impx-text-white small">start from $33</div>
									            </div>
								            </div>
								            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary impx-overlay aqua-darkest">
								            	<p class="impx-text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum</p>
			                                    <ul class="uk-list room-fac impx-text-white">
													<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Beatus in maximarum timore</li>
													<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Oculis Compensabatur</li>
													<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Dolorisnos veriusque nihil</li>
												</ul>
								        	</div>
								        </div>
							        </a>
								</li><!-- related room item #2 end -->
								<li><!-- related room item #3 -->
									<a href="room-detail.html" class="uk-inline-clip uk-transition-toggle">
										<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card other-item bg-color-aqua">
								        	<div class="uk-card-media-top uk-light">
								        		<div class="uk-position-relative">
									                <img src="{{ asset('src/images/rooms/room-3.jpg') }}" alt="">
									                <div class="impx-overlay light overlay-squared padding-xwide"></div>
									            </div>
								                <div class="uk-card-body impx-padding-small uk-position-relative uk-position-z-index">
								                	<h6 class="uk-card-title uk-margin-remove-bottom impx-text-white">Deluxe Room</h6>
								                	<div class="uk-card-badge uk-label bg-color-gold impx-text-white small">start from $33</div>
									            </div>
								            </div>
								            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary impx-overlay aqua-darkest">
								            	<p class="impx-text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum</p>
			                                    <ul class="uk-list room-fac impx-text-white">
													<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Beatus in maximarum timore</li>
													<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Oculis Compensabatur</li>
													<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Dolorisnos veriusque nihil</li>
												</ul>
								        	</div>
								        </div>
							        </a>
								</li><!-- related room item #3 end -->
							</ul>
						</div>
						<!-- related rooms end -->
					</div>

					<!-- facilities -->
					<div class="uk-width-1-4@xl uk-width-1-4@l uk-width-1-4@m uk-width-1-1@s">
						<h5 class="uk-text-center uk-heading-line uk-margin-bottom"><span>Our Facilities</span></h5>
						<ul class="uk-child-width-1-1@xl uk-child-width-1-1@l uk-child-width-1-1@m uk-child-width-1-2@s" data-uk-grid>
						    <li class="uk-text-center uk-margin-small-top"><!-- facilitiy item #1 -->
						    	<div class="uk-card uk-card-default uk-card-body impx-padding-medium">
							    	<i class="fa fa-wifi fa-2x impx-text-aqua"></i>
							    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Free Wi-fi</h6>
							    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
						    	</div>
						    </li><!-- facilitiy item #1 end -->
						    <li class="uk-text-center"><!-- facilitiy item #2 -->
						    	<div class="uk-card uk-card-default uk-card-body impx-padding-medium">
							    	<i class="fa fa-bathtub fa-2x impx-text-aqua"></i>
							    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Bathtub</h6>
							    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
						    	</div>
						    </li><!-- facilitiy item #2 end -->
						    <li class="uk-text-center"><!-- facilitiy item #3 -->
						    	<div class="uk-card uk-card-default uk-card-body impx-padding-medium">
							    	<i class="fa fa-tv fa-2x impx-text-aqua"></i>
							    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Widescreen TV</h6>
							    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
							    </div>
						    </li><!-- facilitiy item #3 end -->
						    <li class="uk-text-center"><!-- facilitiy item #4 -->
						    	<div class="uk-card uk-card-default uk-card-body impx-padding-medium">
							    	<i class="fa fa-heart-o fa-2x impx-text-aqua"></i>
							    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Gym Studio</h6>
							    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
							    </div>
						    </li><!-- facilitiy item #4 end -->
						    <li class="uk-text-center"><!-- facilitiy item #5 -->
						    	<div class="uk-card uk-card-default uk-card-body impx-padding-medium">
							    	<i class="fa fa-child fa-2x impx-text-aqua"></i>
							    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Kids Playground</h6>
							    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
							    </div>
						    </li><!-- facilitiy item #5 end -->
						    <li class="uk-text-center"><!-- facilitiy item #6 -->
						    	<div class="uk-card uk-card-default uk-card-body impx-padding-medium">
							    	<i class="fa fa-coffee fa-2x impx-text-aqua"></i>
							    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Mini Cafe</h6>
							    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
							    </div>
						    </li><!-- facilitiy item #6 end -->
						</ul>
					</div>
					<!-- facilities end -->

				</div>
			</div>
		</div>	