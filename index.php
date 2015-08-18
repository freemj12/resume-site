<!DOCTYPE html>
<html>
	<head>
		<!--specify character encoding-->
		<meta charset="utf-8">

		<!--ensure internet explorer uses the latest engine-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

	    <!--set window width to device width, and initial zoom to none-->
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>personal-site</title>

		<!--link to bootstrap css-->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	    <!--link to custom css-->
	    <link rel="stylesheet" type="text/css" href="styles.css">

	    <!--link to open sans typeface-->
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700">
	</head>
	<body>




		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">justin freeman</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a id="introduction" href="#">intro</a></li>
				<li><a id="skills" href="#">skills</a></li>
				<li><a id="experience" href="#">experience</a></li>
				<li><a id="education" href="#">education</a></li>
				<li><a id="contact" href="#">contact</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>


		<div class="container">

			<div class="row"><!--intro-->
				<div class="col-xs-12">
					<a name="introduction"></a>
					<h1>Hello future employer! <br>My name is <strong>Justin, </strong><br>and I want to work for you.</h1>
					<h5>I am an apsiring <strong>web developer</strong> looking for an <strong>entry-level opportunity</strong> in the field. I am a hard worker and I love to learn and challenge myself. Here's what I know so far:</h5>
				</div>
			</div><!--end intro-->

			<div class="row new-section"><!--skills-->
				<div class="col-xs-12">
					<a name="skills"></a>
					<h3>Development Skills</h3>

					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 skill">
						<img src="images/html_bw.svg" onmouseover="this.src='images/html.svg'" onmouseout="this.src='images/html_bw.svg'">
						<h6>HTML</h6>
					</div>

					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 skill">
						<img src="images/css_bw.svg" onmouseover="this.src='images/css.svg'" onmouseout="this.src='images/css_bw.svg'">
						<h6>CSS</h6>
					</div>

					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 skill">
						<img src="images/js_bw.svg" onmouseover="this.src='images/js.svg'" onmouseout="this.src='images/js_bw.svg'">
						<h6>JavaScript</h6>
					</div>

					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 skill">
						<a href="https://jquery.com/" target="_blank">
							<img src="images/jquery_bw.svg" onmouseover="this.src='images/jquery.svg'" onmouseout="this.src='images/jquery_bw.svg'">
						</a>
						<h6>jQuery</h6>
					</div>

					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 skill">
						<a href="http://getbootstrap.com/" target="_blank">
							<img src="images/bootstrap_bw.svg" onmouseover="this.src='images/bootstrap.svg'" onmouseout="this.src='images/bootstrap_bw.svg'">
						</a>
						<h6>Bootstrap</h6>
					</div>

					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 skill">
						<a href="https://angularjs.org/" target="_blank">
							<img src="images/angular_bw.svg" onmouseover="this.src='images/angular.svg'" onmouseout="this.src='images/angular_bw.svg'">
						</a>
						<h6>AngularJS</h6>
					</div>

					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 skill">
						<a href="https://wordpress.org/" target="_blank">
							<img src="images/wordpress_bw.svg" onmouseover="this.src='images/wordpress.svg'" onmouseout="this.src='images/wordpress_bw.svg'">
						</a>
						<h6>WordPress</h6>
					</div>

					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 skill">
						<a href="https://secure.php.net/" target="_blank">
							<img src="images/php_bw.svg" onmouseover="this.src='images/php.svg'" onmouseout="this.src='images/php_bw.svg'">
						</a>
						<h6>PHP</h6>
					</div>

					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 skill">
						<a href="https://git-scm.com/" target="_blank">
							<img src="images/git_bw.svg" onmouseover="this.src='images/git.svg'" onmouseout="this.src='images/git_bw.svg'">
						</a>
						<h6>Git</h6>
					</div>

					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 skill">
						<img src="images/terminal_bw.svg" onmouseover="this.src='images/terminal.svg'" onmouseout="this.src='images/terminal_bw.svg'">
						<h6>Command Line</h6>
					</div>

					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 skill">
						<img src="images/os_bw.png" onmouseover="this.src='images/os.png'" onmouseout="this.src='images/os_bw.png'">
						<h6>OS</h6>
					</div>

					<div class="col-xs-12">
						<p class="two-col">I have a strong understanding of <strong>Semantic HTML</strong> and its importance in providing meaning to the information contained within a modern web page. I am well versed in using <strong>CSS</strong> to style this information into a visually readable and appealing format for the user. I know how to use the <strong>JavaScript</strong> language and the <strong>jQuery</strong> library to add functionality to a web page. I also have a strong working knowledge of creating responsive, mobile-first layouts in the <strong>Bootstrap</strong> framework. I have a general understanding of the <strong>AngularJS</strong> framework and have worked with some of its basic features. I know how to use the <strong>WordPress</strong> web creation software, including coding custom themes with the <strong>PHP</strong> scripting language. I know how to use the <strong>Git</strong> version control system via the <strong>command line</strong>. I code by hand, with Sublime Text being my preferred text editor. I am extremely comfortable developing on both the <strong>Microsoft Windows</strong> and <strong>Mac OSX</strong> operating systems.</p>
					</div>
					

				</div>

				
			</div>

			<div class="row new-section">
				<div class="col-xs-12">
					<a name="experience"></a>
					<h3>Experience</h3>

					<div class="col-xs-12">
						<p class="two-col">Prior to learning web development, I worked as a graphic designer and illustrator, mostly in a freelance capacity. I was also employed in-house as the sole production artist on a three-person marketing team at <a href="https://www.chl.cc/" target="_blank">Citywide Home Loans</a>, a 400+ employee mortgage firm operating in thirteen states. Working on such a small team at a relatively large company, I gained a wealth of experience. I designed and created marketing material for company-wide use. I assisted loan officers in personal branding and customer communication strategies. I learned the ins and outs of the prepress process for both print and digital applications. I also lent my talents in visual communication and copywriting. At times I was charged with delegating work to third-party production artists.</p>
					</div>

				</div>
			</div>


			<div class="row new-section">
				<div class="col-xs-12 edu">
					<a name="education"></a>
					<h3>Education</h3>

					<div>
						<p><strong>Web Development Bootcamp</strong>, completed September 2014<br><a href="https://devmounta.in/" target="_blank">DevMountain</a><br>Salt Lake City, Utah</p>
					</div>

					<div>
						<p><strong>BFA with Honors, Illustration</strong>, December 2012<br><a href="https://www.kcad.edu/" target="_blank">Kendall College of Art and Design</a><br>Grand Rapids, Michigan</p>
					</div>

					<div>
						<p><strong>1.5 years of coursework, Industrial Design</strong><br><a href="http://www.collegeforcreativestudies.edu/" target="_blank">College for Creative Studies</a><br>Detroit, Michigan</p>
					</div>

				</div>
			</div>


			<div class="row new-section contact">
				<div class="col-xs-12">
					<a name="contact"></a>
					<h3>Contact</h3>

					<div class="col-xs-12">
						<p>You can contact me at:<br>
						<a href="&#102;&#114;&#101;&#101;&#109;&#106;&#049;&#050;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">
							<span class="email">&#102;&#114;&#101;&#101;&#109;&#106;&#049;&#050;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</span>
						</a><br>I look forward to hearing from you!</p>
					</div>

				</div>
			</div>

		</div><!--close container-->
					









	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		<!--link to jQuery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!--link to bootstrap javascript-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<!--link to app.js-->
		<script type="text/javascript" src="app.js"></script>
	</body>
</html>