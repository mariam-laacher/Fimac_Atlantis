<title>Fimac Atlantis - Nos localisation</title>
@include('header2')

<div class="full-row py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {{-- <h3 class="text-secondary"> Nos localisation </h3> --}}
            </div>
        </div>
    </div>
</div>

<!--============== Section Localisation ==============-->
<div class="full-row pt-0">
    <div class="container">
        <div class="row align-items-center">
            <!-- Carte Google Maps -->
            <div class="col-lg-7">
                <div class="card shadow-sm">
                    <div class="card-body p-0">
                        <iframe 
                            class="gmap_iframe w-100" 
                            frameborder="0" 
                            scrolling="no" 
                            style="height: 400px;" 
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Citrine A immeuble 8&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Informations de Contact -->
            <div class="col-lg-5">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="mb-4 text-primary">Information du bureau :</h3>
                        <div class="mb-3">
                            <i class="fas fa-map-marker-alt text-danger me-2"></i>
                            <strong>Adresse :</strong> Citrine A immeuble 8 bureau 3 1er étage
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-phone-alt text-success me-2"></i>
                            <strong>Téléphone :</strong> 
                            <a href="https://wa.me/212660114297" target="_blank">+212 660-114297</a>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-envelope text-warning me-2"></i>
                            <strong>Email :</strong> 
                            <a href="mailto:fimac.atlantis@gmail.com">fimac.atlantis@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Fin de la row align-items-center -->
    </div> <!-- Fin de container -->
</div> <!-- Fin de full-row -->


<!--============== Section Localisation Fin ==============-->
<!--============== Section Localisation 2 debut  ==============-->

<div class="full-row bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col mb-5">
                <h2 class="down-line w-50 mx-auto mb-4 text-center text-white w-sm-100">À proximité de</h2>
            </div>
        </div>
        <div class="row row-cols-lg-5 row-cols-sm-4 row-cols-1 g-3 justify-content-center">
            <!-- Bab Doukkala -->
            <div class="col">
                <a href="#" class="text-center d-flex flex-column align-items-center hover-text-white p-4 bg-white transation text-general hover-bg-primary h-100">
                    <div class="box-70px position-relative">
                        <i class="fas fa-bus flat-medium d-inline-block text-primary position-absolute xy-center"></i>
                    </div>
                    <h6 class="d-block text-secondary">Bab Doukkala</h6>
                    <p>- 10 min</p>
                </a>
            </div>

            <!-- Jamaa El Fna -->
            <div class="col">
                <a href="#" class="text-center d-flex flex-column align-items-center hover-text-white p-4 bg-white transation text-general hover-bg-primary h-100">
                    <div class="box-70px position-relative">
                        <i class="fas fa-mosque flat-medium d-inline-block text-primary position-absolute xy-center"></i>
                    </div>
                    <h6 class="d-block text-secondary">Jamaa El Fna</h6>
                    <p>- 15 min</p>
                </a>
            </div>

            <!-- Guéliz -->
            <div class="col">
                <a href="#" class="text-center d-flex flex-column align-items-center hover-text-white p-4 bg-white transation text-general hover-bg-primary h-100">
                    <div class="box-70px position-relative">
                        <i class="fas fa-city flat-medium d-inline-block text-primary position-absolute xy-center"></i>
                    </div>
                    <h6 class="d-block text-secondary">Guéliz</h6>
                    <p>- 15 min</p>
                </a>
            </div>
        </div>                
    </div>
</div>

<!--===
@include('footer')
