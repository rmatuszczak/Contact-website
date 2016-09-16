<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rafal Matuszczak</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" media="screen" href="particles-css/style.css">
  <link rel="stylesheet" media="screen" href="style.css">
  <link rel="stylesheet" media="screen" href="css/fontello.css">
  <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  <?php
    session_start();

    require_once 'contactform/helpers/security.php';
    require_once 'contactform/PHPMailer/PHPMailerAutoload.php';

    $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
    $fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
   ?>
</head>

  <body>
    <div id="loader">
      <div class="sk-spinner-pulse">
      </div>
       Loading Content
    </div>

    <header>
      <div id="header-content">
        <nav>
          <div id="logo"><img src="images/logo.png" height="80px"></img></div>
          <div id="aboutNav" class="navigation"><div id="particles-js2"><a href="#">About</a></div></div>
          <div id="educationNav" class="navigation"><div id="particles-js3"><a href="#"> Education</a></div></div>
          <div id="activitiesNav" class="navigation"><div id="particles-js4"> <a href="#">Activities</a></div></div>
          <div id="contactNav" class="navigation"><div id="particles-js5"><a href="#"> Contact</a></div></div>
          <div id="resumeNav" class="navigation"><div id="particles-js6"> <a href="#">Resume</a></div></div>
        </nav>
          <section id=landing-page>

            <h1><div id="design">LEARN.</div>DESIGN. CODE.</h1>
            <h4>RAFAŁ MATUSZCZAK </h4>
            <p>Computer Science: Information Assurance</p>
          </section>
      </div>
    </header>
    <div id="about">
      <div id="periscope"></div>
        <div id="description">

          <p>I am an international student from Poland, and I am in progress of finishing my senior year Saint Leo University in Florida.
             I came to the United States as a scholar athlete to join the university's Cross Country team. As an athlete, I like to have goals, and since the first day I have started pursuing my degree at Saint Leo, my main goal is to become a software developer.
          </p>
       </div>
    </div>

  <div id="skills">
    <h4 id="header-skills">Languages and Freamworks</h4>
      <div class="col span_1_of_6">
    	   <object type="image/svg+xml" data="images/android-plain-wordmark.svg"></object>
    	</div>
    	<div class="col span_1_of_6">
    	   <object type="image/svg+xml" data="images/java-original-wordmark.svg"></object>
    	</div>
    	<div class="col span_1_of_6">
    	   <object type="image/svg+xml" data="images/javascript-original.svg"></object>
    	</div>
    	<div class="col span_1_of_6">
    	   <object type="image/svg+xml" data="images/css3-original-wordmark.svg"></object>
    	</div>
    	<div class="col span_1_of_6">
    	   <object type="image/svg+xml" data="images/html5-original-wordmark.svg"></object>
    	</div>
    	<div class="col span_1_of_6">
    		<object type="image/svg+xml" data="images/jquery-original-wordmark.svg"></object>
    	</div>
  </div>
  <div id="education">
    <div id="education-header">
      Education
    </div>
    <div id="education-content">
        <ul>
          <li>
            <strong>BS, Computer Science: Information Assurance,</strong>
             Senior, expected graduation April, 2017 Saint Leo University, Saint Leo, FL
          </li>
          <ul>
            <li>- Cumulative GPA- 3.87 </li>
          </ul>
        </br>
          <li>
            <strong>Tomasz Zan’s High School, Wschowa, Poland 2010-2013</strong>
          </li>
            <ul>
              <li>- Extended Coursework in Mathematics and Physics.</li>
            </ul>
        </ul>
    </div>
  </div>
  <div id="activities">
    <div id=info-icon><i class="demo-icon icon-info "></i></div>
    <div id="activities-content-wrapper">

      <ul>
      </br></br></br>
						<li class="list-one">Member of the Upsilon Pi Epsilon international honor society. </li></br>
            <li class="list-two">Member of the National College Athlete Honor Society</li></br>
						<li class="list-one">Scholar Athlete and a member of Cross Country and Track teams at Saint Leo University (3 times participated in NCAA D2 Cross Country National Championships)</li></br>
						<li class="list-two">Multiple athletic awards including: Polish National Champion in cross country and track and field, European Champion and World Championship’s silver medalist in mountain running.</li></br>
						<li class="list-one">Member of Saint Leo University’s Computer Club, and Cyber Defense group.</li></br>
						<li class="list-two">Member of Saint Leo University’s Cross Country and Track team. </li></br>
          </ul>

    </div>
    <div id="activities-runner">
    <img src="images/runner.png" width="300px"; height="600px"></div>
  </div>

<div id="contact">
  <div class="contact">
      <?php if(!empty($errors)): ?>
        <div class="panel">
          <ul>
            <li ><?php echo implode('</li><li>', $errors); ?></li>
          </ul>
        </div>
      <?php endif; ?>

    <h1>Contact Me</h1>
    <form action="contact.php" method="post">

        <input class="name" type="text" name="name" autocomplete="off " placeholder="Your Name"<?php echo isset($fields['name']) ? ' value="' . e($fields['name']) . '"' : '' ?>>

        <input class="email" type="text" name="email" autocomplete="off" placeholder="Your Email Address"<?php echo isset($fields['email']) ? ' value="' . e($fields['email']) . '"' : '' ?>>

        <textarea class="message" name="message" rows="8" placeholder="Your Message"><?php echo isset($fields['message']) ? e($fields['message']) : '' ?></textarea>
      <input class="button" type="submit" value="Send" >
    </form>
</div>
<div id="contact-info">
  <div class="section group_contact">
	<div class="col2 span_1_of_3">
    <div class="contact-icons"><i class="demo-icon icon-phone-circled "></i></div>
    (352) 8513 812
  </div>
	<div class="col2 span_1_of_3">
<div class="contact-icons"><i class="demo-icon icon-mail-alt "></i></div>
  rafal.matuszczak13@gmail.com
  </div>
	<div class="col2 span_1_of_3">
<div class="contact-icons"><i class="demo-icon icon-skype "></i>
</div>
  rmatuszczak13
	</div>

</div>
</div>
</div>
<div id="transparent"></div>
  <div id="footer">
    <div id="particles-js">
      <div id="footer-content">
          <a href ="Resume-Rafal Matuszczak.pdf" download><div class="social-icons"><i class="demo-icon icon-doc-text "></i>Downlad Resume</div></a>
          <a href="https://www.linkedin.com/in/rafal-matuszczak-997b10104?trk=hp-identity-photo" target="blank"><div class="social-icons"><i class="demo-icon icon-linkedin "></i>Linkedin</div></a>
          <a href="https://www.facebook.com/rmatuszczak" target="blank"><div class="social-icons"><i class="demo-icon icon-facebook "></i>Facebook</div></a>
          <a href="https://github.com/rmatuszczak" target="blank"><div class="social-icons"><i class="demo-icon icon-github-circled-alt2 "></i>Github</div></a>
          <div class="social-icons" style="font-size:20px;">&copy; Rafal Matuszczak 2016</div>

       </div>
    </div>
  </div>

  <script>
  window.addEventListener("load",function(){
    var load_screen = document.getElementById('loader');
    load_screen.style.opacity = '0';
     setTimeout(function(){load_screen.parentNode.removeChild(load_screen);}, 1000);

  });
  </script>

  <script src="particles.js"></script>
  <script src="js/app.js"></script>
  <script src="jquery-2.2.4.js"></script>
  <script src="jquery.scrollTo.min.js"></script>
  <script src="functions.js"></script>




  </body>
</html>

<?php

  unset($_SESSION['errors']);
  unset($_SESSION['fields']);
 ?>
