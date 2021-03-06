<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>ArchitectureFix</title>
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><!-- STYLESHEETS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/mobile.css" media="only screen and (min-width: 320px) and (max-width: 568px)" rel="stylesheet">
    <link href="css/tablet.css" media="only screen and (min-width: 768px) and (max-width: 980px)" rel="stylesheet"><!-- SCRIPTS -->

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js">
    </script>
</head>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php include("components/nav.php"); ?><!-- JUMBOTRON - Curated. -->
   <!--  <div class="jumbotron head">
        <div class="container"><img alt="heading" class="img-responsive curateimg" src="img/curate.png"></div>
    </div> -->

     <!-- CONTACT ME -->
  <div class="container contact">
    <form action="https://formspree.io/architecturefix@gmail.com" id="contact" method="post" name="contact">
        <h3>Contact</h3>
        <fieldset>
            <input autofocus="" name="name" placeholder="Your name" required="" tabindex="1" type="text">
        </fieldset>
        <fieldset>
            <input name="_replyto" placeholder="Your Email Address" required="" tabindex="2" type="email">
        </fieldset>
        <fieldset>
            <textarea name="message" placeholder="Type your Message Here...." required="" tabindex="5"></textarea>
        </fieldset>
        <fieldset>
            <input name="_next" type="hidden" value="thanks.php">
        </fieldset>
        <fieldset>
            <input name="_gotcha" style="display:none" type="text">
        </fieldset>
        <fieldset>
            <button data-submit="...Sending" id="contact-submit" name="submit" type="submit" value="SEND">Submit</button>
        </fieldset>
    </form>
</div>






    <footer>
        <p class="foot">&copy; ARCHITECTURE FIX 2016</p>
    </footer><!-- /container --><!-- SCRIPTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js">
    </script> 
    <script>
    window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"><\/script>')
    </script> 
    <script src="js/vendor/bootstrap.min.js">
    </script> 
    <script src="js/main.js">
    </script> <!-- SCRIPTS -->
</body>
</html>