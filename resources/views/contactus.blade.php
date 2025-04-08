<title>Fimac Atlantis - Contactez-nous</title>
@include('header2')

<!--============== Page Title Section ==============-->
<div class="full-row py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-secondary">Contact</h3>
            </div>
        </div>
    </div>
</div>
<!--============== Page Title End ==============-->

<!--============== Contact Section Start ==============-->
<div class="full-row">
    <div class="container">
        <div class="row">
            <!-- Contact Information -->
            <div class="col-md-5 order-md-2">
                <h4 class="down-line mb-4">Vous souhaitez obtenir plus d'informations ?</h4>
                <p>
                    Découvrez nos programmes immobiliers neufs et laissez nos conseillers commerciaux vous guider à chaque étape de votre projet d'achat immobilier.
                </p>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <h6 class="mb-1 text-primary">Adresse :</h6>
                        Citrine A immeuble 8 bureau 3 1er étage
                    </li>
                    <li class="mb-3">
                        <a href="https://wa.me/212660114297" target="_blank">

                        <h6 class="mb-1 text-primary">Numéro mobile :</h6>
                        +212 660-114297 </a>
                    </li>
                    <li class="mb-3">
                        <h6 class="mb-1 text-primary">Numéro fixe :</h6>
                        +212 525-932933
                    </li>
                    <li class="mb-3">
                        <h6 class="mb-1 text-primary">Adresse mail :</h6>
                        <a href="mailto:fimac.atlantis@gmail.com">fimac.atlantis@gmail.com</a>
                    </li>
                </ul>
            </div>
            <!-- Contact Form -->
            <div class="col-md-7 order-md-1">
                <h4 class="down-line mb-4">Prendre un rendez-vous</h4>
                <p class="mb-4">
                    Remplissez ce formulaire, et nous vous contacterons pour vous guider au mieux dans votre projet.
                </p>
                <form id="contact-form" action="{{ route('contact.send') }}" method="post" novalidate>
                    @csrf
                    <div class="row">
                        <!-- Nom et Prénom -->
                        <div class="col-md-6 mb-3">
                            <label class="mb-2">Nom et Prénom :</label>
                            <input type="text" class="form-control" name="name" placeholder="Entrez votre nom complet" required>
                        </div>
                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label class="mb-2">Adresse mail :</label>
                            <input type="email" class="form-control" name="email" placeholder="Votre email" required>
                        </div>
                        <!-- Téléphone -->
                        <div class="col-md-12 mb-3">
                            <label class="mb-2">Numéro de téléphone :</label>
                            <input type="tel" class="form-control" name="phone" placeholder="Votre numéro de téléphone" required>
                        </div>
                        <!-- Message -->
                        <div class="col-md-12 mb-3">
                            <label class="mb-2">Message :</label>
                            <textarea class="form-control" name="message" rows="6" placeholder="Votre message" required></textarea>
                        </div>
                        <!-- Bouton d'envoi -->
                        <div class="col-md-12">
                            <button class="btn btn-primary w-100" type="submit">Envoyer votre message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--============== Contact Section End ==============-->

@include('footer')
