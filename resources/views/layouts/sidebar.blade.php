<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
  <aside class="sidebar blog-sidebar">
      <div class="sidebar-widget services">
          <div class="widget-inner">
            <!-- ////////Google Reviews////////// -->
            {{-- <a style="color: #222429;" target="_blank" rel="noopener" href="https://www.google.com/search?q=lyneo+web&hl=fr-FR&gl=fr&sxsrf=ALiCzsYBQfjGEPMVYMZom0toeyHb8HZQVg%3A1671137867346&ei=S4qbY9DbFPOekdUPo_S0mA4&ved=0ahUKEwiQrdDXwfz7AhVzT6QEHSM6DeMQ4dUDCA8&uact=5&oq=lyneo+web&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIECCMQJzIECCMQJzoHCCMQsAMQJzoKCAAQRxDWBBCwAzoHCAAQsAMQQzoLCC4QgAQQxwEQrwE6CggAEIAEEAoQywE6CQgAEB4Q8QQQCjoGCAAQHhAKSgQIQRgASgQIRhgAUKEEWPgIYK8MaAFwAXgAgAFjiAHAApIBATSYAQCgAQHIAQrAAQE&sclient=gws-wiz-serp#lrd=0x47ff893042554d53:0x8e95570e952244ca,1,,,">
              <section class="reviews-section text-center mb-4">
                <div class="container">
                  <div id="reviews" class="columns is-marginless is-multiline"></div>
                  <div class="" style="width: 60%;margin: 0 auto">
                    <div style="margin: -5px;">
                      <span style="font-weight: bold;"><span id="reviews_count_2"></span> avis </span>sur
                      <img src="{{ asset('images') }}/logo-google-reviews.svg" alt="logo Google" style="height: 20px"/>
                    </div>
                    <div style="margin: -10px;" class="my-rating-4" id="reviews_count"></div>
                    <div>
                      <span id="reviews_total_count"></span>/5
                    </div>
                      <div class="">
                        <div id="map"></div>
                        <span id="reviews_total_number" style="font-family: Arial;font-weight:bold"></span>
                      </div>
                  </div>
                </div>
              </section>
            </a> --}}
              <div class="sidebar-title">
                  <h4>Nos Services</h4>
              </div>
              <ul>
                  <li class="{{ (request()->is('developpement-web/*')) || (request()->is('developpement-web')) ? 'active' : '' }}"><a href="{{ route('developpement') }}"><a href="{{ route('developpement') }}">Développement Web</li>
                  <li class="{{ (request()->is('marketing-digital/*')) || (request()->is('marketing-digital')) ? 'active' : '' }}"><a href="{{ route('marketing-digital') }}"><a href="{{ route('marketing-digital') }}">Marketing Digital</li>
              </ul>
          </div>
      </div>

      <div class="sidebar-widget call-up sidebar" >
          <div class="widget-inner">
              <div class="sidebar-title">
                  <h4>Besoin de renseignements?</h4>
              </div>
              <div class="text">Cliquez sur le bouton ci-dessous, et prenons un rendez-vous.
              </div>
              <div class="link-box my-4 text-center">
                <a class="theme-btn btn-style-four" href="https://tidycal.com/lyneo/discutons-de-votre-projet">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Discutons-en</span>
                </a>
              </div>
          </div>
      </div>
  </aside>
</div>

