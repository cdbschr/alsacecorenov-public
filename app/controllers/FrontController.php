<?php

namespace Aer\controllers;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once 'Controller.php';
require_once "vendor/phpmailer/phpmailer/src/Exception.php";
require_once "vendor/phpmailer/phpmailer/src/PHPMailer.php";
require_once "vendor/phpmailer/phpmailer/src/SMTP.php";

class FrontController extends Controller
{

  public function home(): void
  {
    require_once $this->viewFrontend('home');
  }

  public function rgpd(): void
  {
    require_once $this->viewFrontend('rgpd');
  }

  public function mentionslegales(): void
  {
    require_once $this->viewFrontend('mentionslegales');
  }

  public function contactPost($name, $town, $email, $phone, $message)
  {
    extract($_POST);
    $error = [];

    if (!empty($name) || !empty($town) || !empty($email) || !empty($phone) || !empty($message)) {
      $error[] = "Tous les champs sont requis !";

      if (isset($_POST['email'])) {
        $mailClient = new PHPMailer(true);
        $mailAER = new PHPMailer(true);
        try {
          // ---- Paramètres envoi mail ----
          // $mailClient->SMTPDebug = 2;
          // $mailAER->SMTPDebug = 2;
          $mailClient->isSMTP();
          $mailClient->SMTPAuth = true;
          $mailClient->Host = $_ENV['MAILER_HOST'];

          $mailClient->Port = 465;
          $mailClient->Username = $_ENV['MAILER_USERNAME'];
          $mailClient->Password = $_ENV['MAILER_PASSWORD'];
          $mailClient->SMTPSecure = 'ssl';

          $mailAER->isSMTP();
          $mailAER->SMTPAuth = true;
          $mailAER->Host = $_ENV['MAILER_HOST'];
          $mailAER->Port = 465;
          $mailAER->Username = $_ENV['MAILER_USERNAME'];
          $mailAER->Password = $_ENV['MAILER_PASSWORD'];
          $mailAER->SMTPSecure = 'ssl';
          
          // Mail pour l'utilisateur
          $mailClient->Charset = 'utf-8';
          // $mailClient->Encoding = 'base64';
          $mailClient->setLanguage('fr', '/optional/path/to/language/directory/');
          $mailClient->addAddress($_POST['email']);
          $mailClient->setFrom('no-reply@alsacecorenov.com', 'Alsac\'Eco Renov');
          $mailClient->isHTML();
          $mailClient->Subject = 
            utf8_decode("Alsac'EcoRenov - Votre demande de contact");
          $mailClient->Body =
            utf8_decode("Bonjour, votre demande a bien été envoyée. Elle est prise en compte par notre équipe. <br> Merci de ne pas répondre à cet email");
          $mailClient->send();

          // Mail pour l'équipe
          $mailAER->Charset = 'utf-8';
          // $mailAER->Encoding = 'base64';
          $mailAER->setLanguage('fr', '/optional/path/to/language/directory/');
          $mailAER->addAddress($_ENV['MAILER_USERNAME']);
          $mailAER->setFrom($_POST['email']);

          $mailAER->isHTML();
          $mailAER->Subject = 
            utf8_decode($_POST['name'] . " vous a contacté via le formulaire de contact");
          $mailAER->Body =
            utf8_decode("Nom : " . $_POST['name']
            . "<br>" .
            "Ville : " . $_POST['town']
            . "<br>" .
            "Email : " . $_POST['email']
            . "<br>" .
            "Téléphone : " . $_POST['phone']
            . "<br>" .
            "Message : " . "<br>" . $_POST['message']);
          $mailAER->send();

        } catch (Exception $e) {
          echo "Message non envoyé. Mailer Error: " . $mailClient->ErrorInfo;
          echo "Message non envoyé. Mailer Error: " . $mailAER->ErrorInfo;
        }
      }

      require 'app/views/frontend/confirmSendEmail.php';
    
      } else {
      require $this->viewFrontend('home');
      return $error;
    }
}}