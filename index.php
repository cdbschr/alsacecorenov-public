<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once './app/controllers/FrontController.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

try {
  $frontController = new \Aer\controllers\FrontController();

  if (isset($_GET['action'])) {

    if ($_GET['action'] == 'contactPost') {
      $name = htmlspecialchars($_POST['name']);
      $town = htmlspecialchars($_POST['town']);
      $email = htmlspecialchars($_POST['email']);
      $phone = htmlspecialchars($_POST['phone']);
      $message = htmlspecialchars($_POST['message']);

      if (!empty($name) && (!empty($town) && (!empty($email) && (!empty($phone) && (!empty($message)))))) {
        $frontController->contactPost($name, $town, $email, $phone, $message);
      } else {
        throw new Exception('Tous les champs ne sont pas remplis!!');
      }
      
    } elseif ($_GET['action'] == "rgpd") {
      $frontController->rgpd();
    
    } elseif ($_GET['action'] == "mentionslegales") {
      $frontController->mentionslegales();
    }

  } else {
    $frontController->home();
  }
  
} catch (Exception $e) {
  require_once 'app/views/errors/oups.php';
}