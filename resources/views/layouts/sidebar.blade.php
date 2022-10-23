<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
  <aside class="sidebar blog-sidebar">
      <div class="sidebar-widget services">
          <div class="widget-inner">
              <div class="sidebar-title">
                  <h4>Nos Services</h4>
              </div>
              <ul>
                  <li class="{{ (request()->is('developpement-web/*')) || (request()->is('developpement-web')) ? 'active' : '' }}"><a href="{{ route('developpement') }}"><a href="{{ route('developpement') }}">Développement Web</li>
                  <li class="{{ (request()->is('marketing-digital/*')) || (request()->is('marketing-digital')) ? 'active' : '' }}"><a href="{{ route('marketing-digital') }}"><a href="{{ route('marketing-digital') }}">Marketing Digital</li>
              </ul>
          </div>
      </div>

      <div class="sidebar-widget call-up">
          <div class="widget-inner">
              <div class="sidebar-title">
                  <h4>Besoin de renseignements?</h4>
              </div>
              <div class="text">Vous préférez parler à une personne plutôt que de remplir un formulaire? Cliquez sur le bouton ci-dessous, et prenons un rendez-vous.
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
