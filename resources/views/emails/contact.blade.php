<div style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 30px;">
    <div style="background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        <h2 style="color: #343a40;">📩 Nouveau message de prise de rendez-vous</h2>
        <hr style="margin: 20px 0;">

        <p><strong>👤 Nom :</strong> {{ $data['name'] }}</p>
        <p><strong>✉️ Email :</strong> {{ $data['email'] }}</p>
        <p><strong>📞 Téléphone :</strong> {{ $data['phone'] }}</p>
        <p><strong>📝 Message :</strong><br>{{ $data['message'] }}</p>

        <hr style="margin: 30px 0;">
        <p style="font-size: 12px; color: #6c757d;">Cet email a été généré automatiquement depuis votre site web.</p>
    </div>
</div>
