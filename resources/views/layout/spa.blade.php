<!DOCTYPE html>
<html>



<head>

    @section('page-content-title')
    Mativa - Spa
    @endsection('page-content-title')
    @include('body.partials.head')

    </head>

    <body id="impx-body">

		<!-- HEADER -->
        @include('body\partials\header')
		<!-- HEADER END -->

		<!-- HERO IMAGE -->
		<div class="impx-slide-container spa hero-spa uk-background-fixed uk-background-center-center uk-height-1-1">
			<div class="impx-overlay"></div>

			<div class="uk-container uk-position-relative uk-height-1-1">
				<div class="uk-position-center uk-flex uk-flex-middle">
					<div class="impx-slide-fw-caption spa">
						<div class="impx-slide-fw-caption-outline center bottom"></div>
			    		<h1 class="uk-margin-remove impx-text-shadow uk-text-center impx-text-white">Oriental Spa</h1><!-- title -->
			    		<p class="uk-text-large impx-text-lighter uk-margin-remove impx-text-shadow uk-text-center uk-text-uppercase">Our Spa Service</p><!-- subtitle -->
		    		</div>
		    	</div>
	    	</div>
		</div>
		<!-- HERO IMAGE END -->

		<!-- HIGHLIGHT -->
		<div class="impx-content style3 uk-padding uk-padding-remove-horizontal pattern-1 bg-color-aqua">
			<div class="uk-container">

				<!-- welcome intro -->
				<div class="uk-flex-center" data-uk-grid>
					<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-width-1-1@s">
						<div class="impx-intro uk-text-center uk-light spa">
							<h2 class="uk-margin-small-bottom uk-heading-line line-light"><span>Welcome to Sativa Spa</span></h2>
							<p class="impx-text-large uk-margin-bottom">Beatus autem esse in maximarum rerum timore nemo potest quaerere cum summis doloribus laetitia vacuitas doloris in officio plurimum interest  hoc melius nos veriusque .</p>
						</div>
					</div>
				</div>
				<!-- welcome intro end -->

				<div class="uk-flex-center uk-margin-small" data-uk-grid>
					<div class="uk-width-3-4@xl uk-width-3-4@l uk-width-3-4@m uk-position-relative uk-position-z-index">
						<!-- highlight items -->
						<ul class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-3@s impx-features-list spa uk-flex-center" data-uk-grid>
							<li><!-- service item #1 -->
								<div class="uk-position-relative">
									<img src="images/spa-feature-1.jpg" alt="resort" class="uk-border-circle uk-box-shadow-medium img-60 img-centered">
									<div class="impx-overlay overlay-outline padding-xxlarge pattern-1 img-60 img-centered">
										<div class="impx-feature-caption">
											<i class="fa fa-star-o fa-2x impx-text-white circle"></i>
											<h5 class="impx-text-white impx-text-shadow uk-margin-small-top uk-margin-remove-bottom">Ayurveda Spa</h5>
										</div>
									</div>
								</div>
							</li><!-- highlight item #1 end -->
							<li><!-- highlight item #2 -->
								<div class="uk-position-relative">
									<img src="images/spa-feature-4.jpg" alt="resort" class="uk-border-circle uk-box-shadow-medium img-60 img-centered">
									<div class="impx-overlay overlay-outline padding-xxlarge pattern-1 img-60 img-centered">
										<div class="impx-feature-caption">
											<i class="fa fa-cutlery fa-2x impx-text-white  circle"></i>
											<h5 class="impx-text-white impx-text-shadow uk-margin-small-top uk-margin-remove-bottom">Luxury Spa</h5>
										</div>
									</div>
								</div>
							</li><!-- highlight item #2 end -->
							<li><!-- highlight item #3 -->
								<div class="uk-position-relative">
									<img src="images/spa-feature-3.jpg" alt="resort" class="uk-border-circle uk-box-shadow-medium img-60 img-centered">
									<div class="impx-overlay overlay-outline padding-xxlarge pattern-1 img-60 img-centered">
										<div class="impx-feature-caption">
											<i class="fa fa-asterisk fa-2x impx-text-white circle"></i>
											<h5 class="impx-text-white impx-text-shadow  uk-margin-small-top uk-margin-remove-bottom">Massage Spa</h5>
										</div>
									</div>
								</div>
							</li><!-- highlight item #3 end -->
						</ul>
						<!-- highlight items -->
					</div>
				</div>

			</div>
		</div>
		<!-- HIGHLIGHT END -->

		<!-- SPA SERVICES -->
		<div class="uk-padding uk-padding-remove-horizontal uk-position-relative impx-sections-spa uk-background-fixed uk-background-center-center uk-height-1-1">
			<div class="impx-overlay dark"></div>
			<div class="uk-container">

				<div class="uk-flex-center" data-uk-grid>
					<div class="uk-width-3-5@xl uk-width-3-5@l uk-width-1-1@m uk-width-1-1@s">
						<!-- intro -->
						<div class="impx-intro uk-text-center uk-position-relative uk-position-z-index">
							<h2 class="impx-text-white uk-margin-remove-bottom">Our Spa Services</h2>
						</div>
						<!-- intro end -->
					</div>
				</div>

				<!-- services list -->
				<ul class="uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-1@s data-uk-grid impx-spa-services uk-position-relative uk-position-z-index uk-grid-match uk-margin-bottom" data-uk-grid>
					<li><!-- service item #1 -->
						<div class="impx-spa-service">
							<div class="uk-grid uk-grid-collapse">
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s uk-position-relative">
									<div class="uk-height-1-1 uk-cover-container">
										<canvas width="290" height="220"></canvas>
										<img src="images/spa-service-1.jpg" alt="resort" class="" data-uk-cover>
									</div>
								</div>
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s">
									<div class="impx-spa-content">
										<span class="uk-label uk-label-success small">from $50</span>
										<h4 class="uk-margin-remove">Spa Service</h4>
										<p>Atqui perspicuum est partes opus est exemplis hoc facere</p>
										<ul class="uk-list">
											<li><i class="fa fa-snowflake-o"></i> Quae qui non vident</li>
											<li><i class="fa fa-signing"></i>Tenesne igitur, inquam</li>
											<li><i class="fa fa-hotel"></i>praeclare inter cohaerere</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li><!-- service item #1 end -->
					<li><!-- service item #2 -->
						<div class="impx-spa-service">
							<div class="uk-grid uk-grid-collapse">
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s uk-position-relative">
									<div class="uk-height-1-1 uk-cover-container">
										<canvas width="290" height="220"></canvas>
										<img src="images/spa-service-2.jpg" alt="resort" class="" data-uk-cover>
									</div>
								</div>
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s">
									<div class="impx-spa-content">
										<span class="uk-label uk-label-success small">from $60</span>
										<h4 class="uk-margin-remove">Spa Service</h4>
										<p>Atqui perspicuum est partes opus est exemplis hoc facere</p>
										<ul class="uk-list">
											<li><i class="fa fa-snowflake-o"></i> Quae qui non vident</li>
											<li><i class="fa fa-signing"></i>Tenesne igitur, inquam</li>
											<li><i class="fa fa-hotel"></i>praeclare inter cohaerere</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li><!-- service item #2 end -->
					<li><!-- service item #3 -->
						<div class="impx-spa-service uk-position-relative">
							<div class="uk-grid uk-grid-collapse">
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s">
									<div class="impx-spa-content">
										<span class="uk-label uk-label-success small">from $70</span>
										<h4 class="uk-margin-remove">Spa Service</h4>
										<p>Atqui perspicuum est partes opus est exemplis hoc facere</p>
										<ul class="uk-list">
											<li><i class="fa fa-snowflake-o"></i> Quae qui non vident</li>
											<li><i class="fa fa-signing"></i>Tenesne igitur, inquam</li>
											<li><i class="fa fa-hotel"></i>praeclare inter cohaerere</li>
										</ul>
									</div>
								</div>
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s uk-position-relative">
									<div class="uk-height-1-1 uk-cover-container">
										<canvas width="290" height="220"></canvas>
										<img src="images/spa-service-3.jpg" alt="resort" class="" data-uk-cover>
									</div>
								</div>
							</div>
						</div>
					</li><!-- service item #3 end -->
					<li><!-- service item #4 -->
						<div class="impx-spa-service">
							<div class="uk-grid uk-grid-collapse">
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s">
									<div class="impx-spa-content">
										<span class="uk-label uk-label-success small">from $80</span>
										<h4 class="uk-margin-remove">Spa Service</h4>
										<p>Atqui perspicuum est partes opus est exemplis hoc facere</p>
										<ul class="uk-list">
											<li><i class="fa fa-snowflake-o"></i> Quae qui non vident</li>
											<li><i class="fa fa-signing"></i>Tenesne igitur, inquam</li>
											<li><i class="fa fa-hotel"></i>praeclare inter cohaerere</li>
										</ul>
									</div>
								</div>
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s uk-position-relative">
									<div class="uk-height-1-1 uk-cover-container">
										<canvas width="290" height="220"></canvas>
										<img src="images/spa-service-4.jpg" alt="resort" class="" data-uk-cover>
									</div>
								</div>
							</div>
						</div>
					</li><!-- service item #4 end -->
				</ul>
				<!-- services items end -->
			</div>
		</div>
		<!-- SPA SERVICES END -->

		<!-- PRICING PLANS -->
		<div class="uk-padding">
			<div class="uk-container uk-container-center">

    			<div class="uk-flex-center" data-uk-grid>
    				<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-width-1-1@s">

    					<!-- Intro -->
    					<div class="impx-intro  uk-text-center">
    						<h2 class="uk-margin-remove-bottom">Spa Package Pricing</h2>
    						<p class="impx-text-large uk-margin-medium-bottom uk-margin-small-top impx-margin-bottom-remove">Mauris quis nisi vitae dolor laoreet auris in quam nec diam sagittis aliquet vel molesti turpis eu dolor posuere lacinia penatibus aliquam ut Ita fit cum gravior, tum etiam splendidior oratio</p>
    					</div>
    					<!-- Intro End -->

    				</div>
    			</div>

    			<!-- Services Section -->
    			<div class="uk-flex uk-flex-center uk-margin-small-top uk-margin-medium-bottom impx-margin-bottom-remove">
					<div class="uk-width-3-4@xl uk-width-3-4@l uk-width-1-1@m uk-width-1-1@s">
						<!-- pricing items -->
						<ul class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-3@s uk-grid-collapse impx-promo-pricing-list" data-uk-grid>
							<li><!-- pricing item #1 -->
								<div class="impx-promo-pricing uk-box-shadow-large uk-light">
									<div class=" uk-padding bg-color-aqua">
										<div class="uk-position-relative uk-margin-bottom">
											<img src="images/spa-feature-1.jpg" class="uk-border-circle img-70 img-centered" alt="">
											<div class="impx-overlay overlay-outline padding-xxlarge img-70 img-centered"></div>
										</div>
										<div class="uk-text-center">
											<h4 class="uk-heading-line uk-margin-small-bottom"><span>Silver</span></h4>
								            <span class="uk-label uk-label-success impx-text-aqua uk-text-bold">start from $299</span>
								        </div>
										<ul class="uk-list">
											<li><i class="fa fa-star"></i> Quae qui non vident, nihil</li>
											<li><i class="fa fa-star"></i> praeclare inter se cohaerere</li>
											<li><i class="fa fa-star"></i> Tenesne igitur, inquam</li>
										</ul>
										<div class="uk-text-center">
											<a href="#" class="uk-button impx-button small impx-button-outline small-border">View Detail <i class="fa fa-arrow-right"></i></a>
										</div>
							        </div>
						        </div>
							</li><!-- pricing item #1 end -->
							<li class="uk-position-relative uk-position-z-index"><!-- pricing item #2 -->
								<div class="impx-promo-pricing uk-box-shadow-xlarge uk-light featured">
									<div class="uk-position-relative uk-padding bg-color-gold">
										<div class="uk-position-relative uk-margin-bottom">
											<img src="images/spa-feature-2.jpg" class="uk-border-circle img-70 img-centered" alt="">
											<div class="impx-overlay overlay-outline padding-xxlarge img-70 img-centered"></div>
										</div>
										<div class="uk-text-center">
								            <h3 class="uk-heading-line uk-margin-small-bottom"><span>Gold</span></h3>
								            <span class="uk-label uk-label-success impx-text-gold uk-text-bold">start from $399</span>
								        </div>
										<ul class="uk-list uk-list-large">
											<li><i class="fa fa-star"></i> Quae qui non vident, nihil</li>
											<li><i class="fa fa-star"></i> praeclare inter se cohaerere</li>
											<li><i class="fa fa-star"></i> Tenesne igitur, inquam</li>
										</ul>
										<div class="uk-text-center">
											<a href="#" class="uk-button impx-button small impx-button-outline small-border">View Detail <i class="fa fa-arrow-right"></i></a>
										</div>
							        </div>
						        </div>
							</li><!-- pricing item #2 end -->
							<li class="uk-position-relative"><!-- pricing item #3 -->
								<div class="impx-promo-pricing uk-box-shadow-large uk-light">
									<div class="uk-position-relative uk-padding bg-color-aqua">
										<div class="uk-position-relative uk-margin-bottom">
											<img src="images/spa-feature-3.jpg" class="uk-border-circle img-70 img-centered" alt="">
											<div class="impx-overlay overlay-outline padding-xxlarge img-70 img-centered"></div>
										</div>
										<div class="uk-text-center">
								            <h4 class="uk-heading-line uk-margin-small-bottom"><span>Diamond</span></h4>
								            <span class="uk-label uk-label-success impx-text-aqua uk-text-bold">start from $499</span>
								        </div>
										<ul class="uk-list">
											<li><i class="fa fa-star"></i> Quae qui non vident, nihil</li>
											<li><i class="fa fa-star"></i> praeclare inter se cohaerere</li>
											<li><i class="fa fa-star"></i> Tenesne igitur, inquam</li>
										</ul>
										<div class="uk-text-center">
											<a href="#" class="uk-button impx-button small impx-button-outline small-border">View Detail <i class="fa fa-arrow-right"></i></a>
										</div>
							        </div>
						        </div>
							</li><!-- pricing item #3 end -->
						</ul>
						<!-- pricing items end -->
					</div>
				</div>

    		</div>
		</div>
		<!-- PRICING PLANS END -->

		<!-- THERAPHIST LIST -->
		<div class="uk-padding uk-position-relative uk-background-fixed uk-background-center-center uk-height-1-1 impx-section-therapthist">
			<div class="impx-overlay darker"></div>
			<div class="uk-container uk-container-center">

    			<div class="uk-flex-center" data-uk-grid>
    				<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-width-1-1@s">

    					<!-- Intro -->
    					<div class="impx-intro  uk-text-center uk-position-relative">
    						<h2 class="impx-text-white uk-margin-remove-bottom">Meet Our Therapist</h2>
    						<p class="impx-text-large uk-margin-small-top uk-margin-medium-bottom impx-text-lighter">Mauris quis nisi vitae dolor laoreet auris in quam nec diam sagittis aliquet vel molesti turpis eu dolor posuere lacinia penatibus aliquam ut Ita fit cum gravior, tum etiam splendidior oratio</p>
    					</div>
    					<!-- Intro End -->

    				</div>
    			</div>

    			<div class="uk-flex uk-flex-center uk-margin-small-bottom">
					<div class="uk-width-1-1">
						<!-- Therapists -->
						<ul class="uk-child-width-1-4@xl uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-2@s uk-grid-match" data-uk-grid>
							<li><!-- Therapist #1 -->
								<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card">
									<div class="uk-card-header impx-padding-medium-left impx-padding-medium-right">
								        <div class="uk-flex-middle" data-uk-grid>
								            <div class="uk-width-expand">
								                <h5 class="uk-card-title uk-margin-remove-bottom">Jane Doe</h5>
								            </div>
								            <div class="uk-width-auto">
								                <div class="uk-label small bg-color-aqua">therapist</div>
								            </div>
								        </div>
								    </div>
						        	<div class="uk-card-media-top">
						                <img src="images/peoples/therapist-1.jpg" alt="">
						            </div>
						            <div class="uk-card-body impx-padding-medium uk-text-center">
						            	<p>Itaque nostrum est-quod nostrum dico, artis ea principia accepimus.</p>
						            </div>
						        </div>
							</li><!-- Therapist #1 end -->
							<li><!-- Therapist #2 -->
								<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card">
									<div class="uk-card-header  impx-padding-medium-left impx-padding-medium-right">
								        <div class="uk-flex-middle" data-uk-grid>
								            <div class="uk-width-expand">
								                <h5 class="uk-card-title uk-margin-remove-bottom">Memy Doe</h5>
								            </div>
								            <div class="uk-width-auto">
								                <div class="uk-label small bg-color-aqua">therapist</div>
								            </div>
								        </div>
								    </div>
						        	<div class="uk-card-media-top">
						                <img src="images/peoples/therapist-2.jpg" alt="">
						            </div>
						            <div class="uk-card-body impx-padding-medium uk-text-center">
						            	<p>Itaque nostrum est-quod nostrum dico, artis ea principia accepimus.</p>
						            </div>
						        </div>
							</li><!-- Therapist #2 end -->
							<li><!-- Therapist #3 -->
								<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card">
									<div class="uk-card-header impx-padding-medium-left impx-padding-medium-right">
								        <div class="uk-flex-middle" data-uk-grid>
								            <div class="uk-width-expand">
								                <h5 class="uk-card-title uk-margin-remove-bottom">Melia Doe</h5>
								            </div>
								            <div class="uk-width-auto">
								                <div class="uk-label small bg-color-aqua">therapist</div>
								            </div>
								        </div>
								    </div>
						        	<div class="uk-card-media-top">
						                <img src="images/peoples/therapist-3.jpg" alt="">
						            </div>
						            <div class="uk-card-body impx-padding-medium uk-text-center">
						            	<p>Itaque nostrum est-quod nostrum dico, artis ea principia accepimus.</p>
						            </div>
						        </div>
							</li><!-- Therapist #3 end -->
							<li><!-- Therapist #4 -->
								<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card">
									<div class="uk-card-header impx-padding-medium-left impx-padding-medium-right">
								        <div class="uk-flex-middle" data-uk-grid>
								            <div class="uk-width-expand">
								                <h5 class="uk-card-title uk-margin-remove-bottom">Khiva Doe</h5>
								            </div>
								            <div class="uk-width-auto">
								                <div class="uk-label small bg-color-aqua">therapist</div>
								            </div>
								        </div>
								    </div>
						        	<div class="uk-card-media-top">
						                <img src="images/peoples/therapist-4.jpg" alt="">
						            </div>
						            <div class="uk-card-body impx-padding-medium uk-text-center">
						            	<p>Itaque nostrum est-quod nostrum dico, artis ea principia accepimus.</p>
						            </div>
						        </div>
							</li><!-- Therapist #4 end -->
						</ul>
						<!-- Therapists end -->
					</div>
				</div>

    		</div>
		</div>
		<!-- THERAPHIST LIST -->

		<!-- CONTACT SECTION -->
		@include('body\partials\contact')
		<!-- CONTACT SECTION END -->

		<!-- FOOTER -->
		@include('body.partials.footer')
		<!-- FOOTER END -->

    	<!-- Javascript -->
    	@include('body.partials.js-scripts')
    </body>


</html>
