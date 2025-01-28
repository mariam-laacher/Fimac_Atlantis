<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('assets/images/logo/fimaclogo3.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/fimaclogo3.ico') }}" type="image/x-icon">
    <title>@yield('title', 'Fimac Atlantis')</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/owlcarousel.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('adminAssets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/responsive.css') }}">

  </head>
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start   -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="{{route('dashboard')}}"> <img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}"
              alt=""></a></div>
            <div class="toggle-sidebar">
              <svg class="sidebar-toggle"> 
                <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#stroke-animation"></use>
              </svg>
            </div>
          </div>
          <form class="col-sm-4 form-inline search-full d-none d-xl-block" action="#" method="get">
            <div class="form-group">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  {{-- <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Type to Search .." name="q" title="" autofocus> --}}
                  {{-- <svg class="search-bg svg-color">
                    <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#search"></use>
                  </svg> --}}
                </div>
              </div>
            </div>
          </form>
          <div class="nav-right col-xl-8 col-lg-12 col-auto pull-right right-header p-0">
            <ul class="nav-menus">
              <li class="serchinput">
                <div class="serchbox">
                  <svg>
                    <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#search"></use>
                  </svg>
                </div>
                <div class="form-group search-form">
                  <input type="text" placeholder="Search here...">
                </div>
              </li>
              <li class="onhover-dropdown"> 
                <div class="notification-box">
                  <svg> 
                    <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Bell"></use>
                  </svg>
                </div>
                <div class="onhover-show-div notification-dropdown"> 
                  <h6 class="f-18 mb-0 dropdown-title">Notifications</h6>
                  <div class="notification-card">
                    <ul>
                      <li>
                        <div class="user-notification">
                          <div><img src="../assets/images/avtar/2.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>You have new finical page design.</h4></a><span>Today 11:45pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"><a href="{{route('dashboard')}}"> <span>Show</span></a></div>
                      </li>
                      <li>
                        <div class="user-notification">
                          <div><img src="../assets/images/avtar/17.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>Congrats! you all task for today.</h4></a><span>Today 01:05pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"><a href="{{route('dashboard')}}"> <span>Show</span></a></div>
                      </li>
                      <li> 
                        <div class="user-notification">
                          <div> <img src="../assets/images/avtar/18.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>You have new in landing page design.</h4></a><span>Today 06:55pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"><a href="{{route('dashboard')}}"> <span>Show</span></a></div>
                      </li>
                      <li>
                        <div class="user-notification">
                          <div><img src="../assets/images/avtar/19.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>Congrats! you all task for today.</h4></a><span>Today 06:55pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"> <a href="{{route('dashboard')}}"> <span>Show</span></a></div>
                      </li>
                      <li> <a class="f-w-700" href="letter-box.html">Check all </a></li>
                    </ul>
                  </div>
                </div>
              </li>
              {{-- <li class="onhover-dropdown">
                <svg>
                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Bookmark"></use>
                </svg>
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front">
                        <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                        <ul class="bookmark-dropdown">
                          <li>
                            <div class="row">
                              <div class="col-4 text-center"><a href="form-validation.html">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon bg-light-primary"><i data-feather="file-text"></i></div><span>Forms</span>
                                  </div></a></div>
                              <div class="col-4 text-center"><a href="user-profile.html">
                                  <div class="bookmark-content"> 
                                    <div class="bookmark-icon bg-light-secondary"><i data-feather="user"></i></div><span>Profile</span>
                                  </div></a></div>
                              <div class="col-4 text-center"><a href="bootstrap-basic-table.html">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon bg-light-warning"> <i data-feather="server"> </i></div><span>Tables </span>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="text-centermedia-body"> <a class="flip-btn f-w-700" id="flip-btn" href="javascript:void(0)">Add New Bookmark</a></li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="search...">
                            </div>
                          </li>
                          <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li> --}}
              <li class="onhover-dropdown"> 
                <div class="message position-relative">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M4 4h16v12H4z" fill="none" stroke="black" stroke-width="2"/>
                    <path d="M4 8h16M4 12h16" stroke="black" stroke-width="2"/>
                  </svg>
                  <span class="rounded-pill badge-danger"></span>
                </div>
                <div class="onhover-show-div message-dropdown">
                  <h6 class="f-18 mb-0 dropdown-title">Message</h6>
                  <ul>
                    <li>
                      <div class="d-flex align-items-start"> 
                        <div class="message-img bg-light-primary"><img src="../assets/images/user/10.jpg" alt=""></div>
                        <div class="flex-grow-1">
                          <h5> <a href="letter-box.html">Sarah Loren</a></h5>
                          <p>What`s the project report update?</p>
                        </div>
                        <div class="notification-right"><i data-feather="x"></i></div>
                      </div>
                    </li>
                    <li> <a class="f-w-700" href="private-chat.html">Check all</a></li>
                  </ul>
                </div>
              </li>
              {{-- <li class="cart-nav onhover-dropdown">
                <div class="cart-box"> 
                  <svg>
                    <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Buy"></use>
                  </svg>
                </div>
                <div class="cart-dropdown onhover-show-div">
                  <h6 class="f-18 mb-0 dropdown-title">Cart</h6>
                  <ul>
                    <li>
                      <div class="d-flex"><img class="img-fluid b-r-5 img-50" src="../assets/images/ecommerce/05.jpg" alt="">
                        <div class="flex-grow-1"> <span>Women's Track Suit</span>
                          <h6 class="font-primary">8 x $65.00</h6>
                        </div>
                        <div class="close-circle"><a class="bg-primary" href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex"><img class="img-fluid b-r-5 img-50" src="../assets/images/ecommerce/02.jpg" alt="">
                        <div class="flex-grow-1"><span>Men's Jacket</span>
                          <h6 class="font-primary">10 x $50.00</h6>
                        </div>
                        <div class="close-circle"><a class="bg-primary" href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li class="total">
                      <h6 class="mb-0">Order Total :<span class="f-right">$1020.00</span></h6>
                    </li>
                    <li class="text-center"> <a href="cart.html">
                        <button class="btn btn-outline-primary" type="button">View Cart</button></a><a class="btn btn-primary view-checkout" href="checkout.html">Checkout  </a></li>
                  </ul>
                </div>
              </li> --}}
              {{-- <li>
                <div class="mode">
                  <svg class="for-dark">
                    <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#moon"></use>
                  </svg>
                  <svg class="for-light">
                    <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Sun"></use>
                  </svg>
                </div>
              </li> --}}
              {{-- <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><i class="flag-icon flag-icon-gb"></i><span class="lang-txt box-col-none">EN            </span></div>
                  </div>
                  <div class="more_lang">
                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                    <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                    <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Español</span></div>
                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span></div>
                    <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Português<span> (BR)</span></span></div>
                    <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span></div>
                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية <span> (ae)</span></span></div>
                  </div>
                </div>
              </li> --}}
              <li class="profile-nav onhover-dropdown pe-0 py-0">
                <div class="d-flex align-items-center profile-media">
                  <img class="b-r-25" src="{{ asset('adminAssets/images/dashboard/profile.png') }}" alt="Profile">                  
                  <div class="flex-grow-1 user"><span>{{ Auth::user()->name }}</span>
                    <p class="mb-0 font-nunito">Admin 
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5z" fill="none" stroke="black" stroke-width="2"/>
                      </svg>                      
                    </p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a></li>
                  {{-- <li><a href="letter-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li> --}}
                  {{-- <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li> --}}
                  {{-- <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li> --}}
                  <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" style="border: none; background: none; cursor: pointer;">
                            <i data-feather="log-out"></i><span>Log Out</span>
                        </button>
                    </form>
                </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page body Start -->
      <div class="page-body-wrapper"> 
  <!-- Page Sidebar Start-->
  <div class="sidebar-wrapper" data-layout="stroke-svg">
      <div>
        <div class="logo-wrapper"><a href="{{route('dashboard')}}"> <img class="img-fluid for-light" width="60" height="60" src="{{ asset('assets/images/logo/fimaclogo3.png') }}" alt=""></a>
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
              <br>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{route('dashboard')}}">
                    <svg class="stroke-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M3 12l9-9 9 9"></path>
                      <path d="M9 21V12h6v9"></path>
                    </svg>
                  
                    <svg class="fill-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                      <path d="M12 2L3 10h2v10h6V14h2v6h6V10h2L12 2z"></path>
                    </svg>
                    <span>Dashboard  </span></a>
                </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="{{ route('categories.index') }}">
                        <!-- Icône pour Categories -->
                        <svg class="stroke-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                            <path d="M3 10h18"></path>
                            <path d="M9 21V10"></path>
                        </svg>
                
                        <svg class="fill-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                            <path d="M3 10h18"></path>
                            <path d="M9 21V10"></path>
                        </svg>
                        
                        <span>Categories</span>
                    </a>
                </li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="{{ route('sub_categories.index') }}">
                      <!-- Icône pour Sous Categories - Dossier -->
                      <svg class="stroke-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M9 3H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-5l-2-2H9a2 2 0 0 0-2 2z" />
                      </svg>
              
                      <svg class="fill-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                          <path d="M9 3H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-5l-2-2H9a2 2 0 0 0-2 2z" />
                      </svg>
              
                      <span>Sous-Catégories</span>
                  </a>
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