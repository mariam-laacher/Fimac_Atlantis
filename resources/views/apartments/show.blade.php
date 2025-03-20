<title>Fimac Atlantis | {{$apartment->designation}} </title>
@include('header2')
{{-- header --}}

        <!--============== Header Section End ==============-->

        <!--============== Page title Start ==============-->
        <div class="full-row py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        {{-- <nav aria-label="breadcrumb" class="mb-2">
                            <ol class="breadcrumb mb-0 bg-transparent p-0">
                                <li class="breadcrumb-item active text-primary"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">{{$apartment->designation}}</li>
                            </ol>
                        </nav> --}}
                        <h3 class="text-secondary">{{$apartment->designation}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Page title End ==============-->

        <!--============== Property Slider Start ==============-->
        <div class="full-row p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="single-property" style="width:1200px; height:600px; margin:0 auto 30px;">
                            @foreach($apartment->images as $image)
                                <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;">
                                    <img width="1920" height="1280" src="{{ asset($image->image_path) }}" class="ls-bg" alt="Image de l'appartement">
                                </div>
                            @endforeach
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <!--============== Property Slider End ==============-->

        <!--============== Property Details Start ==============-->
        <div class="full-row pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 order-xl-2">
                        <!--============== Recent Property Widget Start ==============-->
                        <div class="widget widget_recent_property">
                            <h5 class="text-secondary mb-4">Recent Property</h5>
                            <ul>
                                @foreach($apartments->take(3) as $apartment)
                                    <li>
                                        <img src="{{ asset($apartment->images->first()->image_path) }}" alt=""> <!-- Supposons que vous ayez un champ image_path dans le modèle Appartement -->
                                        <div class="thumb-body">
                                            <h6 class="listing-title"><a href="{{ route('apartments.show', $apartment->id) }}">{{ $apartment->designation }}</a></h6>
                                            <span class="listing-price">
                                                <small>
                                                    @if($apartment->niveau == 'rdc')
                                                        RDC
                                                    @elseif($apartment->niveau == 'mezzanine')
                                                        Mezzanine
                                                    @elseif($apartment->niveau == '1er_etage')
                                                        1er
                                                    @elseif($apartment->niveau == '2eme_etage')
                                                        2ème
                                                    @elseif($apartment->niveau == '3eme_etage')
                                                        3ème
                                                    @else
                                                        {{ $apartment->niveau }}
                                                    @endif
                                                </small>
                                            </span>
                                            <ul class="d-flex quantity font-fifteen">
                                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>{{ $apartment->surface }} m²</li>
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--============== Recent Property Widget End ==============-->
                    </div>
                    <div class="col-xl-8 order-xl-1">
                        <div class="property-overview border summary rounded bg-white p-30 mb-30">
                            <div class="row mb-4">
                                <div class="col-auto">
                                    <div class="post-meta font-small text-uppercase list-color-primary">
                                        <a href="{{ route('subCategory.show', $apartment->subCategory->id) }}" class="listing-ctg">
                                            <i class="fa-solid fa-building"></i>
                                            <span>{{ $apartment->subCategory->name }}</span>
                                        </a>
                                    </div>  <br>                                  
                                    <h4 class="listing-title">{{ $apartment->designation }}</h4> <br> 
                                    <span class="listing-location"><i class="fas fa-map-marker-alt text-primary"></i>  Citrine A immeuble 8 bureau 3 1er étage</span>
                                    {{-- <a href="#" class="d-block text-light hover-text-primary font-small mb-2">( 100 People Recommended )</a> --}}
                                </div>
                                <div class="col-auto ms-auto xs-m-0 text-end xs-text-start pb-4">
                                    <span class="listing-price">
                                        @if($apartment->niveau == 'rdc')
                                            Rez-de-chaussée 
                                        @elseif($apartment->niveau == 'mezzanine')
                                            Mezzanine
                                        @elseif($apartment->niveau == '1er_etage')
                                            1er
                                        @elseif($apartment->niveau == '2eme_etage')
                                            2ème
                                        @elseif($apartment->niveau == '3eme_etage')
                                            3ème
                                        @else
                                            {{ $apartment->niveau }}
                                        @endif
                                    </span> <br>
                                    <span class="text-white font-mini px-2 rounded product-status ms-auto xs-m-0 py-1 
                                        @if($apartment->status == 'active') 
                                            bg-success 
                                        @else 
                                            bg-danger 
                                        @endif">
                                        <i class="fas 
                                            @if($apartment->status == 'active') 
                                                fa-check 
                                            @else 
                                                fa-times 
                                            @endif"></i> 
                                        @if($apartment->status == 'active')
                                            Disponible
                                        @else
                                            Indisponible
                                        @endif
                                    </span>

                                </div>
                                <div class="col-12">
                                    {{-- <div class="product-offers mt-2">
                                        <ul class="product-offers-list">
                                            <li class="product-offer-item"> <strong>Special Price </strong>Get extra 19% off (price inclusive of discount)</li>
                                            <li class="product-offer-item"> <strong>Bank Offer </strong> 10% instant discount on VISA Cards</li>
                                            <li class="product-offer-item"> <strong>No cost EMI $49/month.</strong> Standard EMI also available</li>
                                        </ul>
                                    </div> --}}
                                    <ul class="quick-meta mt-4 d-flex justify-content-center">
                                        {{-- <li class="bg-light"><a href="#" title="Add to compare" class="text-dark"><i class="flaticon-transfer flat-mini"></i></a></li>
                                        <li class="bg-light"><a href="#" title="Add wishlist" class="text-dark"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                        <li class="bg-light"><a href="#" title="Media share" class="text-dark"><i class="flaticon-share flat-mini"></i></a></li>
                                        <li class="bg-light"><a href="#" title="Print Data" class="text-dark"><i class="flaticon-printer flat-mini"></i></a></li>
                                        <li class="bg-light"><a href="#" title="Download PDF" class="text-dark"><i class="fas fa-download flat-mini"></i></a></li> --}}
                                        <li class="bg-primary w-auto"><a href="#contactez_nous" class="px-5 text-white">Contactez-Nous</a></li>
                                    </ul>

                                    <hr>
                                    <div class="mt-2">
                                        <ul class="list-three-fold-width d-table">
                                            <!-- Chambres -->
                                            <li>
                                                <span class="font-500">Chambres :</span> 
                                                @if($apartment->chambre_1 == 1 && $apartment->chambre_2 == 1)
                                                    2
                                                @elseif($apartment->chambre_1 == 1 || $apartment->chambre_2 == 1)
                                                    1
                                                @else
                                                    0
                                                @endif
                                            </li> 
                                    
                                            <!-- Salon -->
                                            <li><span class="font-500">Salon :</span> {{ $apartment->salon }}</li> <!-- J'ai supposé que "salon" peut être le nombre de lits -->
                                    
                                            <!-- Surface -->
                                            <li><span class="font-500">Surface :</span> {{ $apartment->surface }} m²</li>
                                    
                                            <!-- Salles de bain -->
                                            <li><span class="font-500">Salles de bain :</span> {{ $apartment->sdb }}</li>
                                    
                                            <!-- Wc -->
                                            <li><span class="font-500">Wc :</span> @if($apartment->wc == 1) Oui @else Non @endif ( {{ $apartment->wc }} capacité )</li> <!-- J'ai supposé que "wc" pourrait être utilisé ici -->
                                    
                                            <!-- Terrasse -->
                                            <li><span class="font-500">Terrasse :</span> @if($apartment->terrasse == 1) Oui @else Non @endif ( 1 Grande )</li>
                                        </ul>
                                    </div>                                                                   
                                </div>
                            </div>
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-3">Description</h5>
                                    <p>Un confort raffiné et une harmonie élégante : chaque espace est pensé pour offrir une touche d’anticipation, un équilibre parfait et une clarté dans vos choix, répondant à toutes vos attentes en immobilier.</p>
                            
                                    <p>Des aménagements sur mesure et une attention particulière aux détails créent une atmosphère accueillante et sophistiquée, propice à la détente et à la convivialité.</p>
                            
                                    <div class="short-description d-flex">
                                        <span class="me-4 font-500">Points forts :</span>
                                        <div class="short-description">
                                            <ul class="list-style-tick">
                                                <li>Ambiance chaleureuse et moderne.</li>
                                                <li>Optimisation de l’espace pour plus de confort.</li>
                                                <li>Matériaux de qualité supérieure, garantissant durabilité et élégance.</li>
                                                <li>Proximité de toutes commodités (transports, commerces, écoles).</li>
                                                <li>Architecture contemporaine avec une touche d’intemporalité.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="property-overview border rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-3">Plus d'informations</h5>
                                    <ul class="list-three-fold-width">
                                        <li><span class="font-500">Type :</span> {{ preg_replace('/\d/', '', $apartment->designation) }} </li>
                                        <li><span class="font-500">Niveau :</span> 
                                            @if($apartment->niveau == 'rdc') 
                                                Rez-de-chaussée 
                                            @elseif($apartment->niveau == 'mezzanine') 
                                                Mezzanine 
                                            @elseif($apartment->niveau == '1er_etage') 
                                                1er étage 
                                            @elseif($apartment->niveau == '2eme_etage') 
                                                2ème étage 
                                            @elseif($apartment->niveau == '3eme_etage') 
                                                3ème étage 
                                            @else 
                                                {{ $apartment->niveau }} 
                                            @endif
                                        </li>
                                        <li><span class="font-500">Surface :</span> {{ $apartment->surface }} m²</li>
                                        <li><span class="font-500">Salon :</span> {{ $apartment->salon ? 'Oui' : 'Non' }}</li>
                                        <li><span class="font-500">Hall :</span> {{ $apartment->hall ? 'Oui' : 'Non' }}</li>
                                        <li><span class="font-500">Cuisine :</span> {{ $apartment->cuisine ? 'Oui' : 'Non' }}</li>
                                        <li><span class="font-500">Chambres :</span> 
                                            @if($apartment->chambre_1 && $apartment->chambre_2) 
                                                2 
                                            @elseif($apartment->chambre_1 || $apartment->chambre_2) 
                                                1 
                                            @else 
                                                0 
                                            @endif
                                        </li>
                                        <li><span class="font-500">Salle de bain :</span> {{ $apartment->sdb ? 'Oui' : 'Non' }}</li>
                                        <li><span class="font-500">WC :</span> {{ $apartment->wc ? 'Oui' : 'Non' }}</li>
                                        <li><span class="font-500">Terrasse :</span> {{ $apartment->terrasse ? 'Oui' : 'Non' }}</li>
                                        <li><span class="font-500">Statut :</span> 
                                            @if($apartment->status == 'active')
                                            Disponible
                                            @else
                                                Indisponible
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        {{-- <div class="property-overview border rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-3">Property Summary</h5>
                                    <div class="table-striped overflow-x-scroll pb-2">
                                        <table class="w-100">
                                            <tbody>
                                                <tr>
                                                    <td>Property Id :</td>
                                                    <td>LA459C27</td>
                                                    <td>Listing Type :</td>
                                                    <td>For Sale</td>
                                                </tr>
                                                <tr>
                                                    <td>Property Type:</td>
                                                    <td>Appartment</td>
                                                    <td>Current Owner :</td>
                                                    <td>Green Developers LTD</td>
                                                </tr>
                                                <tr>
                                                    <td>Insurance :</td>
                                                    <td>Yes</td>
                                                    <td>Architecture :</td>
                                                    <td>Nova Socity</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Floor :</td>
                                                    <td>10 Story Building</td>
                                                    <td>Year of Built :</td>
                                                    <td>2008 - 2012</td>
                                                </tr>
                                                <tr>
                                                    <td>Furniture Type :</td>
                                                    <td>High Class</td>
                                                    <td>Payment Way :</td>
                                                    <td>Instalment / Cash</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="property-overview border rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-3">Property Features</h5>
                                    <ul class="list-three-fold-width list-style-tick">
                                        <li>Salle de fitness</li>
                                        <li>Piscines</li>
                                        <li>Parking disponible</li>
                                        <li>Vue sur le parc</li>
                                        <li>Aire de jeux</li>
                                        <li>Jardin</li>
                                        <li>Mobilier de cuisine</li>
                                        <li>Sécurité incendie</li>
                                        <li>Portes de haute qualité</li>
                                        <li>Salle de stockage</li>
                                        <li>Sol en marbre</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="property-overview border rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-3">Floor Plans</h5>
                                    <div class="simple-collaps mb-2">
                                        <span class="accordion bg-light text-secondary d-block px-4 py-2">Floor Plans [ 4200 sqft ]</span>
                                        <div class="panel">
                                            <div class="px-4 py-3">
                                                <ul class="d-inline-block">
                                                    <li class="float-start me-3"><span class="text-secondary">Bed: </span>162.5 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Kitchen: </span>108.2 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Dining: </span>145.7 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Bath: </span>38.7 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Storage: </span>123. 2 sqft</li>
                                                </ul>
                                                <img src="assets/images/house-floor-plan.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simple-collaps mb-2">
                                        <span class="accordion bg-light text-secondary d-block px-4 py-2">Grage Plans [ 4200 sqft ]</span>
                                        <div class="panel">
                                            <div class="px-4 py-3">
                                                <ul class="d-inline-block">
                                                    <li class="float-start me-3"><span class="text-secondary">Bed: </span>162.5 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Kitchen: </span>108.2 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Dining: </span>145.7 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Bath: </span>38.7 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Storage: </span>123. 2 sqft</li>
                                                </ul>
                                                <img src="assets/images/house-floor-plan.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simple-collaps mb-2">
                                        <span class="accordion bg-light text-secondary d-block px-4 py-2">Garden Plans [ 4200 sqft ]</span>
                                        <div class="panel">
                                            <div class="px-4 py-3">
                                                <ul class="d-inline-block">
                                                    <li class="float-start me-3"><span class="text-secondary">Bed: </span>162.5 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Kitchen: </span>108.2 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Dining: </span>145.7 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Bath: </span>38.7 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Storage: </span>123. 2 sqft</li>
                                                </ul>
                                                <img src="assets/images/house-floor-plan.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="property-overview border rounded bg-white overflow-hidden mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <div class="mt-md-30 position-relative overlay-secondary">
                                        <img src="assets/images/background/bg-1.png" alt="uniland">
                                        <a data-fancybox="" class="video-popup" href="https://www.youtube.com/watch?v=-xW83WO0uM8" title="video popup">
                                            <span class="flaticon-play-button bg-primary text-white xy-center"></span>
                                        </a>
                                        <div class="loader position-absolute xy-center">
                                            <div class="loader-inner ball-scale-multiple">
                                                <div style="background: var(--theme-primary-color);"></div>
                                                <div style="background: var(--theme-primary-color);"></div>
                                            </div><span class="tooltip">
										  <b>ball-scale-multiple</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>     --}}

                        <div class="property-overview border rounded bg-white p-30 mb-30" id="contactez_nous">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-4">Contactez-Nous</h5>
                                    <form class="contact_message form-boder" action="#" method="post" novalidate="novalidate">
                                        <div class="row g-3">
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" id="email" name="email" placeholder="Email Address" type="text">
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea class="form-control" id="message" rows="5" name="message" placeholder="Message"></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-6">
                                                <button class="btn btn-primary" id="send" value="send" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Property Details End ==============-->

        <!--============== Footer Section Start ==============-->
       
{{-- footer --}}
@include('footer')