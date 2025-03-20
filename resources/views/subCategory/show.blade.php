<title>Fimac Atlantis - {{ $subCategory->name }}</title>
@include('header2')

<!--============== Page title Start ==============-->
<div class="full-row py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-secondary">{{ $subCategory->name }}</h3>
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
                        <h5 class="text-secondary mb-4">Propriété récente</h5>
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
            </div>

            <div class="col-xl-8 col-lg-7">
                <div class="row row-cols-xl-2 row-cols-lg-1 row-cols-md-2 row-cols-1 g-4">
                    @foreach($apartments as $apartment)
                        <div class="col">
                            <div class="property-grid-5 property-block rounded border transation-this bg-white hover-shadow">
                                <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                    <a href="{{ route('apartments.show', $apartment->id) }}" class="listing-ctg text-white"><span>{{ $apartment->designation }}</span></a>
                                    <a href="{{ route('apartments.show', $apartment->id) }}"><img src="{{ asset($apartment->images->first()->image_path) }}" alt="Image Not Found!" style="width: 100%; height: 300px; object-fit: cover;"></a>
                                    {{-- <ul class="position-absolute quick-meta">
                                        <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                        <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                        <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                    </ul> --}}
                                </div>
                                <div class="property_text p-3">
                                    <h5 class="listing-title"><a href="{{ route('apartments.show', $apartment->id) }}">{{ $apartment->designation }}</a></h5>
                                    <ul class="d-flex quantity font-fifteen justify-content-center align-items-center">
                                        <li title="Bains"><span><i class="fa-solid fa-shower"></i></span> {{ $apartment->sdb > 0 ? 'Oui' : 'Non' }}</li>
                                        <li title="Toilettes"><span><i class="fa-solid fa-toilet"></i></span> {{ $apartment->wc > 0 ? 'Oui' : 'Non' }}</li>
                                        <li title="Surface"><span><i class="fa-solid fa-vector-square"></i></span> {{ $apartment->surface }} m²</li>
                                        <li title="Niveau">
                                            <span><i class="fa-solid fa-layer-group"></i></span>
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
                                        </li>    
                                        <li title="Cuisine"><span><i class="fa-solid fa-utensils"></i></span> {{ $apartment->cuisine > 0 ? 'Oui' : 'Non' }}</li>
                                    </ul>
                                    {{-- <div class="agent">
                                        <ul class="d-flex justify-content-between">
                                            <li><span>Realtors</span><div class="text-dark">{{ $apartment->realtor }}</div></li>
                                            <li><span>Status</span><div class="text-dark">{{ $apartment->status }}</div></li>
                                            <li><span>Time</span><div class="text-dark">{{ $apartment->created_at->format('m/d/Y') }}</div></li>
                                        </ul>
                                    </div> --}}
                                    <div class="entry-footer">
                                        <span class="listing-price"><small> {{ $subCategory->name }} </small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination (si nécessaire) -->
                <div class="row">
                    <div class="col mt-5">
                        {{ $apartments->links() }} <!-- Si vous avez activé la pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============== Property Grid View End ==============-->

@include('footer')
