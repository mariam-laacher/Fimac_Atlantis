<!--============== Footer Section Start ==============-->
<footer class="full-row footer-default-dark bg-footer" style="padding-bottom: 30px; padding-top: 120px">
    <div class="container">
        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1">
            <div class="col">
                <div class="footer-widget mb-4">
                    <div class="footer-logo mb-4">
                        <a href="#"><img src="{{ asset('assets/images/logo/fimaclogo3.png') }}" alt="Image not found!" /></a> <br><br>
                    </div><br><br>
                    <p>Un confort raffiné et une harmonie élégante : chaque espace est pensé pour offrir une touche d’anticipation, un équilibre parfait et une clarté dans vos choix, répondant à toutes vos attentes en immobilier.</p>
                </div>
                <div class="footer-widget media-widget mb-4">
                    <h3 class="widget-title mb-4">SOCIAL LINKS</h3>
                    <a href="https://www.facebook.com/share/156yNYSuiH/?mibextid=wwXIfr" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/fimac_atlantis/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    
                    
                </div>
            </div>
            <div class="col">
                <div class="footer-widget contact-widget mb-4">
                    <h3 class="widget-title mb-4">Contact Info</h3>
                    <ul>
                        <li>
                            <a href="https://www.google.com/maps/search/?api=1&query=Citrine+A+immeuble+8+bureau+3+1er+étage" target="_blank">
                                Citrine A immeuble 8 bureau 3 1er étage
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/212660114297" target="_blank">+212 660-114297</a>
                        </li>
                        <li>
                            <a href="mailto:fimac.atlantis@gmail.com">fimac.atlantis@gmail.com</a>
                        </li>
                    </ul>                    
                </div>
            </div>
            <div class="col">
                <div class="footer-widget footer-nav mb-4">
                    <h3 class="widget-title mb-4">Lien Rapide</h3>
                    <ul>
                        <li><a href="{{route('home')}}">Acceuil</a></li>
                        <li><a href="#">Nos projets </a></li>
                        <li><a href="{{ route('localisation') }}">Nos Localisation</a></li>
                        <li><a href="{{route('aboutus')}}">A propos de nous </a></li>
                        <li><a href="{{ route('contactus') }}">Contactez-nous</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="footer-widget footer-nav mb-4">
                    <h3 class="widget-title mb-4">Nos appartements</h3>
                    <ul>
                        <li><a href="#">Studio</a></li>
                        <li><a href="#">Appartements Duplex</a></li>
                        <li><a href="#">Appartements avec Terrasse</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--============== Footer Section End ==============-->

<!--============== Copyright Section Start ==============-->
<div class="copyright bg-footer text-default py-4">
    <div class="container">
        <div class="row row-cols-md-2 row-cols-1">
            <div class="col">
                <span class="text-white">© 2025. All right reserved Designed by FimacAtlantis </span>
            </div>
            <div class="col">
                <ul class="line-menu float-end list-color-gray">
                    <li><a href="#">Privacy & Policy </a></li>
                    {{-- <li>|</li> --}}
                    {{-- <li><a href="#">Site Map</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
<!--============== Copyright Section End ==============-->

<!-- Scroll to top -->
<div class="scroll-top-vertical xs-mx-none" id="scroll">  <i class="ms-2 fa-solid fa-arrow-right-long"></i></div>
<!-- End Scroll To top -->

<!--============== Modal Start ==============-->
<div class="overlay-dark modal fade quick-view-modal" id="quick-view">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="close view-close">
                <span aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body property-block summary p-3">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col">
                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom m-2">
                            <div class="cata position-absolute">
                                <span class="sale bg-secondary text-white">For Rent</span>
                                <span class="featured bg-primary text-white">Featured</span>
                            </div>
                            <a href="#"><img class="w-100" src="assets/images/property/2.png" alt=""></a>
                            <ul class="position-absolute quick-meta">
                                <li><a href="#"><i class="flaticon-transfer flat-mini"></i></a></li>
                                <li><a href="#"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                <li><a href="#"><i class="flaticon-share flat-mini"></i></a></li>
                                <li><a href="#"><i class="flaticon-printer flat-mini"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="property_text transation py-3 pe-3">
                            <span class="d-inline-block text-primary">Condos</span>
                            <h5 class="modal-title mb-1" id="staticBackdropLabel"><a href="#" class="text-secondary hover-text-primary transation">Luxury Condos Infront of the street of Green Park</a></h5>
                            <span class="mt-1 mb-3 d-block font-fifteen"><i class="fas fa-map-marker-alt text-primary"></i> 2305 Tree Frog Lane Overlandpk, MO 66210</span>
                            <a href="#" class="d-block text-light hover-text-primary font-small mb-2">( 100 People Recommended )</a>
                            <div class="d-flex">
                                <span class="text-secondary font-large">$5600 - $8300/<small>mo</small></span>
                                <span class="text-white font-mini px-2 rounded product-status ms-5 my-1 bg-primary"><i class="fas fa-check"></i> Available</span>
                            </div>
                            <div class="product-offers mt-3">
                                <ul class="product-offers-list">
                                    <li class="product-offer-item"> <strong>Special Price </strong>Get extra 19% off (price inclusive of discount)</li>
                                    <li class="product-offer-item"> <strong>Bank Offer </strong> 10% instant discount on VISA Cards</li>
                                    <li class="product-offer-item"> <strong>No cost EMI $49/month.</strong> Standard EMI also available</li>
                                </ul>
                            </div>
                            <hr>
                            <div class="quantity">
                                <ul class="d-flex">
                                    <li><span>Rooms:</span> 5</li>
                                    <li><span>Beds:</span> 3</li>
                                    <li><span>Bathrooms:</span> 2</li>
                                    <li><span>Garage:</span> 1</li>
                                    <li><span>Area:</span> 1100 Sqft</li>
                                </ul>
                            </div>
                            <h5 class="text-secondary my-3">Description</h5>
                            <p>Bibendum purus aenean mus aenean eu interdum nonummy ipsum ad consequat. Dui eros donec faucibus convallis tempus rutrum id donec mus hymenaeos placerat congue curae mauris turpis gravida viverra consequat consequat
                                gravida luctus.</p>
                            <div class="short-description d-flex">
                                <span class="me-4"><b>Highlights:</b></span>
                                <div class="short-description">
                                    <ul class="list-style-tick">
                                        <li>Regular Fit.</li>
                                        <li>Full sleeves.</li>
                                        <li>Machine wash, tumble dry.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center post-meta mt-2 py-3 border-top">
                                <div class="agent">
                                    <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                </div>
                                <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============== Modal End ==============-->

</div>

    <!-- Javascript Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/greensock.js') }}"></script>
    <script src="{{ asset('assets/js/layerslider.transitions.js') }}"></script>
    <script src="{{ asset('assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/range/tmpl.js') }}"></script>
    <script src="{{ asset('assets/js/range/jquery.dependClass.js') }}"></script>
    <script src="{{ asset('assets/js/range/draggable.js') }}"></script>
    <script src="{{ asset('assets/js/range/jquery.slider.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/paraxify.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        $('#slider').layerSlider({
            sliderVersion: '6.0.0',
            type: 'fullwidth',
            responsiveUnder: 0,
            maxRatio: 1,
            slideBGSize: 'auto',
            hideUnder: 0,
            hideOver: 100000,
            skin: 'outline',
            fitScreenWidth: true,
            fullSizeMode: 'fitheight',
            navButtons: false,
            navStartStop: false,
            height:840,
            skinsPath: 'assets/skins/'
        });
        $('#single-property').layerSlider({
            sliderVersion: '6.5.0b2',
            type: 'popup',
            pauseOnHover: 'disabled',
            skin: 'photogallery',
            globalBGSize: 'cover',
            navStartStop: false,
            hoverBottomNav: true,
            showCircleTimer: false,
            thumbnailNavigation: 'always',
            tnContainerWidth: '100%',
            tnHeight: 70,
            popupShowOnTimeout: 1,
            popupShowOnce: false,
            popupCloseButtonStyle: 'background: rgba(0,0,0,.5); border-radius: 2px; border: 0; left: auto; right: 10px;',
            popupResetOnClose: 'disabled',
            popupDistanceLeft: 20,
            popupDistanceRight: 20,
            popupDistanceTop: 20,
            popupDistanceBottom: 20,
            popupDurationIn: 750,
            popupDelayIn: 500,
            popupTransitionIn: 'scalefromtop',
            popupTransitionOut: 'scaletobottom',
            skinsPath: 'assets/skins/'
        });
    
        // Statistic
        if (document.querySelector('#mychart') !== null) {
            var ctx = document.getElementById("mychart").getContext('2d');
    
            // Data with datasets options
            var data = {
                type: 'line',
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
                datasets: [{
                    label: 'Growth',
                    fill: true,
                    backgroundColor: "#def7e0",
                    borderColor: "#17c788",
                    data: [0, 150, 450, 400, 480, 630, 580, 500, 530, 400, 430, 600, 400],
                }]
            }
    
            // Chart declaration with some options:
            var mychart = new Chart(ctx, {
                type: 'line',
                data: data,
            });
        }
    
        //Doughnut and Pie
        if (document.querySelector('#mychart-2') !== null) {
            var ctx2 = document.getElementById("mychart-2").getContext('2d');
    
            // Data with datasets options
            var data2 = {
                type: 'doughnut',
                labels: ['Desktop', 'Tablet', 'Mobile'],
                datasets: [{
                    data: [10, 20, 30],
                    backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)']
                }],
    
            };
    
            // For a pie chart
            var myPieChart = new Chart(ctx2, {
                type: 'pie',
                data: data2,
            });
            // And for a doughnut chart
            var myDoughnutChart = new Chart(ctx2, {
                type: 'doughnut',
                data: data2,
            });
        }
    </script>
</body>

</html>