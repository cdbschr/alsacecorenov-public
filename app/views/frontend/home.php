<?php $title = "Accueil"; $description = "Votre artisan multi-services sur Dettwiller, Saverne"; ob_start(); ?>

<main>
  <section id="index__pres" class="container">
    <div>
      <h1>ALSAC<span>ECO</span><span>RENOV</span></h1>
      <h2>Multi-services</h2>
    </div>
    <div>
      <div>
        <p><strong>Alsac’Eco Renov</strong> est une <strong>entreprise de rénovation générale</strong> située à <strong>Dettwiller non loin de Saverne</strong> dans le <strong>département du Bas-Rhin (67)</strong>.</p>
        <p><strong>Alsac’Eco Renov</strong> ce sont <strong>des compétences variées au service de tous vos projets de rénovation</strong>.</p>
        <p>Le savoir-faire d'<strong>Alsac’Eco Renov</strong> couvre tous les corps de métiers : <strong>plâtrerie / isolation, électricité, plomberie, pose de carrelage, salle de bains, terrasse, pavages, aménagement de combles, bardage bois, travaux de maçonnerie, création de bassin de jardin, création de gazon, création paysagère...</strong></p>
        <p>Nous vous proposons de découvrir nos services ainsi que quelques unes de <strong><a title="Entreprise de rénovation Saverne (67)" href="/#index__realisations">nos réalisations</a></strong> sur différents chantiers.</p>
        <p>Avec <strong>Alsac’Eco Renov</strong> vous disposez d'un interlocuteur unique, qualifié et expérimenté, de l'élaboration de votre projet jusqu'à sa finalisation complète.</p>
        <p>Une question ? Un renseignement ?</p>
        <p>N'hésitez pas à nous contacter par téléphone au <a href="tel:+33767085497"><strong>07.67.08.54.97</strong></a> ou via <a title="Contacter Alsac’Eco Renov, rénovation Saverne (67)" href="/#index__contact"><strong>notre formulaire de contact</strong></a>.</p>
        <p><strong>Alsac’Eco Renov</strong> intervient pour la réalisation de tous vos <strong>travaux de rénovation</strong> dans la région<strong> Alsace (67/68)</strong> que vous résidiez à <strong>Dettwiller, Saverne, Steinbourg, Marmoutier, Hochfelden, Bouxwiller, Val-de-Moder, Brumath, Phalsbourg, Sarrebourg, Drulingen, Wasselonne, Ingwiller...</strong></p>
        <a href="/#index__contact" class="button">Demande de devis gratuit</a>
      </div>
      <img src="public/img/accueil.jpg" alt="maison alsacecorenov saverne">
    </div>
  </section>
  <section id="index__services" class="container">
    <h2>Services</h2>
    <ul>
      <li>
        <h3>Isolation</h3>
        <img src="public/img/icons/icon_tools.svg" alt="outils alsacecorenov saverne">
      </li>
      <li>
        <h3>Création paysagère</h3>
        <img src="public/img/icons/icon_house.svg" alt="maison alsacecorenov saverne">
      </li>
      <li>
        <h3>Électricité</h3>
        <img src="public/img/icons/icon_toolbox.svg" alt="boite à outils alsacecorenov saverne">
      </li>
    </ul>
  </section>
  <section id="index__realisations" class="container">
    <h2>Réalisations</h2>
    <article>
      <h3>Rénovation</h3>
      <div class="slider slider--1">
        <div class="slider__before"></div>
        <div class="slider__separator"></div>
        <div class="slider__after"></div>
        <input class="slider__range" type="range" min="0" max="100" value="50">
      </div>
    </article>
    <article>
      <h3>Pavage</h3>
      <div class="slider slider--2">
        <div class="slider__before"></div>
        <div class="slider__separator"></div>
        <div class="slider__after"></div>
        <input class="slider__range" type="range" min="0" max="100" value="50">
      </div>
    </article>
  </section>
  <?php require_once 'app/views/frontend/templates/form_contact.php'; ?>
</main>

<?php $content = ob_get_clean(); require_once 'app/views/frontend/templates/template.php'; ?>