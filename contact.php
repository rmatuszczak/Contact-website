<?php
  session_start();


  require_once 'contactform/PHPMailer/PHPMailerAutoload.php'; //directory to the PHP mailer library

  $errors = [];

  if(isset($_POST['name'],$_POST['email'], $_POST['message'])){

    $fields = [
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'message' => $_POST['message']
    ];



    // check if the fields are not empty
    foreach($fields as $field => $data){
      if(empty($data)){
        $errors[] = 'Field ' . $field . ' is required.';
      }
    }


    // email address validation
    if (isset($_POST['email']) == true && empty($_POST['email']) == false) {
      $email = $_POST['email'];
      if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        $errors[] = 'The format of the e-mail address is incorrect.';
      }
    }

    //send email of no errors
    if(empty($errors)){
      $mail = new PHPMailer(true);


    
      $mail->SMTPDebug = 3; // display error information
      $mail->SMTPAuth = true;



      $mail->Host = 'smtp.gmail.com'; //smtp server
      $mail->Username = 'username@gmail.com'; //email address
      $mail->Password = 'password'; //password
      $mail->SMTPSecure ='ssl';
      $mail->Port = 465;

      $mail->isHTML(true);

      $mail->Subject = 'Message from website: rafal-matuszczak.pl';
      $mail->Body = 'From : ' . $fields['name'] . ' (' . $fields['email'] . ')<p>' . $fields['message'] . '</p>';

      $mail->FromName = 'Sender'; //sender

      $mail->AddAddress('rafal.matuszczak13@gmail.com', 'Rafał Matuszczak'); //reciever

      if($mail-> send()) {
        #header-content('Location: index.php'); // location of a confirmation message after the email is sent

      } else {
        $errors[] = 'Something went wrong. Please, try again.';
      }
    }

  } else {
    $errors[] = 'Something went wrong.';
  }

  $_SESSION['errors'] = $errors;
  $_SESSION['fields'] = $fields;

  header( 'Location: index.php')
 ?>
