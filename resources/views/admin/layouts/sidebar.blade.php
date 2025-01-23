<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
      <div class="logo-wrapper"><a href="{{route('dashboard')}}"> <img class="img-fluid for-light" src="{{ asset('adminAssets/images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
        <div class="toggle-sidebar">
          <svg class="sidebar-toggle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>          
        </div>
      </div>
      <div class="logo-icon-wrapper">
        <a href="{{route('dashboard')}}">
            <img class="img-fluid" src="{{ asset('adminAssets/images/logo/logo-icon.png') }}" alt="">
        </a>
      </div>
          <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
          <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn"><a href="{{route('dashboard')}}"><img class="img-fluid" src="{{ asset('adminAssets/images/logo/logo-icon.png') }}" alt=""></a>
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
            <li class="pin-title sidebar-main-title">
              <div> 
                <h6>Pinned</h6>
              </div>
            </li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{route('dashboard')}}">
                <svg class="stroke-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 12l9-9 9 9"></path>
                  <path d="M9 21V12h6v9"></path>
                </svg>
              
                <svg class="fill-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                  <path d="M12 2L3 10h2v10h6V14h2v6h6V10h2L12 2z"></path>
                </svg>
                <span class="lan-3">Dashboard  </span></a>
            </li>
            {{-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#stroke-widget"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#fill-widget"></use>
                </svg><span class="lan-6">Widgets</span></a>
              <ul class="sidebar-submenu">
                <li><a href="general-widget.html">General</a></li>
                <li> <a href="chart-widget.html">Chart</a></li>
              </ul>
            </li> --}}
            {{-- <li class="sidebar-list"> <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#stroke-layout"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#fill-layout"></use>
                </svg><span class="lan-7">Page layout</span></a>
              <ul class="sidebar-submenu">
                <li><a href="box-layout.html">Boxed</a></li>
                <li><a href="layout-rtl.html">RTL</a></li>
                <li><a href="layout-dark.html">Dark Layout</a></li>
                <li><a href="hide-on-scroll.html">Hide Nav Scroll</a></li>
                <li><a href="footer-light.html">Footer Light</a></li>
                <li><a href="footer-dark.html">Footer Dark</a></li>
                <li><a href="footer-fixed.html">Footer Fixed</a></li>
              </ul>
            </li> --}}
            {{-- <li class="sidebar-main-title">
              <div>
                <h6 class="lan-8">Applications</h6>
              </div>
            </li> --}}
            {{-- <li class="sidebar-list"><i class="fa fa-thumb-tack">    </i><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#stroke-project"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#fill-project"></use>
                </svg><span>Project           </span></a>
              <ul class="sidebar-submenu">
                <li><a href="projects.html">Project List</a></li>
                <li><a href="projectcreate.html">Create new</a></li>
              </ul>
            </li> --}}
          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
    </div>
  </div>
  <!-- Page Sidebar Ends-->