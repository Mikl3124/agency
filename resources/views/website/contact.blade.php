@extends('layouts.website')
@section('content')

 <!-- Banner Section -->
 <section class="page-banner">
  <div class="image-layer" style="background-image:url({{ asset('images') }}/contact-lyneo.svg)" alt="Nous contacter"></div>
  <div class="shape-1"></div>
  <div class="shape-2"></div>
  <div class="banner-inner">
      <div class="auto-container">
          <div class="inner-container clearfix">
              <h1>Contact</h1>
              <div class="page-nav">
                  <ul class="bread-crumb clearfix">
                      <li><a href="{{ route("home") }}">Accueil</a></li>
                      <li class="active">Contact</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</section>
<!--End Banner Section -->


		<!--Contact Section-->
		<section class="contact-section contact-two">
			<div class="auto-container">
				<div class="row">
					<div class="col-lg-4">
						<div class="contact-two__content">
							<div class="sec-title">
								<h2>Contactez-nous<span class="dot">.</span></h2>
							</div>
							<p class="contact-two__text">Des questions? Vous avez besoin de renseignements? Contactez-nous en utilisant ce formulaire.</p>
							<!-- /.contact-two__text -->
							<div class="contact-two__social">
								<a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-linkedin"></a>
							</div><!-- /.contact-two__social -->
						</div><!-- /.contact-two__content -->
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-8">
						<div class="form-box">
							<div class="default-form">
								<form method="post" action="{{ route("contact-mail") }}">
                  @csrf
									<div class="row clearfix">
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<input type="text" name="lastname" value="" placeholder="Nom*"
													required="">
											</div>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<input type="text" name="firstname" value="" placeholder="Prénom*"
													required="">
											</div>
										</div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<input type="text" name="phone" value="" placeholder="Téléphone"
													required="">
											</div>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<input type="email" name="email" value="" placeholder="E-mail*"
													required="">
											</div>
										</div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<input type="text" name="website" value="" placeholder="Site web"
													required="">
											</div>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<input type="email" name="email" value="" placeholder="Sujet"
													required="">
											</div>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<div class="field-inner">
												<textarea name="message" placeholder="Écrivez votre message*"
													required=""></textarea>
											</div>
										</div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      @if (session()->has('success'))
                        <div class="alert alert-success">
                          {!! session()->get('success')!!}
                        </div>
                        @else
                        <button class="theme-btn btn-style-one">
                          <i class="btn-curve"></i>
                          <span class="btn-title">Envoyer le message</span>
                        </button>
                      @endif
										</div>
									</div>
								</form>
							</div>
						</div>
					</div><!-- /.col-lg-8 -->
				</div><!-- /.row -->

			</div>
		</section>


		<section class="contact-info-two">
			<div class="auto-container">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<div class="contact-info-two__card wow fadeInUp" data-wow-duration="1500ms">
							<i class="fa fa-map-marker-alt"></i>
							<a href="#">Bordeaux</a>
						</div><!-- /.contact-info-two__card -->
					</div><!-- /.col-md-12 col-lg-4 -->
					<div class="col-md-12 col-lg-4">
						<div class="contact-info-two__card wow fadeInUp" data-wow-duration="1500ms"
							data-wow-delay="300ms">
							<i class="fa fa-envelope"></i>
							<a href="mailto:bonjour@lyneo.fr">bonjour@lyneo.fr</a>
						</div><!-- /.contact-info-two__card -->
					</div><!-- /.col-md-12 col-lg-4 -->
					<div class="col-md-12 col-lg-4">
						<div class="contact-info-two__card wow fadeInUp" data-wow-delay="600ms"
							data-wow-duration="1500ms">
							<i class="fa fa-phone"></i>
							<a href="tel:+926668880000">+92 (666) 888- 0000</a>
						</div><!-- /.contact-info-two__card -->
					</div><!-- /.col-md-12 col-lg-4 -->
				</div><!-- /.row -->
			</div><!-- /.auto-container -->
		</section><!-- /.contact-info-two -->

		<div class="map-box">
			<iframe class="map-iframe"
				src="https://maps.google.com/maps?q=grand%20hommes%203300&t=&z=13&ie=UTF8&iwloc=&output=embed"
				style="border:0;" aria-hidden="false" tabindex="0"></iframe>
		</div>


@endsection
