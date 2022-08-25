<section id="index__contact" class="container">
  <h2>Contact</h2>
  <form action="contactPost" method="POST" id="contact-form">
    <div class="container">

      <?php if (isset($error)) :
        if ($error) :
          foreach ($error as $e) :
      ?>
        <p class="msg-error"><?= $e ?></p>
      <?php endforeach; endif; endif;?>

      <div class="form__group">
        <label for="nom">Nom</label>
        <input type="text" name="name" id="nom" required>
      </div>
      <div class="form__group">
        <label for="ville">Ville</label>
        <input type="text" name="town" id="ville" required>
      </div>
      <div class="form__group">
        <label for="mail">Email</label>
        <input type="email" name="email" id="mail" required>
      </div>
      <div class="form__group">
        <label for="tel">Téléphone</label>
        <input type="tel" name="phone" id="tel" pattern="^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$" required>
      </div>
      <div class="form__group">
        <label for="content">Message</label>
        <textarea name="message" id="content" cols="30" rows="10" required></textarea>
      </div>
        <input class="button__form" type="submit" value="Envoyer">
    </div>
  </form>
</section>