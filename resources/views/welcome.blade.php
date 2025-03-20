@include('header')

        <!--============== Header Section End ==============-->

        <!--============== Slider Area Start ==============-->
        <div class="full-row p-0 overflow-hidden">
            <div id="slider" class="overflow-hidden" style="width:1200px; height:780px; margin:0 auto;margin-bottom: 0px;">
        
                <!-- Slide 1 -->
                <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:5000; transition2d:104; kenburnsscale:1.00;">
                    <img width="1920" height="960" src="assets/images/slider/pepa.png" class="ls-bg" alt="" />
                    <p style="font-size:48px; font-weight:700; top:370px; left:50%; font-family: 'Sen', sans-serif;" class="ls-l ls-hide-phone text-white" data-ls="offsetyin:100%; durationin:1500; delayin:1000; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">Residence Riyad</p>
                    <p style="top:450px; left:50%; text-align:center; font-weight:400; font-style:normal; text-decoration:none; width:650px; font-size:18px; color:#ffffff; line-height:30px; white-space:normal;" class="ls-l ls-hide-phone" data-ls="offsetyin:100%; durationin:1500; delayin:1500; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">Profitez d'un cadre de vie harmonieux, des commodités haut de gamme et parfaitement conçus pour votre bien-être</p>
                    <a class="ls-l ls-hide-phone" href="{{ route('residence', ['subCategoryName' => str_replace('%20', '+', rawurlencode('Résidence Riyad'))]) }}" target="_self" data-ls="offsetyin:40; delayin:2000; clipin:0 0 100% 0; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#222; hovercolor:#aa8453;">
                        <p style="font-weight:500; text-align:center; cursor:pointer; padding-right:35px; padding-left:35px; font-weight: 500; font-size:16px; font-family: 'Sen', sans-serif; line-height:40px; top:550px; left:50%; color:#fff; border-radius:30px; padding-top:10px; padding-bottom:10px; background:#aa8453; white-space:normal;" class="">Trouvez votre appartement idéal</p>
                    </a>
                </div>
        
                <!-- Slide 2 -->
                <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:5000; transition2d:104; kenburnsscale:1.00;">
                    <img width="1920" height="960" src="assets/images/slider/image.png" class="ls-bg" alt="" />
                    <p style="font-size:48px; font-weight:700; top:370px; left:50%; font-family: 'Sen', sans-serif;" class="ls-l ls-hide-phone text-white" data-ls="offsetyin:100%; durationin:1500; delayin:1000; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">Residence Medinova</p>
                    <p style="top:450px; left:50%; text-align:center; font-weight:400; font-style:normal; text-decoration:none; width:650px; font-size:18px; color:#ffffff; line-height:30px; white-space:normal;" class="ls-l ls-hide-phone" data-ls="offsetyin:100%; durationin:1500; delayin:1500; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">Allie modernité et confort pour répondre à toutes vos attentes.</p>
                    <a class="ls-l ls-hide-phone" href="{{ route('residence', ['subCategoryName' => str_replace('%20', '+', rawurlencode('Résidence Medinova'))]) }}" target="_self" data-ls="offsetyin:40; delayin:2000; clipin:0 0 100% 0; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#222; hovercolor:#aa8453;">
                        <p style="font-weight:500; text-align:center; cursor:pointer; padding-right:35px; padding-left:35px; font-weight: 500; font-size:16px; font-family: 'Sen', sans-serif; line-height:40px; top:550px; left:50%; color:#fff; border-radius:30px; padding-top:10px; padding-bottom:10px; background:#aa8453; white-space:normal;" class="">Trouver votre appartement idéal</p>
                    </a>
                </div>
        
            </div>
        </div>
        
        <!--============== Slider Area End ==============-->

        
        <!-- =============== About ================-->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h1 class="text-dark mb-0">Notre mission est de redéfinir l'immobilier pour vous</h1>
                    </div>
                    <div class="col-lg-7">
                        <div class="py-2">
                            <p>
                                Chez <strong>FIMAC Atlantis</strong>, nous transformons votre vision en réalité en proposant des solutions immobilières modernes, fiables et adaptées à vos besoins
                            </p>
                            <p> <strong> Notre objectif est de vous offrir bien plus qu’un logement : </strong>
                                un lieu de vie exceptionnel où confort et qualité se rencontrent </p>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 d-flex justify-content-md-end">
                        <ul class="list-style-tick d-flex flex-column my-2">
                            <li>Only pay when you publish</li>
                            <li>Full featured event app</li>
                            <li>Unlimited featured use</li>
                            <li>24/7 supports</li>
                            <li>Event analytics</li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- =============== About ================-->
        <div class="full-row p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12"><hr></div>
                </div>
            </div>
        </div>

        <!-- =============== Counting ================-->
        {{-- <div class="full-row">
            <div class="container">
                <div class="row row-cols-lg-3 row-cols-1">
                    <div class="col">
                        <div class="d-flex flex-row text-uppercase">
                            <h1 class="text-primary mb-0 pe-4">$15.4M</h1>
                            <p>Owned from <br>Properties Transactions</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-row text-uppercase">
                            <h1 class="text-primary mb-0 pe-4">25K+</h1>
                            <p>Owned from <br>Properties Transactions</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-row text-uppercase">
                            <h1 class="text-primary mb-0 pe-4">500</h1>
                            <p>Owned from <br>Properties Transactions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- =============== Counting ================-->
        <div class="full-row bg-light">
            <div class="container">
                <div class="row">
                    <div class="col mb-4">
                        <div class="align-items-center d-flex">
                            <div class="me-auto">
                                <h2 class="d-table">Découvrez nos appartements à Marrakech</h2>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Center the row content horizontally and ensure the carousel container is centered -->
                <div class="row justify-content-center"> 
                    <div class="col-12">
                        <div class="3block-carusel nav-disable owl-carousel" style="display: flex; justify-content: center;">
                            @foreach($categories as $category)  <!-- Loop through categories -->
                                @foreach($category->subCategories as $subCategory)  <!-- Loop through subcategories -->
                                    @if($subCategory->status == 'active')  <!-- Only display active subcategories -->
                                        <div class="item" style="flex-shrink: 0; margin-right: 10px;"> <!-- Ensure items don't shrink and have space between them -->
                                            <div class="property-grid-2 property-block transation">
                                                <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                                    <div class="cata position-absolute">
                                                        {{-- <span class="sale bg-secondary text-white">For Sale</span> --}}
                                                    </div>
                                                    <a href="{{ route('subCategory.show', ['id' => $subCategory->id]) }}">  
                                                        {{-- {{ route('subcategory.show', $subCategory->id) }} --}}
                                                        <img src="{{ asset($subCategory->image) }}" alt="Image Not Found!" style="width: 100%; height: 400px; object-fit: cover;">
                                                    </a>
                                
                                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                                        <div class="agent">
                                                            <a href="{{ route('subCategory.show', ['id' => $subCategory->id]) }}" class="d-flex text-general align-items-center">
                                                                <img class="rounded-circle me-2" src="{{ asset('assets/images/logo/fimaclogo3.png') }}" alt="avata">
                                                                <span>{{ $subCategory->name }}</span>  <!-- Display the subcategory name -->
                                                            </a>
                                                        </div>
                                                        {{-- <div class="post-date ms-auto"><span>2 Month Ago</span></div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach

                        </div>                        
                    </div>
                </div>                
            </div>
        </div>        
        <!--============== Recent Property Start ==============-->
        <div class="full-row bg-light">
            <div class="container">
                <div class="row">
                    <div class="col mb-4">
                        <div class="align-items-center d-flex">
                            <div class="me-auto">
                                <h2 class="d-table">Nos appartements</h2>
                            </div>
                            <a href="property-grid-v1.html" class="ms-auto btn-link">Tous voir</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="3block-carusel nav-disable owl-carousel">
                            @foreach ($appartements as $appartement)
                                <div class="item">
                                    <!-- Property Grid -->
                                    <div class="property-grid-1 property-block bg-white transation-this">
                                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                            @if ($appartement->images->isNotEmpty())
                                                <a href="{{ route('apartments.show', $appartement->id) }}">
                                                    <img src="{{ asset($appartement->images->first()->image_path) }}" alt="Appartement" style="width: 100%; height: 400px; object-fit: cover;">
                                                </a>
                                            @else
                                                <p>Aucune image disponible.</p>
                                            @endif

                                            <a href="{{ route('apartments.show', $appartement->id) }}" class="listing-ctg text-white" style="background-color: #aa8453; padding-left: 12px; padding-right: 12px;">
                                                <i class="fa-solid fa-building" style="color: white;"></i><span> {{ $appartement->designation }} </span>
                                            </a>

                                            <ul class="position-absolute quick-meta">
                                                <!-- Tu peux ajouter des liens ou des boutons ici -->
                                            </ul>
                                        </div>
                                        <div class="property_text p-4">
                                            <ul class="d-flex quantity font-fifteen justify-content-center align-items-center">
                                                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span> {{ $appartement->sdb > 0 ? 'Oui' : 'Non' }}</li>
                                                <li title="Bathroom"><span><i class="fa-solid fa-toilet"></i></span> {{ $appartement->wc > 0 ? 'Oui' : 'Non' }}</li>                                                                                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span> {{ $appartement->surface }} m²</li>
                                                <li title="Level">
                                                    <span><i class="fa-solid fa-layer-group"></i></span>
                                                    @if($appartement->niveau == 'rdc')
                                                        RDC
                                                    @elseif($appartement->niveau == 'mezzanine')
                                                        Mezzanine
                                                    @elseif($appartement->niveau == '1er_etage')
                                                        1er
                                                    @elseif($appartement->niveau == '2eme_etage')
                                                        2ème
                                                    @elseif($appartement->niveau == '3eme_etage')
                                                        3ème
                                                    @else
                                                        {{ $appartement->niveau }}
                                                    @endif
                                                </li>
                                                
                                                <li title="Kitchen"><span><i class="fa-solid fa-utensils"></i></span> {{ $appartement->cuisine > 0 ? 'Yes' : 'No' }}</li>                                                                                            
                                            </ul>                                                
                                        </div>
                                        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                            <div class="agent">
                                                <a href="{{ route('apartments.show', $appartement->id) }}" class="d-flex text-general align-items-center">
                                                    <img class="rounded-circle me-2" src="{{ asset('assets/images/logo/fimaclogo3.png') }}" alt="avatar">
                                                    <span style="color: #aa8453;">{{ $appartement->subcategory->name }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <!--============== Recent Property End ==============-->

        <!--============== Property Category Start ==============-->
        <div class="full-row bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col mb-5">
                        <h2 class="down-line w-50 mx-auto mb-4 text-center text-white w-sm-100">Ce que vous cherchez ?</h2>
                        <span class="d-table w-50 w-sm-100 sub-title text-white fw-normal mx-auto text-center">Des espaces lumineux, des matériaux de qualité, et une architecture qui reflète l'élégance et la sérénité..</span>
                    </div>
                </div>
                <div class="row row-cols-lg-5 row-cols-sm-4 row-cols-1 g-3 justify-content-center">
                    <div class="col">
                        <a href="#" class="text-center d-flex flex-column align-items-center hover-text-white p-4 bg-white transation text-general hover-bg-primary h-100">
                            <div class="box-70px position-relative">
                                <i class="flaticon-home flat-medium d-inline-block text-primary position-absolute xy-center"></i>
                            </div>
                            <h6 class="d-block text-secondary">Maison d'habitation</h6>
                            <p>Aperçu des propriétés résidentielles : maisons d'habitation</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="text-center d-flex flex-column align-items-center hover-text-white p-4 bg-white transation text-general hover-bg-primary h-100">
                            <div class="box-70px position-relative">
                                <i class="flaticon-sketch-1 flat-medium d-inline-block text-primary position-absolute xy-center"></i>
                            </div>
                            <h6 class="d-block text-secondary">Terrain solide</h6>
                            <p>Terrains exploitables dans des zones populaires pour le développement</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="text-center d-flex flex-column align-items-center hover-text-white p-4 bg-white transation text-general hover-bg-primary h-100">
                            <div class="box-70px position-relative">
                                <i class="flaticon-online-booking flat-medium d-inline-block text-primary position-absolute xy-center"></i>
                            </div>
                            <h6 class="d-block text-secondary">Bureaux</h6>
                            <p>Aperçu des catégories populaires de bâtiments de bureaux</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="text-center d-flex flex-column align-items-center hover-text-white p-4 bg-white transation text-general hover-bg-primary h-100">
                            <div class="box-70px position-relative">
                                <i class="flaticon-shop flat-medium d-inline-block text-primary position-absolute xy-center"></i>
                            </div>
                            <h6 class="d-block text-secondary">Commercial</h6>
                            <p>Propriétés commerciales pour entreprises et usines</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="text-center d-flex flex-column align-items-center hover-text-white p-4 bg-white transation text-general hover-bg-primary h-100">
                            <div class="box-70px position-relative">
                                <i class="flaticon-online-booking flat-medium d-inline-block text-primary position-absolute xy-center"></i>
                            </div>
                            <h6 class="d-block text-secondary">Appartement</h6>
                            <p>Trouvez les meilleurs appartements pour la vie en famille dans notre annuaire</p>
                        </a>
                    </div>
                </div>                
            </div>
        </div>
        <!--============== Property Category End ==============-->

        <!--============== Property Agent Start ==============-->
        {{-- <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="align-items-center d-flex">
                            <div class="me-auto">
                                <h2 class="d-table">Our Listed Property Agents</h2>
                            </div>
                            <a href="property-grid-v1.html" class="ms-auto btn-link">View All Agents</a>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 mt-5">
                    <div class="col">
                        <div class="thumb-team-simple">
                            <img class="rounded-lg" src="assets/images/team/1.jpg" alt="">
                            <div class="user-info d-flex py-4">
                                <div class="me-auto">
                                    <h5 class="text-dark mb-2 font-400"><a href="#">Luann McLawhorn</a></h5>
                                    <span class="text-secondary font-fifteen">At 1st April, 2012</span>
                                </div>
                                <div class="member-score font-small bg-primary d-table text-white ms-auto">
                                    <span>Score: 4.50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="thumb-team-simple">
                            <img class="rounded-lg" src="assets/images/team/2.jpg" alt="">
                            <div class="user-info d-flex py-4">
                                <div class="me-auto">
                                    <h5 class="text-dark mb-2 font-400"><a href="#">Ronald Johnson</a></h5>
                                    <span class="text-secondary font-fifteen">At 1st April, 2012</span>
                                </div>
                                <div class="member-score font-small bg-primary d-table text-white ms-auto">
                                    <span>Score: 5.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="thumb-team-simple">
                            <img class="rounded-lg" src="assets/images/team/3.jpg" alt="">
                            <div class="user-info d-flex py-4">
                                <div class="me-auto">
                                    <h5 class="text-dark mb-2 font-400"><a href="#">John M. Riddle</a></h5>
                                    <span class="text-secondary font-fifteen">At 1st April, 2012</span>
                                </div>
                                <div class="member-score font-small bg-primary d-table text-white ms-auto">
                                    <span>Score: 5.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="thumb-team-simple">
                            <img class="rounded-lg" src="assets/images/team/4.jpg" alt="">
                            <div class="user-info d-flex py-4">
                                <div class="me-auto">
                                    <h5 class="text-dark mb-2 font-400"><a href="#">John M. Riddle</a></h5>
                                    <span class="text-secondary font-fifteen">At 1st April, 2012</span>
                                </div>
                                <div class="member-score font-small bg-primary d-table text-white ms-auto">
                                    <span>Score: 4.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--============== Property Agent End ==============-->

        <!--============== Data Counting Start ==============-->
        {{-- <div class="full-row p-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="fact-counter bg-secondary pt-5 pb-4 rounded">
                            <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1">
                                <div class="col">
                                    <div class="mb-30 text-center count wow fadeIn animate" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeIn;">
                                        <span class="count-num text-primary h2" data-speed="3000" data-stop="310">3210</span>
                                        <h5 class="text-white font-400 pt-2">Listed Property</h5>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-30 text-center count wow fadeIn animate" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeIn;">
                                        <span class="count-num text-primary h2" data-speed="3000" data-stop="51">51</span>
                                        <h5 class="text-white font-400 pt-2">Mega Project</h5>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-30 text-center count wow fadeIn animate" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeIn;">
                                        <span class="count-num text-primary h2" data-speed="3000" data-stop="25">25</span>
                                        <h5 class="text-white font-400 pt-2">Awards Won</h5>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-30 text-center count wow fadeIn animate" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeIn;">
                                        <span class="count-num text-primary h2" data-speed="3000" data-stop="2130">2130</span>
                                        <h5 class="text-white font-400 pt-2">Happy Clients</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--============== Data Counting End ==============-->

        <!--============== Testimonial Section Start ==============-->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col mb-5">
                        <span class="text-primary tagline pb-2 d-table m-auto"> Là où vos rêves prennent vie à Marrakech</span>
                        <h2 class="down-line w-50 mx-auto mb-4 text-center w-sm-100"> A Propos de nous </h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="testimonial-simple text-center px-5">
                            <div class="text-carusel owl-carousel">
                                <div class="item">
                                    <i class="flaticon-right-quote flat-large text-primary d-table mx-auto"></i>
                                    <blockquote class="text-secondary fs-5 fst-italic">“ Entreprise  immobilière basée à Marrakech, Fimac Atlantis se consacre à la création de lieux de vie uniques, alliant élégance, modernité et confort. Forte de son engagement envers l’excellence, la société développe des projets immobiliers qui répondent aux besoins des résidents les plus exigeants. ”</blockquote>
                                    {{-- <h4 class="mt-4 font-400">Mark Wiggins</h4>
                                    <span class="text-primary font-fifteen">CEO ( Grodins Group )</span> --}}
                                </div>
                                {{-- <div class="item">
                                    <i class="flaticon-right-quote flat-large text-primary d-table mx-auto"></i>
                                    <blockquote class="text-secondary fs-5 fst-italic">“ Posuere mus curabitur parturient scelerisque suspendisse elementum facilisis dignissim non purus torquent turpis interdum hendrerit erat ultrices pretium risus elementum. Fringilla aliquet mattis lacinia quam a montes maecenas parturient urna varius. Sollicitudin pede sapien taciti dui. ”</blockquote>
                                    <h4 class="mt-4 font-400">Mark Wiggins</h4>
                                    <span class="text-primary font-fifteen">CEO ( Grodins Group )</span>
                                </div>
                                <div class="item">
                                    <i class="flaticon-right-quote flat-large text-primary d-table mx-auto"></i>
                                    <blockquote class="text-secondary fs-5 fst-italic">“ Posuere mus curabitur parturient scelerisque suspendisse elementum facilisis dignissim non purus torquent turpis interdum hendrerit erat ultrices pretium risus elementum. Fringilla aliquet mattis lacinia quam a montes maecenas parturient urna varius. Sollicitudin pede sapien taciti dui. ”</blockquote>
                                    <h4 class="mt-4 font-400">Mark Wiggins</h4>
                                    <span class="text-primary font-fifteen">CEO ( Grodins Group )</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Testimonial Section End ==============-->

        <!--============== Recent Property Start ==============-->
        {{-- <div class="full-row bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col mb-5">
                        <h2 class="down-line text-white w-50 mx-auto text-center w-sm-100">Appartements  les Plus Populaires</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="3block-carusel nav-disable owl-carousel">
                            <div class="item">
                                <!-- Property Grid -->
                                <div class="property-grid-1 property-block bg-white transation-this">
                                    <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute"><span class="sale bg-secondary text-white">For Sale</span></div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-1.png" alt="Image Not Found!"></a>
                                        <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Apartment</span></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="property_text p-4">
                                        <span class="listing-price">$1850<small> ( Monthly )</small></span>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Family House Residense</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 4213 South Burlington, VT 05403 </span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                        <div class="agent">
                                            <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                        </div>
                                        <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Property Grid -->
                                <div class="property-grid-1 property-block bg-white transation-this">
                                    <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute">
                                            <span class="sale bg-secondary text-white">For Sale</span>
                                            <span class="featured bg-primary text-white">Featured</span>
                                        </div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-2.png" alt="Image Not Found!"></a>
                                        <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condo</span></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="property_text p-4">
                                        <span class="listing-price">$120,5500<small> ( One Time )</small></span>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Luxury Condos Riverside</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 Frog Lane Overlandpk, MO 66210</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                        <div class="agent">
                                            <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                        </div>
                                        <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Property Grid -->
                                <div class="property-grid-1 property-block bg-white transation-this">
                                    <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute">
                                            <span class="sale bg-secondary text-white">For Rent</span>
                                        </div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-3.png" alt="Image Not Found!"></a>
                                        <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Villa</span></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="property_text p-4">
                                        <span class="listing-price">$3450<small> ( Monthly )</small></span>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Gorgeous Villa Bay View</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 Frog Lane Overlandpk, MO 66210</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                        <div class="agent">
                                            <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                        </div>
                                        <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Property Grid -->
                                <div class="property-grid-1 property-block bg-white transation-this">
                                    <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute">
                                            <span class="sale bg-secondary text-white">For Rent</span>
                                        </div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-4.png" alt="Image Not Found!"></a>
                                        <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condo</span></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="property_text p-4">
                                        <span class="listing-price">$1,0450<small> ( Monthly )</small></span>
                                        <h5 class="listing-title"><a href="property-single-v1.html">New Developed Condos</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 Frog Lane Overlandpk, MO 66210</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                        <div class="agent">
                                            <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                        </div>
                                        <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Property Grid -->
                                <div class="property-grid-1 property-block bg-white transation-this">
                                    <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute"><span class="sale bg-secondary text-white">For Sale</span></div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-1.png" alt="Image Not Found!"></a>
                                        <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Apartment</span></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="property_text p-4">
                                        <span class="listing-price">$1850<small> ( Monthly )</small></span>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Family House Residense</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 4213 Avenue South Burlington, VT 05403 </span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                        <div class="agent">
                                            <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                        </div>
                                        <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Property Grid -->
                                <div class="property-grid-1 property-block bg-white transation-this">
                                    <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                        <div class="cata position-absolute">
                                            <span class="sale bg-secondary text-white">For Sale</span>
                                            <span class="featured bg-primary text-white">Featured</span>
                                        </div>
                                        <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-2.png" alt="Image Not Found!"></a>
                                        <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condos</span></a>
                                        <ul class="position-absolute quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="property_text p-4">
                                        <span class="listing-price">$100,8850<small> ( One Time )</small></span>
                                        <h5 class="listing-title"><a href="property-single-v1.html">Luxury Condos</a></h5>
                                        <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 Frog Lane Overlandpk, MO 66210</span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                            <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                            <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
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
        </div> --}}
        <!--============== Recent Property End ==============-->

        <!--============== Blog Section Start ==============-->
        <div class="full-row bg-light">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="down-line w-50 w-sm-100 mx-auto text-center mb-5">Exprimez ce que nous pensons, partagez ce que nous faisons.</h2>
                    </div>
                </div>
                
            </div>
        </div>
        <!--============== Blog Section End ==============-->

        <!--============== Register Section Start ==============-->
        {{-- <div class="full-row bg-primary py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <h3 class="text-white xs-text-center my-20 font-400">Are you looking for a House or Property Customer?</h3>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <a href="#" class="btn btn-white y-center position-relative d-table xs-mx-auto ms-auto">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--============== Register Section End ==============-->
@include('footer')
