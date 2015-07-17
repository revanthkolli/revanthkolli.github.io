<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $message = "Name: " .$name. "\nFrom: " .$email. "\nMessage: " .$message. "";
    $to = 'revanthkolli@gmail.com';
    $subject = 'Message from website';

    // if (!$_POST['name']) {
    //   $errName = 'Please enter your name';
    // }
    //
    // if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    //   $errEmail = 'Please enter a valid email address';
    // }
    //
    // if (!$_POST['message']) {
    //   $errMessage = 'Please enter your message';
    // }
    // if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (@mail($to, $subject, $message)) {
      $result='<div class="alert alert-success">Your message has been sent! I will get back to you shortly.</div>';
    }
    else {
      $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Revanth Kolli </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
  </head>
  <body data-spy="scroll" data-target="#navbar">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Revanth Kolli</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#about">About Me</a></li>
            <li><a href="#experience" class="alt">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#skills" class="alt">Skills</a></li>
            <li><a href="#contact">Contact Me</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <a id="about" class="anchor"> </a>
    <section id="about" class="dark-background padding-top-bottom">
      <div class="container text-center">
        <header class="section-header">
          <h1> About Me </h1>
        </header>
        <div class="row text-center">
          <div class="col-sm-8 col-sm-offset-2 padding-top">
            <img class="img-responsive img-circle img-thumbnail center-block img-margin" src="img/profile-sq-med.jpg" alt="Revanth Kolli" />
            <div class="btn-group-sm">
              <div class="btn btn-sm"> <a href="https://github.com/revanthkolli" target="_blank"> <i class="fa fa-github fa-3x"></i> </a> </div>
              <div class="btn btn-sm"> <a href="https://www.linkedin.com/pub/revanth-kolli/6b/bb1/3b6" target="_blank"> <i class="fa fa-linkedin fa-3x"></i> </a> </div>
              <div class="btn btn-sm"> <a href="https://soundcloud.com/revanthkolli" target="_blank"> <i class="fa fa-soundcloud fa-3x"></i> </a> </div>
              <div class="btn btn-sm"> <a href="mailto:revanthkolli@gmail.com" target="_top"> <i class="fa fa-envelope-o fa-3x"></i> </a> </div>
              <div class="btn btn-sm"> <a href="https://docs.google.com/uc?authuser=0&id=0By3lTZ0GZpeFUHFFcFZWOU5GVVk&export=download"> <i class="fa fa-file-pdf-o fa-3x"></i> </a> </div>

            </div>
            <h2> Student - Developer - Songwriter </h2>
            <p>
              <span class="highlight"> 3rd Year </span> student at the <span class="highlight" > University of Virginia </span> (School of Engineering and Applied Sciences), pursuing majors in <span class="highlight" > Computer Science </span> and <span class="highlight"> Economics </span>. Expecting to graduate in May 2017, I'm constantly working on honing my diverse skill set in order to tackle inriguing and challenging problems through a mixture of academics, internships and self-motivated projects.
            </p>
          </div>
        </div>
      </div>
    </section>
    <a id="experience" class="anchor"> </a>
    <section id="experience" class="white-background padding-top-bottom">
      <div id="container" class="text-center">
        <header class="section-header">
          <h1> Experience </h1>
        </header>
        <div class="section-content padding-top-bottom text-center">
          <h2> Developer Intern at <span class="highlight"> SWIFT </span> </h2>
          <h3> June - August 2014 </h3>
          <p> Created a standalone package of multiple model websites and intergated them with SWIFT's new IdP authentication feature for marketing purposes</p>
          <hr>
          <h2> Developer Intern at <span class="highlight"> Spacenet Inc. </span> </h2>
          <h3> July - August 2013 </h3>
          <p> Collaborated with full time developers to update features and fix bugs for their internal billing software. </p>
          <hr>
          <h2> Broadband Support Intern at <span class="highlight"> CICAT Networks </span> </h2>
          <h3> June - August 2011 </h3>
          <p> Managed daily problem reports from customers and provided techincal support for major networking clients. </p>
        </div>
      </div>
    </section>
    <a id="projects" class="anchor"> </a>
    <section id="projects" class="dark-background padding-top-bottom">
      <div id="container" class="text-center">
        <header class="section-header">
          <h1> Projects </h1>
        </header>
        <div class="section-content padding-top-bottom text-center">
          <h2> Rewardly <span class="highlight"> (May 2015) </span> </h2>
          <h3> Capital One Summit for Software Engineers - Hackathon </h3>
          <p> A web application built on the Django framework that integrates with Capital One's Nessie API that helps users diminish excessive spending by rewarding competitive spending within a budget and providing better tools to manage and use rewards points. </p>
          <a href="https://github.com/revanthkolli/Rewardly" target="_blank"> View on GitHub <span style="padding: 3px;"> </span> <i class="fa fa-external-link fa-small"> </i> </a>
          <h2> Sudoku Solver and Generator <span class="highlight"> (April - May 2015) </span> </h2>
          <h3> CS 3102 Theory of Computation - Course Project </h3>
          <p> A Java program that can rapidly solve sudoku puzzles of different sizes and samurai soduku puzzles as well as generate new ones. </p>
          <a href="https://github.com/b-nguyen/theory-final-project" target="_blank"> View on GitHub <span style="padding: 3px;"> </span> <i class="fa fa-external-link fa-small"> </i> </a>
          <h2> Smasher <span class="highlight"> (May 2015) </span> </h2>
          <h3> HackUVA </h3>
          <p> A calendar-based web application built using PHP, CodeIgniter and JavaScript that aims to simplify scheduling for users. </p>
          <a href="https://github.com/revanthkolli/Rewardly" target="_blank"> View on GitHub <span style="padding: 3px;"> </span> <i class="fa fa-external-link fa-small"> </i> </a>
          <h2> HoosMining <span class="highlight"> (2013 - Present) </span> </h2>
          <h3> NASA Robotic Mining Team - Co-founder, Programming and Outreach Teams </h3>
          <p> Helped create a robot that can competitively mine simulated Martian territory by programming in SPIN and coordinated with various local elementary and middle schools to proomote STEM related-projects. </p>
          <a href="http://gavitronics.com/about/hoosmining/" target="_blank"> View more info <span style="padding: 3px;"></span> <i class="fa fa-external-link fa-small"></i> </a>
        </div>
      </div>
    </section>
    <a id="skills" class="anchor"> </a>
    <section id="skills" class="white-background padding-top-bottom">
      <div id="container" class="text-center">
        <header class="section-header">
          <h1> Skills </h1>
        </header>
        <div class="section-content padding-top-bottom text-center">
          <div class="skillbar clearfix " data-percent="70%">
	           <div class="skillbar-title" style="background: #A80D0D;"><span>Java</span></div>
             <div class="skillbar-bar" style="background: #CF2020;"></div>
	           <div class="skill-bar-percent">Proficient</div>
          </div>
          <div class="skillbar clearfix " data-percent="70%">
	           <div class="skillbar-title" style="background: #2b5b84;"><span>HTML/CSS</span></div>
             <div class="skillbar-bar" style="background: #6C93B3;"></div>
	           <div class="skill-bar-percent">Proficient</div>
          </div>
          <div class="skillbar clearfix " data-percent="65%">
	           <div class="skillbar-title" style="background: #2b5b84;"><span>Python</span></div>
             <div class="skillbar-bar" style="background: #CDA839;"></div>
	           <div class="skill-bar-percent">Proficient</div>
          </div>
          <div class="skillbar clearfix " data-percent="60%">
	           <div class="skillbar-title" style="background: #6C93B3;"><span>R</span></div>
             <div class="skillbar-bar" style="background: #B9CAD9;"></div>
	           <div class="skill-bar-percent">Intermediate</div>
          </div>
          <div class="skillbar clearfix " data-percent="50%">
	           <div class="skillbar-title" style="background: #AB881C;"><span>JavaScript</span></div>
             <div class="skillbar-bar" style="background: #E8C75F;"></div>
	           <div class="skill-bar-percent">Intermediate</div>
          </div>
          <div class="skillbar clearfix " data-percent="45%">
	           <div class="skillbar-title" style="background: #05679B;"><span>C++</span></div>
             <div class="skillbar-bar" style="background: #B0ADAA;"></div>
	           <div class="skill-bar-percent">Intermediate</div>
          </div>
          <div class="skillbar clearfix " data-percent="45%">
	           <div class="skillbar-title" style="background: #EE6C00;"><span>SQL</span></div>
             <div class="skillbar-bar" style="background: #FF8E31;"></div>
	           <div class="skill-bar-percent">Intermediate</div>
          </div>
          <div class="skillbar clearfix " data-percent="35%">
	           <div class="skillbar-title" style="background: #6ab344;"><span>Android</span></div>
             <div class="skillbar-bar" style="background: #A5A6A6;"></div>
	           <div class="skill-bar-percent">Beginner</div>
          </div>
        </div>
      </div>
    </section>
    <a href="contact" class="anchor"> </a>
    <section id="contact" class="dark-background padding-top-bottom">
      <div id="container" class="text-center">
        <header class="section-header">
          <h1> Contact Me </h1>
        </header>
        <div class="section-content padding-top-bottom text-center">
          <form role="form" method="post" action="index.php#contact" class="padding-top-bottom" >
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <input type="text" class="form-control text-center" placeholder="Name" name="name" id="name" required="required" data-validation-required-message="Please enter your name." aria-invalid="false">
                <p class="help-block text-danger"> </p>
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <input type="email" class="form-control text-center" placeholder="Email" name="email" id="email" required="required" data-validation-required-message="Please enter your email address." aria-invalid="false">
                <p class="help-block text-danger"> </p>
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <textarea class="form-control text-center" placeholder="Message" name="message" id="message" required="required" data-validation-required-message="Please enter your name." aria-invalid="false"></textarea>
                <p class="help-block text-danger"> </p>
              </div>
            </div>
            <div class="row control-group padding-top-bottom">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg" value="Send Email" />
                </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 gloating-label-form-group controls">
                <?php echo $result; ?>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      jQuery(document).ready(function(){
        jQuery('.skillbar').each(function(){
          jQuery(this).find('.skillbar-bar').animate({
            width:jQuery(this).attr('data-percent')
          },6000);
        });
      });
    </script>
  </body>
</html>
