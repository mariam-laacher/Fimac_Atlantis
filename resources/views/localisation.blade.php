<title>Fimac Atlantis - Nos localisation</title>
@include('header2')
<style>
body {
    margin-top: 80px; /* Ajustez selon la hauteur réelle de votre header */
}

</style>
<!--============== Section Localisation ==============-->
<div class="container my-5" style="margin-top: 100px;">
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
                  <h3 class="mb-4 text-primary">Contact Info</h3>
                  <div class="mb-3">
                      <i class="fas fa-map-marker-alt text-danger me-2"></i>
                      <strong>Adresse :</strong> Citrine A immeuble 8 bureau 3 1er étage
                  </div>
                  <div class="mb-3">
                      <i class="fas fa-phone-alt text-success me-2"></i>
                      <strong>Téléphone :</strong> +212 660-114297
                  </div>
                  <div class="mb-3">
                      <i class="fas fa-envelope text-warning me-2"></i>
                      <strong>Email :</strong> 
                      <a href="mailto:fimac.atlantis@gmail.com">fimac.atlantis@gmail.com</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!--============== Section Localisation Fin ==============-->

@include('footer')
