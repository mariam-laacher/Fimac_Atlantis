<div style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 30px;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        
        <!-- Logo -->
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="{{ asset('assets/images/logo/fimaclogo3.png') }}" alt="Logo Fimac Atlantis" style="max-width: 150px;">
        </div>

        <!-- Titre -->
        <h2 style="color: #bfa046; text-align: center;">📩 Nouveau message de prise de rendez-vous</h2>
        <hr style="border: none; height: 2px; background-color: #bfa046; margin: 20px 0;">

        <!-- Détails du message -->
        <p><strong>👤 Nom :</strong> {{ $data['name'] }}</p>
        <p><strong>✉️ Email :</strong> {{ $data['email'] }}</p>
        <p><strong>🏢 Appartement sélectionné :</strong> {{ $data['appartement']->designation }}</p>
        <p><strong>📞 Téléphone :</strong> {{ $data['phone'] }}</p>
        <p><strong>📝 Message :</strong>{{ $data['message'] }}</p>

        <hr style="border: none; height: 1px; background-color: #e0e0e0; margin: 30px 0;">

        <!-- Bouton -->
        <div style="text-align: center;">
            <a href="https://fimacatlantis.com/" 
               style="background-color: #bfa046; color: #ffffff; padding: 12px 25px; border-radius: 5px; text-decoration: none; font-weight: bold;">
                🔗 Visiter notre site
            </a>
        </div>

        
    </div>
</div>
