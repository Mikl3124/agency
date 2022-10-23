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
                  <h4>need Linoor help?</h4>
              </div>
              <div class="text">Prefer speaking with a human to filling out a form? call corporate
                  office and we will connect you with a team member who can help.
              </div>
              <div class="phone"><a href="tel:666888000"><span
                class="icon flaticon-call"></span>07 85 65 92 65</a>
              </div>
          </div>
      </div>
  </aside>
</div>
