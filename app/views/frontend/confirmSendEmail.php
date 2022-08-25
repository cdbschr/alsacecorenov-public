<?php $title = "Confirmation d'envoi de mail"; $description = "Alsac'Eco Renov - Mail bien envoyé "; ob_start();
header('Refresh: 20; URL=/'); ?>

<div class="confirm">
  <h1>Votre mail a été envoyé avec succès !</h1>
  <p>Vous allez être rediriger automatiquement sur le site.</p>

  <a class="button "href="/">Retourner immédiatement sur le site</a>
</div>

<?php $content = ob_get_clean(); require_once 'app/views/frontend/templates/template.php'; ?>