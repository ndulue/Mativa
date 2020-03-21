<div class="uk-padding uk-padding-remove-horizontal">
			<div class="uk-container">
				<div data-uk-grid>
					<!-- main content -->
					<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s uk-margin-small-top">
						<div class="uk-position-relative uk-visible-toggle">
							<!-- Rooms List -->
					        <ul class="uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-2@s data-uk-grid uk-grid-match uk-margin-large-bottom"  data-uk-grid>
					            @foreach($room as $rooms)								
								<li><!-- room item #1 -->
					            	<div class="uk-card uk-card-default uk-card-medium">
							            <div class="uk-card-media-top uk-position-relative">
							                <img src="{{ asset($rooms->image1) }}" alt="">
							            </div>
							            <div class="uk-card-body impx-padding-medium">
							                <h4 class="uk-card-title uk-margin-remove-bottom">{{ $rooms->title }}</h4>
								        	<span class="uk-label bg-color-aqua">from ₦{{ $rooms->price }}/night</span>
								            <ul class="uk-list room-fac">
												<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> {{ $rooms->feature1 }}</li>
												<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> {{ $rooms->feature2 }}</li>
												<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> {{ $rooms->feature3 }}</li>
											</ul>

											 <div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
										        <a href="{{ route('room-detail.index',['title' => $rooms->id]) }}" class="uk-button uk-button-text impx-text-aqua">Read more &raquo;</a>
										    </div>
							            </div>
							        </div>
								</li><!-- room item #1 end -->
								@endforeach
					        </ul>
					        <!-- rooms list end -->
				        </div>
					</div>
					<!-- main content end -->

					<!-- sidebar -->
					<div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s uk-margin-small-top">

						<!-- booking form -->
						<div class="bg-color-aqua uk-padding impx-padding-medium">
							<div class="impx-hp-booking-form side-form uk-margin-bottom uk-margin-remove-top">
								<h6 class="uk-heading-line uk-text-center impx-text-white uk-text-uppercase"><span>Booking Form</span></h6>
								@include('body.partials.form');
							</div>
						</div>
						<!-- booking form -->

						<!-- features -->
						<div class="bg-color-white uk-padding  impx-padding-medium uk-box-shadow-small">
							<h4 class="uk-heading-line uk-margin-medium-bottom"><span>Our Key Features</span></h4>
							<ul class="uk-list uk-list-divider uk-list-large">
							    <li>
							    	<div data-uk-grid class="uk-grid-medium">
								    	<div class="uk-width-auto">
									    	<i class="fa fa-cutlery fa-2x impx-text-aqua"></i>
									    </div>
									    <div class="uk-width-expand">
									    	<h6 class="uk-margin-remove">In-house Restaurant</h6>
									    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
									    </div>
									</div>
							    </li>
							    <li>
							    	<div data-uk-grid class="uk-grid-medium">
								    	<div class="uk-width-auto">
									    	<i class="fa fa-asterisk fa-2x impx-text-aqua"></i>
									    </div>
									    <div class="uk-width-expand">
									    	<h6 class="uk-margin-remove">Spa</h6>
									    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
									    </div>
									</div>
							    </li>
							     <li>
							     	<div data-uk-grid class="uk-grid-medium">
								    	<div class="uk-width-auto">
									    	<i class="fa fa-paw fa-2x impx-text-aqua"></i>
									    </div>
									    <div class="uk-width-expand">
									    	<h6 class="uk-margin-remove">Outdoor</h6>
									    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
									    </div>
									</div>
							    </li>
							    <li>
							    	<div data-uk-grid class="uk-grid-medium">
								    	<div class="uk-width-auto">
									    	<i class="fa fa-heart fa-2x impx-text-aqua"></i>
									    </div>
									    <div class="uk-width-expand">
									    	<h6 class="uk-margin-remove">Gym</h6>
									    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis</p>
									    </div>
									</div>
							    </li>
							</ul>
						</div>
						<!-- features end -->

					</div>
					<!-- sidebar end -->
					
				</div>
			</div>
		</div>	