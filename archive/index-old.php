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
    <meta name="keywords" content="Revanth, Revanth Kolli, Kolli, revanthkolli">
    <meta name="author" content="Revanth Kolli">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>
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
          <a class="navbar-brand" href="#">REVANTH KOLLI</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#about">About Me</a></li>
            <li><a href="#experience" class="alt">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#skills" class="alt">Skills</a></li>
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
              <div class="btn btn-sm" data-toggle="tooltip" data-placement="bottom" title="GitHub"> <a href="https://github.com/revanthkolli" target="_blank"> <i class="fa fa-github fa-3x"></i> </a> </div>
              <div class="btn btn-sm" data-toggle="tooltip" data-placement="bottom" title="LinkedIn"> <a href="https://www.linkedin.com/pub/revanth-kolli/6b/bb1/3b6" target="_blank"> <i class="fa fa-linkedin fa-3x"></i> </a> </div>
              <div class="btn btn-sm" data-toggle="tooltip" data-placement="bottom" title="SoundCloud"> <a href="https://soundcloud.com/revanthkolli" target="_blank"> <i class="fa fa-soundcloud fa-3x"></i> </a> </div>
              <div class="btn btn-sm" data-toggle="tooltip" data-placement="bottom" title="My Blog - Manasulo Maatalu"> <a href="https://manasulomaatalu.com/" target="_blank"> <i class="fa fa-rss fa-3x"></i> </a> </div>
              <div class="btn btn-sm" data-toggle="tooltip" data-placement="bottom" title="Email: revanthkolli@gmail.com"> <a href="mailto:revanthkolli@gmail.com" target="_top"> <i class="fa fa-envelope-o fa-3x"></i> </a> </div>
              <div class="btn btn-sm" data-toggle="tooltip" data-placement="bottom" title="Resume"> <a href="https://docs.google.com/uc?id=0By3lTZ0GZpeFN0R2bHBxNkRkV3M&export=download"> <i class="fa fa-file-pdf-o fa-3x"></i> </a> </div>

            </div>
            <div class="navbar navbar-default no-margin clear-style" role="navigation">
              <div class="navbar-header">
                <h2 id="active-pill"> </h2>
                <button type="button" class="navbar-toggle custom-nav" data-toggle="collapse" data-trigger="focus" data-target="#bs-example-navbar-collapse-1" style="position: static; float: none; margin-bottom: 0px; font-size: 28px; color: #fff; font-family: 'Roboto Slab', serif; border: none; border-bottom: #7E9B72 3px solid;">Student</button>
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <h2 class="no-margin collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav nav-pills nav-justified head-menu">
                  <li class="active-pill active"><a data-toggle="pill" href="#student">Student</a></li>
                  <li><a data-toggle="pill" href="#developer">Developer</a></li>
                  <li><a data-toggle="pill" href="#songwriter">Writer</a></li>
                </ul>
              </h2>
            </div>
            <div class="tab-content padding-top-bottom">
              <div id="student" class="tab-pane fade in active">
                <h2>4<sup>rd</sup> Year at <span class="highlight"> University of Virginia </span></h2>
                <h5> Rodman Scholar, School of Engineering and Applied Sciences <h5>
                <p class="padding-top-bottom">
                  Bachelor of Science, <span class="highlight"> Computer Science & </span><span class="highlight"> Economics Minor</span>
                </p>
              </div>
              <div id="developer" class="tab-pane fade">
                <h2> Develop with <span class="highlight"> Design in Mind </span> </h2>
                <h5> Front End and Back End </h5>
                <p class="padding-top-bottom">
                  I'm constantly looking to diversify and refine my skill set by solving challenging problems, whether that's through courses, internships, hackathons or self-motivated projects.
                  A fan of minimalism and appealing design, I try to incorporate both in the solutions that I deliver.
                </p>
              </div>
              <div id="songwriter" class="tab-pane fade">
                <h2> Code for the Mind, <span class="highlight"> Writing for the Soul </span></h2>
                <h5> South Indian Classical Carnatic Vocal, Acoustic Guitar, FL Studio, Wordpress </h5>
                <p class="padding-top-bottom">
                  I started writing songs in high school and write stories, film reviews and other articles related to South Indian cinema on <a href="http://manasulomaatalu.com" class="highlight">my website.</a>
                </p>
              </div>
            </div>
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
          <h2> Research Assistant at <span class="highlight"> Darden School of Business </span> </h2>
          <h3> July 2015 - Present </h3>
          <p> Creating an interactive community-focused website using the Django framework for the historical <a href="http://news.virginia.edu/content/mr-meads-liberal-arts-seminar-stuff-legend-university-virginia" target="_blank"> Mead Seminar course </a> taught at Darden and UVa at the Undergraduate level for <a href="https://en.wikipedia.org/wiki/Michael_Lenox" target="_blank"> Professor Michael Lenox </a>.</p>
          <hr>
          <h2> Developer Intern at <span class="highlight"> Center for Open Science </span> </h2>
          <h3> May - August 2015 </h3>
          <p> Added sharing and embedding capabilites to the <a target="_blank" href="https://github.com/CenterForOpenScience/modular-file-renderer"> modular file renderer </a> of the <a target="_blank" href="https://github.com/revanthkolli/osf.io"> Open Science Framework </a> and also fixed various bugs and issues throughout multiple releases.</p>
          <hr>
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
          <h2> AutoCaption.co <span class="highlight"> (September 2015) </span> </h2>
          <h3> PennApps XII - Hackathon </h3>
          <p> A web application that creates captions for images uploaded by users from popular lyrics, songs, quotes and puns using IBM BlueMix, Imaggo API, Amazon Web Services (AWS) CloudSearch and Django. </p>
          <a href="www.autocaption.co" target="_blank"> View on website <span style="padding: 3px;"> </span> <i class="fa fa-external-link fa-small"> </i> </a>
          <h2> Rewardly <span class="highlight"> (May 2015) </span> </h2>
          <h3> Capital One Summit for Software Engineers - Hackathon </h3>
          <p> A web application built on the Django framework that integrates with Capital One's Nessie API that helps users diminish excessive spending by rewarding competitive spending within a budget and providing better tools to manage and use rewards points. Selected to be one of 30 students from the U.S. to attend this summit.</p>
          <a href="https://github.com/revanthkolli/Rewardly" target="_blank"> View on GitHub <span style="padding: 3px;"> </span> <i class="fa fa-external-link fa-small"> </i> </a>
          <h2> Sudoku Solver and Generator <span class="highlight"> (April - May 2015) </span> </h2>
          <h3> CS 3102 Theory of Computation - Course Project </h3>
          <p> A Java program that can rapidly solve sudoku puzzles of different sizes and samurai soduku puzzles as well as generate new ones. </p>
          <a href="https://github.com/b-nguyen/theory-final-project" target="_blank"> View on GitHub <span style="padding: 3px;"> </span> <i class="fa fa-external-link fa-small"> </i> </a>
          <h2> Smasher <span class="highlight"> (May 2015) </span> </h2>
          <h3> HackUVA </h3>
          <p> A calendar-based web application built using PHP, CodeIgniter and JavaScript that aims to simplify scheduling for users. </p>
          <a href="http://devpost.com/software/smasher" target="_blank"> View on DevPost <span style="padding: 3px;"> </span> <i class="fa fa-external-link fa-small"> </i> </a>
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
          <div class="padding-top-bottom">
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
            <div class="skillbar clearfix " data-percent="70%">
	             <div class="skillbar-title" style="background: #2b5b84;"><span>Python</span></div>
               <div class="skillbar-bar" style="background: #CDA839;"></div>
	             <div class="skill-bar-percent">Proficient</div>
            </div>
            <div class="skillbar clearfix " data-percent="55%">
	             <div class="skillbar-title" style="background: #AB881C;"><span>JavaScript</span></div>
               <div class="skillbar-bar" style="background: #E8C75F;"></div>
	             <div class="skill-bar-percent">Intermediate</div>
            </div>
            <div class="skillbar clearfix " data-percent="55%">
	             <div class="skillbar-title" style="background: #6C93B3;"><span>R</span></div>
               <div class="skillbar-bar" style="background: #B9CAD9;"></div>
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
            <div class="skillbar clearfix " data-percent="35%">
	             <div class="skillbar-title" style="background: #000;"><span>PHP</span></div>
               <div class="skillbar-bar" style="background: #7C83AF;"></div>
	             <div class="skill-bar-percent">Beginner</div>
            </div>
          </div>
          <p class="padding-top-bottom">
            <span class="highlight"> Limited experience with: </span> Angular, Bash, Django, Flask, Go, Heroku, Firebase, Parse, PL/SQL, SPIN, Tomcat
            <br />
            <span class="highlight"> Worked with: </span> Atom, CodeBlocks, Eclipse, Emacs, Geany, Linux (Ubuntu w/Cinnamon), OS X, Propeller Tool, PyCharm, Rstudio, Vim, VirtualBox/VMWare, Windows, Wordpress
          </p>
        </div>
      </div>
    </section>
    <a href="contact" class="anchor"> </a>
-    <section id="contact" class="dark-background padding-top-bottom">
-      <div id="container" class="text-center">
-        <header class="section-header">
-          <h1> Contact Me </h1>
-        </header>
-        <div class="section-content padding-top-bottom text-center">
-          <form role="form" method="post" action="index.php#contact" class="padding-top-bottom" >
-            <div class="row control-group">
-              <div class="form-group col-xs-12 floating-label-form-group controls">
-                <input type="text" class="form-control text-center" placeholder="Name" name="name" id="name" required="required" data-validation-required-message="Please enter your name." aria-invalid="false">
-                <p class="help-block text-danger"> </p>
-              </div>
            </div>
            <div class="row control-group">
-              <div class="form-group col-xs-12 floating-label-form-group controls">
-                <input type="email" class="form-control text-center" placeholder="Email" name="email" id="email" required="required" data-validation-required-message="Please enter your email address." aria-invalid="false">
-                <p class="help-block text-danger"> </p>
-              </div>
            </div>
            <div class="row control-group">
-              <div class="form-group col-xs-12 floating-label-form-group controls">
-                <textarea class="form-control text-center" placeholder="Message" name="message" id="message" required="required" data-validation-required-message="Please enter your name." aria-invalid="false"></textarea>
-                <p class="help-block text-danger"> </p>
-              </div>
            </div>
            <div class="row control-group padding-top-bottom">
-                <div class="form-group col-xs-12 floating-label-form-group controls">
-                  <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg" value="Send Email" />
-                </div>
            </div>
            <div class="row control-group">
-              <div class="form-group col-xs-12 gloating-label-form-group controls">
-                <?php echo $result; ?>
-              </div>
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
    <script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
      $('#bs-example-navbar-collapse-1').on('show.bs.collapse', function() {
        $('.nav-pills').addClass('nav-stacked');
      });
      $('#bs-example-navbar-collapse-1').on('hide.bs.collapse', function() {
        $('.nav-pills').removeClass('nav-stacked');
      });
      $(function(){
        $(".nav-pills li a").click(function(){

          $(".custom-nav").text($(this).text());
          $(".custom-nav").val($(this).text());

        });

      });
    </script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65276713-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
