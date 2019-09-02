@extends('frontoffice.templatev2')
@section('titulo','Bienvenido a nuestra tienda')

@section('contenido')
	<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element swiper_wrapper full-screen clearfix" data-loop="true" data-autoplay="5000">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background-image: url('{{ asset("frontoffice/images/slider/1.jpg")}}');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-right" style="max-width: 700px;">
								<h2 data-animate="flipInX">Team of Experts<span>.</span></h2>
								<p class="d-none d-sm-block" data-animate="flipInX" data-delay="500">Our Team of Doctors are specialized in Various Disciplines to make sure you get the Best Treatment.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide" style="background-image: url('{{ asset("frontoffice/images/slider/2.jpg")}}');">
						<div class="container clearfix">
							<div class="slider-caption">
								<h2 data-animate="zoomIn">Heart<span>Beat</span>.</h2>
								<p class="d-none d-sm-block" data-animate="zoomIn" data-delay="500">Care for your Loved Ones from the Experts in the Medical &amp; Hospitality Industry.</p>
							</div>
						</div>
					</div>
				</div>

			</div>

		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn">
								<a href="#"><i class="icon-medical-i-cardiology"></i></a>
							</div>
							<h3>Intensive Care</h3>
							<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="200">
								<a href="#"><i class="icon-medical-i-social-services"></i></a>
							</div>
							<h3>Family Planning</h3>
							<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="400">
								<a href="#"><i class="icon-medical-i-neurology"></i></a>
							</div>
							<h3>Expert Consultation</h3>
							<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
						</div>
					</div>

					<div class="clear"></div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn">
								<a href="#"><i class="icon-medical-i-dental"></i></a>
							</div>
							<h3>Dental Sciences</h3>
							<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="200">
								<a href="#"><i class="icon-medical-i-imaging-root-category"></i></a>
							</div>
							<h3>X-Ray Services</h3>
							<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="400">
								<a href="#"><i class="icon-medical-i-ambulance"></i></a>
							</div>
							<h3>24x7 Emergency</h3>
							<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
						</div>
					</div>

				</div>

				<div class="section row nopadding common-height dark topmargin-sm">
					<div class="col-lg-5" data-height-xl="597" data-height-lg="614" data-height-md="400" data-height-sm="300" data-height-xs="200" style="background: url('{{ asset('frontoffice/images/section-bg.jpg')}}') center center no-repeat; background-size: cover;">
						<div>&nbsp;</div>
					</div>
					<div id="booking-appointment-form" class="col-lg-7 nopadding">
						<div class="bgcolor contact-widget col-padding" data-loader="button">
							<h2>Book an Appointment.</h2>
							<div class="contact-form-result"></div>
							<form class="nobottommargin" id="template-medical-form" name="template-medical-form" action="demos/medical/include/appointment.php" method="post">
								<div class="col_two_third">
									<label for="template-medical-name">Name:</label>
									<input type="text" id="template-medical-name" name="template-medical-name" class="form-control not-dark required" value="">
								</div>
								<div class="col_one_third col_last">
									<label for="template-medical-phone">Phone:</label>
									<input type="text" id="template-medical-phone" name="template-medical-phone" class="form-control not-dark required" value="">
								</div>
								<div class="clear"></div>
								<div class="col_two_third">
									<label for="template-medical-email">Email Address:</label>
									<input type="email" id="template-medical-email" name="template-medical-email" class="form-control not-dark required" value="">
								</div>
								<div class="col_one_third col_last">
									<label for="template-medical-dob">Date of Birth:</label>
									<input type="text" id="template-medical-dob" name="template-medical-dob" class="form-control not-dark required" value="" placeholder="DD/MM/YYYY">
								</div>
								<div class="clear"></div>
								<div class="col_two_fifth nobottommargin">
									<div class="col_full">
										<label for="template-medical-appoint-date">Appointment Date:</label>
										<input type="text" id="template-medical-appoint-date" name="template-medical-appoint-date" class="form-control not-dark required" value="" placeholder="DD/MM/YYYY">
									</div>
									<div class="col_full nobottommargin">
										<label for="template-medical-second-booking">Booked with us Before?</label><br>
										<label class="rightmargin-sm">
											<input type="radio" id="template-medical-second-booking" name="template-medical-second-booking" value="yes">
											Yes
										</label>
										<label>
											<input type="radio" name="template-medical-second-booking" value="no" checked>
											No
										</label>
									</div>
								</div>
								<div class="col_three_fifth nobottommargin col_last">
									<label for="template-medical-message">Message:</label>
									<textarea id="template-medical-message" name="template-medical-message" class="form-control not-dark required" cols="30" rows="5"></textarea>
								</div>
								<div class="clear"></div>
								<div class="col_full hidden">
									<input type="text" name="template-medical-botcheck" value="" />
								</div>
								<div class="col_full topmargin-sm nobottommargin">
									<button class="button button-rounded button-white button-light nomargin" type="submit" value="submit">Confirm Booking</button>
								</div>
								<div class="clear"></div>
							</form>

						</div>
					</div>
				</div>

				<div class="container clearfix">

					<div class="col_three_fifth">
						<div class="accordion accordion-lg clearfix">

							<div class="acctitle"><i class="acc-closed icon-medical-i-kidney color"></i><i class="acc-open icon-medical-kidney color"></i>Kidney Transplant</div>
							<div class="acc_content clearfix">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

							<div class="acctitle"><i class="acc-closed icon-medical-i-respiratory color"></i><i class="acc-open icon-medical-respiratory color"></i>Pulmonary Treament</div>
							<div class="acc_content clearfix">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

							<div class="acctitle"><i class="acc-closed icon-medical-i-ophthalmology color"></i><i class="acc-open icon-medical-ophthalmology color"></i>Eye Care &amp; Lasik Surgery</div>
							<div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

							<div class="acctitle"><i class="acc-closed icon-medical-i-ear-nose-throat color"></i><i class="acc-open icon-medical-ear-nose-throat color"></i>Ear, Nose &amp; Throat</div>
							<div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

							<div class="acctitle"><i class="acc-closed icon-medical-i-cardiology color"></i><i class="acc-open icon-medical-cardiology color"></i>Cardiology Department</div>
							<div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

						</div>
					</div>

					<div class="col_two_fifth col_last">
						<h4>Patient Testimonials<span>.</span></h4>
						<ul class="testimonials-grid grid-1 clearfix">
							<li class="noleftpadding notoppadding">
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="{{ asset('frontoffice/images/testimonials/1.jpg')}}" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
										<div class="testi-meta">
											John Doe
											<span>XYZ Inc.</span>
										</div>
									</div>
								</div>
							</li>
							<li class="noleftpadding nobottompadding">
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="{{ asset('frontoffice/images/testimonials/2.jpg') }}" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
										<div class="testi-meta">
											Collis Ta'eed
											<span>Envato Inc.</span>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<div class="clear"></div>
						<a href="#" class="button button-mini button-rounded norightmargin fright">More Patient Feedbacks...</a>
						<div class="clear"></div>
					</div>

				</div>

				<div class="section notopmargin">
					<div class="container clearfix">

						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="feature-box fbox-outline fbox-dark fbox-effect clearfix">
									<div class="fbox-icon">
										<a href="#"><i class="icon-stack i-alt"></i></a>
									</div>
									<div class="counter counter-small"><span data-from="100" data-to="23331" data-refresh-interval="200" data-speed="2500"></span>+</div>
									<h5 class="nomargin color">Clients Served</h5>
									<div class="d-block d-md-block d-lg-none bottommargin"></div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="feature-box fbox-outline fbox-dark fbox-effect clearfix">
									<div class="fbox-icon">
										<a href="#"><i class="icon-tint i-alt"></i></a>
									</div>
									<div class="counter counter-small"><span data-from="100" data-to="56841" data-refresh-interval="250" data-speed="2000"></span>+</div>
									<h5 class="nomargin color">X-Rays Done</h5>
									<div class="d-block d-md-block d-lg-none bottommargin"></div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="feature-box fbox-outline fbox-dark fbox-effect clearfix">
									<div class="fbox-icon">
										<a href="#"><i class="icon-tint i-alt"></i></a>
									</div>
									<div class="counter counter-small"><span data-from="100" data-to="332" data-refresh-interval="50" data-speed="3000"></span>+</div>
									<h5 class="nomargin color">Worldwide Staff</h5>
									<div class="d-block d-md-none bottommargin"></div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="feature-box fbox-outline fbox-dark fbox-effect clearfix">
									<div class="fbox-icon">
										<a href="#"><i class="icon-text-width i-alt"></i></a>
									</div>
									<div class="counter counter-small"><span data-from="100" data-to="2213" data-refresh-interval="110" data-speed="3500"></span>+</div>
									<h5 class="nomargin color">Lives Saved</h5>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="container clearfix">
					<div class="heading-block center nobottomborder">
						<h3>PRODUCTOS DESTACADOS<span>.</span></h3>
						<span>Lo mejor en dermatología</span>
					</div>

					<div id="oc-team" class="owl-carousel team-carousel carousel-widget" data-margin="30" data-nav="true" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-lg="3" data-items-xl="4">
						
						@foreach($productos as $producto)
							<div class="team">
								<div class="team-image">
									<img src="{{asset('imagenes/'.$producto->archivo.'')}}" alt="{{$producto->nombre}}">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h4>{{$producto->nombre}}</h4>
										<p>{{$producto->descripcion}}</p>
										<h4>${{number_format($producto->precio,0,',','.')}}</h4>
										<div class="text-center">
									    	<a href="{{ route('detalles',$producto->id) }}" class="btn btn-warning"><i class="fa fa-plus"></i></a>
										    <a href="{{ route('carrito-agregar',$producto->id) }}" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i></a>
									    </div>
									</div>
								</div>
							</div>
						@endforeach	

					</div>
				</div>
			</div>

		</section>


@endsection