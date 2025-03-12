<title>Fimac Atlantis - Residences </title>
@include('header2')

 <!--============== Page title Start ==============-->
 <div class="full-row py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-secondary">Residences  </h3>
                
            </div>
        </div>
    </div>
</div>
<!--============== Page title End ==============-->

<!--============== Property Grid View Start ==============-->
<div class="full-row pt-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="listing-sidebar">
                    
                    

                    <!--============== Recent Property Widget Start ==============-->
                    <div class="widget widget_recent_property">
                        <h5 class="text-secondary mb-4">Recent Property</h5>
                        <ul>
                            <li>
                                <img src="assets/images/thumbnaillist/01.jpg" alt="">
                                <div class="thumb-body">
                                    <h6 class="listing-title"><a href="property-single-1.html">Nirala Appartment</a></h6>
                                    <span class="listing-price">$3200<small>( Monthly )</small></span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>6500 Sqft</li>

                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/thumbnaillist/02.jpg" alt="">
                                <div class="thumb-body">
                                    <h6 class="listing-title"><a href="property-single-1.html">Condo House</a></h6>
                                    <span class="listing-price">$11500<small>( Monthly )</small></span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>2200 Sqft</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/thumbnaillist/03.jpg" alt="">
                                <div class="thumb-body">
                                    <h6 class="listing-title"><a href="property-single-1.html">Luxury Condos</a></h6>
                                    <span class="listing-price">$17000<small>( Monthly )</small></span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>3500 Sqft</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/thumbnaillist/04.jpg" alt="">
                                <div class="thumb-body">
                                    <h6 class="listing-title"><a href="property-single-1.html">Small Appartment</a></h6>
                                    <span class="listing-price">$5200<small>( Monthly )</small></span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--============== Recent Property Widget End ==============-->
                </div>
            </div>

            <div class="col-xl-8 col-lg-7">
               
                <div class="row row-cols-xl-2 row-cols-lg-1 row-cols-md-2 row-cols-1 g-4">
                    <div class="col">
                        <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                            <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                <a href="#" class="listing-ctg text-white"><span>Condo</span></a>
                                <a href="property-single-v1.html"><img src="assets/images/property_grid/property-grid-2.png" alt="Image Not Found!"></a>
                                <ul class="position-absolute quick-meta">
                                    <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                    <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                    <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                </ul>
                            </div>
                            <div class="property_text p-3">
                                <h5 class="listing-title"><a href="property-single-v1.html">Condos Infront of River</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 3 Industrial Road, Boston, MA 5502, USA</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7 Bed</li>
                                    <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5 Bath</li>
                                    <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                    <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                </ul>
                                <div class="agent">
                                    <ul class="d-flex justify-content-between">
                                        <li><span>Realtors</span><div class="text-dark">Albart Rone</div></li>
                                        <li><span>Status</span><div class="text-dark">For Sell</div></li>
                                        <li><span>Time</span><div class="text-dark">7/4/2021</div></li>
                                    </ul>
                                </div>
                                <div class="entry-footer">
                                    <span class="listing-price">$1221850<small>( Only )</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col mt-5">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-dotted-active justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link">Previous Page</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next Page</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============== Property Grid View End ==============-->

@include('footer')