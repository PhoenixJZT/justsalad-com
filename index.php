<?
// Variables
$title = "Just Salad Intranet";

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?=$title?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <!--
			  <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
			  -->
            </ul>
            <!--<p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>-->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Central Systems</li>
              <li><a href="http://mail.google.com/a/justsalad.com">E-Mail</a></li>             
              <li><a href="http://www.justsaladfranchise.com">Purchase Orders</a></li>
              <li><a href="http://www.orderjustsalad.com">OrderJustSalad.com</a></li>
			  <li><a href="http://www.justsaladfranchise.com/">JS Franchise</a></li>
              
			  <li class="nav-header">Purchasing</li>
              <li><a href="http://www.justsaladfranchise.com">PO System</a></li>
			  <li><a href="http://po.justsalad.com">Legacy PO System</a></li>
			  
              <li><a href="http://astore.amazon.com/justsalad-20">Amazon Store</a></li>
			  <li><a href="http://www.amazon.com/?_encoding=UTF8&camp=212353&creative=380557&linkCode=sb1&tag=justsalad-20">Amazon.com</a></li>
			  

			  <li class="nav-header">Online Ordering</li>
              <li><a href="http://www.orderjustsalad.com">OrderJustSalad.com</a></li>
              <li><a href="https://www.seamless.com/vendor/ ">Seamless Vendor</a></li>
              <li><a href="https://www.orderjustsalad.com/orb">ORB</a></li>
			  <li class="nav-header">Report/Forms</li>
			  <li><a href="https://www.orderjustsalad.com/problemreport.php">Order Problem Report</a></li>
              <li><a href="https://www.orderjustsalad.com/timesheet">Timesheet Entry</a></li>
			  <li><a href="https://docs.google.com/a/justsalad.com/spreadsheet/viewform?formkey=dFl4bFA1VjdTYXp6d1dzdldUb0N0eVE6MQ">JS Signage Inventory</a></li>
			  <li><a href="https://justsalad.wufoo.com/forms/timeoff-request-form/">Vacation Request</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <!--
		  <div class="hero-unit">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
          </div>
		  -->
		  <div class="row-fluid">
		    <!--
			<div class="span9">
		      <div class="alert alert-info">Welcome to the new Just Salad intranet page.</div>
			</div>  
			-->
		  </div>
          <div class="row-fluid">
            <div class="span4">
              <h2>E-mail</h2>
              <p>Access your Just Salad e-mail account.</p>
              <p><a class="btn btn-primary btn-large" href="http://mail.google.com/a/justsalad.com">Check-Email</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Online Ordering</h2>
              <p>Place orders and check reports for OJS.com</p>
              <p><a class="btn btn-primary btn-large" href="http://www.orderjustsalad.com">OrderJustSalad.com</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Weather</h2>
              <p>Check the 10-day local weather forecast.</p>
              <p><a class="btn btn-primary btn-large" href="http://www.weather.com/weather/tenday/10017">Weather Forecast</a></p>
            </div><!--/span-->
          </div><!--/row-->
		  <div class="row-fluid">&nbsp;</div>
		  <div class="row-fluid">&nbsp;</div>
          <div class="row-fluid">
             <div class="span4">
              <h2>Stores</h2>
			  <p>From any Cisco phone, you can dial the extension below to reach another store.</p>
              <table cellpadding="3">
			  <tr><td><strong>Call Center</strong></td><td><span class="badge badge-info">10-802</span></td></tr>
			  <tr><td><strong>320 Park</strong></td><td><span class="badge badge-info">11-100</span></td></tr>
			  <tr><td><strong>37th Street</strong></td><td><span class="badge badge-info">12-100
			  <tr><td><strong>Maiden</strong></td><td><span class="badge badge-info">13-100</span></td></tr>
			  <tr><td><strong>30 Rock</strong></td><td><span class="badge badge-info">14-100</span></td></tr>
			  <tr><td><strong>600 Third</strong></td><td><span class="badge badge-info">15-100</span></td></tr>
			  <tr><td><strong>6th Ave</strong></td><td><span class="badge badge-info">16-100</span></td></tr>
			  <tr><td><strong>WWP</strong></td><td><span class="badge badge-info">17-100</span></td></tr>
			  <tr><td><strong>663 Lex</strong></td><td><span class="badge badge-info">18-100</span></td></tr>
			  <tr><td><strong>8th Street</strong></td><td><span class="badge badge-info">19-100</span></td></tr>
			  <tr><td><strong>83rd Street</strong></td><td><span class="badge badge-info">21-100</span></td></tr>
			  <tr><td><strong>1306 1st Ave</strong></td><td><span class="badge badge-info">22-100</span></td></tr>
			  </table>
            </div><!--/span-->
			<div class="span4">
              <h2>Support</h2>
			  <table cellpadding="3">
			  <tr><td><strong>JS Call Center</strong></td><td><span class="badge badge-info">212-244-1111 ext 1</span></td></tr>
			  <tr><td><strong>Seamless Support</strong></td><td><span class="badge badge-info">800-905-9322 ext 2</span></td></tr>
			  <tr><td><strong>POS Support</strong></td><td><span class="badge badge-info">212-391-6500 ext 3</span></td></tr>
			  </table>



            </div><!--/span-->
           
            <div class="span4">
              <h2>Social</h2>
              <p>Keep up on the latest Just Salad News</p>
              <table cellpadding="3">
			  <tr><td><strong>Blog</strong></td><td><a href="http://www.justsalad.com/blog" class="badge badge-info">justsalad.com/blog</span></td></tr>

			  <tr><td><strong>Facebook</strong></td><td><a href="http://www.facebook.com/justsalad" class="badge badge-info">facebook.com/justsalad</span></td></tr>
			  <tr><td><strong>Twitter</strong></td><td><a href="http://www.twitter.com/justsalad" class="badge badge-info">twitter.com/justsalad</span></td></tr>
</span></td></tr>
			  </table>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Just Salad 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
