<?php $title = "Oups"; $description = ""; ob_start(); ?>

<div class="error">
  <h1>Oups, voilà qui n'était pas prévu</h1>
  <p>Désolé mais ce lien est introuvable ! Dirigez-vous vers la page d'accueil.</p>

  <a class="button" href="/">Retourner sur la page d'accueil</a>
</div>

<?php $content = ob_get_clean(); require_once 'app/views/frontend/templates/template.php'; ?>