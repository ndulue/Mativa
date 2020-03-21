<div class="uk-container-expand">
			<div class="impx-slide-container style1">
				<div class="impx-slideshow-fw">

					<div data-uk-slideshow="autoplay: true; autoplay-interval: 6000; animation: fade; finite: false; min-height: 319; max-height: 980;">
						<div class="uk-position-relative uk-visible-toggle uk-light">

						    <ul class="uk-slideshow-items">
							@foreach($slider as $slid)
						    	<li><!-- Slideshow Item #1 -->
						    		<div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-center">
								    	<img src="{{ asset($slid->image) }}" alt="" data-uk-cover="{{ $slid->height }}">
								    	<div class="uk-overlay-primary uk-position-cover impx-overlay dark"></div>
									</div>
									<div class="uk-container uk-position-relative uk-height-1-1">
										<div class="uk-position-{{ $slid->position }} uk-flex uk-flex-middle">
											<div class="impx-slide-fw-caption {{ $slid->caption }}">
												<div class="impx-slide-fw-caption-outline {{ $slid->caption_direction }} uk-transition-slide-{{ $slid->caption_transition }}"></div>
									    		<h1 class="uk-margin-remove impx-text-shadow uk-transition-{{ $slid->header_transition }} uk-text-{{ $slid->header_direction }}">{{ $slid->header_text }}</h1>
									    		<p class="impx-text-large impx-text-aqua uk-margin-remove impx-text-shadow uk-transition-{{ $slid->para_transition }} uk-text-{{ $slid->para_direction}} uk-text-uppercase">{{ $slid->para_text }}</p>
								    		</div>
								    	</div>
							    	</div>
						    	</li>
							@endforeach	
						    </ul>
						    <!-- Slideshow Nav -->
						    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
		        			<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
		        			<!-- Slideshow Nav End -->
		        		</div>
				    </div>

			    </div>
			</div>
		</div>