<?php
//check if a variable was passed via url
if ($_GET['r'])
{
  include 'redirect.php';
  redirect_url($_GET['r']);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon"
      type="image/png"
      href="/favicon.png">
    <meta charset="utf-8">
    <title>Hourd's URL shortening service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="URL shortening">
    <meta name="author" content="Daniel Atkinson">

    <!-- include bootstap css -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="/ico/favicon.png">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25878258-1']);
  _gaq.push(['_setDomainName', 'hourd.net']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Hourd Tasa</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/contact">Contact</a></li>
              <li class="active"><a href="/s">Shortener</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="hero-unit">
        <h3>Hourd's URL shortening service</h3>
        <p>
    <form method="post" action="<?php echo $PHP_SELF;?>">
    <table border="0">
    <tr><td> URL:</td><td><input type="text" name="url" /></td></tr>
    <tr><td> <input class="btn btn-primary btn-large" type="submit" value="Shorten" name="submit"/></td></tr>
    </table>
    </form>
  </p>
  <?php
  //check if form has sent data back to this page
  if(isset($_POST['submit']))
  {
    include 'shorten.php';
  }
  ?>
      </div>
      <hr>

      <footer>
        <p>&copy; Tasa 2013</p>
      </footer>

    </div> <!-- /container -->

    <!-- include jquery and the rest of bootstrap -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap-transition.js"></script>
    <script src="/js/bootstrap-alert.js"></script>
    <script src="/js/bootstrap-modal.js"></script>
    <script src="/js/bootstrap-dropdown.js"></script>
    <script src="/js/bootstrap-scrollspy.js"></script>
    <script src="/js/bootstrap-tab.js"></script>
    <script src="/js/bootstrap-tooltip.js"></script>
    <script src="/js/bootstrap-popover.js"></script>
    <script src="/js/bootstrap-button.js"></script>
    <script src="/js/bootstrap-collapse.js"></script>
    <script src="/js/bootstrap-carousel.js"></script>
    <script src="/js/bootstrap-typeahead.js"></script>
  </body>
</html>
