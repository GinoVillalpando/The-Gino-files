<!DOCTYPE html>
<html lang="en">

<!-- meta tags and bootstrap stylesheet with jQueries scripts-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>The Gino Files</title>

	<!-- bootstrap and css stylesheets-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
			integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheetIndex.css">

	<!--<script src="https://kit.fontawesome.com/" -->


	<!-- jQuery libraries required for bootstrap then popper.js-->
	<!--<script src="https://kit.fontawesome.com/" -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<!-- jQuery Form, Additional Methods, Validate -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- Your JavaScript Form Validator -->
	<script src="../javascript/form-validate.js"></script>
</head>

<!-- body of The-Gino-Files contents -->
<body class="animated fadeIn slow">

<!-- nav bar with icon image, a header with name and an icon for the menu that shows on small screens -->
<div class="container-fluid p-0 text-white">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark-gradient p-1 fixed-top">
		<a class="navbar-brand p-0 ml-4" href="index.php">
			<img src="imagesIndex/navbarIcon.png" width="40" height="40" class="animated zoomIn d-inline-block align-top mt-1 mr-2" alt="Nav bar Icon" />
			<h5 class="animated bounceInDown active d-inline-block text-center display-4 header-text-size mb-0">Gino</h5> <h5 class="animated bounceInDown active d-lg-none d-inline-block text-center display-4 header-text-size mb-0">V.</h5> <h5 class="animated bounceInDown active d-none d-lg-inline-block text-center display-4 header-text-size mb-0">Villalpando</h5></a>
		<button class="animated active bounceInRight navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- nav items aligned to the right and is shown in the menu after pressing -->
		<div class="collapse navbar-collapse text-right" id="navbarNav">
			<ul class="animated bounceInDown navbar-nav ml-auto mt-3">
				<li class="nav-item active" data-toggle="collapse" data-target=".navbar-collapse.show">
					<a class="nav-link mx-4" href="#aboutMe">About Me<hr/> <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link mx-4" href="mailto:GinoVillalpando@outlook.com" target="_blank">Contact<hr/></a>
				</li>
				<li class="nav-item">
					<a class="nav-link mx-4" href="downloadable-resume/Gino-Villalpando-Resume.pdf" download="Gino-resume">Resume<hr/></a>
				</li>
				<li class="nav-item dropdown pb-4">
					<a class="nav-link dropdown-toggle mx-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Other Projects
					</a>
					<div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
						<a class="dropdown-item text-white" href="#">Action</a>
						<a class="dropdown-item text-white" href="#">Another action</a>
<!--						<div class="dropdown-divider"></div>-->
						<a class="dropdown-item text-white" href="#">Something else here</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
</div>

<!-- jumbotron with background image, title, more information and learn more button-->
<a id="landingPage"></a>
<section>
	<div class="jumbotron-fluid py-5 px-5 intro-background bg-dark mx-auto d-block text-white">
		<div class="bg-drop-text p-4">
			<h1 class="animated bounceInLeft display-4">Visionary Developer For The Future.</h1>
			<p class="lead animated bounceInLeft ">Compassionate learner of programming with a genuine interest in technological advances.</p>
			<hr class="my-4" />
			<a class="animated bounceInLeft btn btn-dark text-white btn-lg" href="#aboutMe" role="button">Learn more</a>
		</div>
	</div>
</section>


<!-- vertical pill navs with objective, skills/languages, and project links - FULLSCREEN -->
<a id="aboutMe"></a>
<section class="container-fluid py-3 d-none d-lg-block bg-light text-dark">
	<div class="row mx-auto">
		<div class="col-4 my-3">
			<div class="nav flex-column rounded shadow nav-pills bg-dark text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link shadow active bg-dark py-4 text-white" id="v-pills-objective-tab" data-toggle="pill" href="#v-pills-objective" role="tab" aria-controls="v-pills-objective" aria-selected="true"><h6>Objective</h6></a>
				<a class="nav-link shadow bg-dark py-4 text-white" id="v-pills-skills-tab" data-toggle="pill" href="#v-pills-skills" role="tab" aria-controls="v-pills-skills" aria-selected="false"><h6>Skills/Languages</h6></a>
				<a class="nav-link shadow bg-dark py-4 text-white" id="v-pills-projects-tab" data-toggle="pill" href="#v-pills-projects" role="tab" aria-controls="v-pills-projects" aria-selected="false"><h6>Projects</h6></a>
				<a class="nav-link shadow bg-dark py-4 text-white" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><h6>Deep Dive Coding Graduate</h6></a>
			</div>
		</div>
		<div class="col-8 my-2 px-2 d-block">
			<div class="tab-content pt-3" id="v-pills-tabContent">
				<div class="tab-pane fade show active body-text-size mx-auto" id="v-pills-objective" role="tabpanel" aria-labelledby="v-pills-objective-tab">
					<p>Solution-driven web developer excelling in highly collaborative or solo work environment, finding solutions
						to challenges and focuses on client satisfaction.</p>
					<p>Proven experience with HTML, CSS, JavaScript, JQuery, PHP, mySQL, Bootstrap, REST, React, and JSX.</p>
					<p>Experienced in building product for desktop, and mobile app users, meeting the highest quality standards
						for web design, user experience, best practices, usability and meeting deadlines.</p>
					<p>Responding to challenges by designing, developing solutions and building web applications aligned to customer’s services.</p>
					<p>Translating solutions into code and working across many different APIs, third-party integrations and databases.</p>
						Working with developers that is compassionate about technology and want to integrate new ways of developing software.
				</div>
				<div class="tab-pane fade mx-auto" id="v-pills-skills" role="tabpanel" aria-labelledby="v-pills-skills-tab">
					<div class="container">
						<div class="row body-text-size">
							<div class ="col-lg-6">
								<ul>
									<li>HTML</li>
									<li>CSS</li>
									<li>PHP</li>
									<li>mySQL</li>
									<li>jQuery</li>
								</ul>
							</div>
							<div class ="col-lg-6">
								<ul>
									<li>JavaScript</li>
									<li>Bootstrap</li>
									<li>REST APIs</li>
									<li>React APIs</li>
									<li>JSX</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade mx-auto" id="v-pills-projects" role="tabpanel" aria-labelledby="v-pills-projects-tab">
					<ul class="body-text-size">
						<li class="mb-3">Community CookBook (using PHP, mySQL, JSX, HTML, JavaScript, CSS, Object Oriented Programming)<br/>
							<a href="https://bootcamp-coders.cnm.edu/~gvillalpando/community-cookbook/" class="text-dark" target="_blank"><strong>Deployment, </strong></a>
							<a href="https://github.com/TheDeepDiveDawgs/community-cookbook" class="text-dark" target="_blank"><strong>GitHub Repository </strong></a>
						</li>
						<li class="mb-3">Personal Webpage Project (using PHP, HTML, CSS, Bootstrap, jQuery)<br/>
							<a href="https://bootcamp-coders.cnm.edu/~gvillalpando/The-Gino-Files/public_html/front-end/" class="text-dark" target="_blank"><strong>Deployment, </strong></a>
							<a href="https://github.com/GinoVillalpando/The-Gino-files" class="text-dark" target="_blank"><strong>GitHub Repository </strong></a>
						</li>
						<li class="mb-3">Deep Dive Coding Assessment (using PHP, mySQL, Object Oriented Programming)<br/>
							<a href="https://bootcamp-coders.cnm.edu/~gvillalpando/assessment-1-GinoVillalpando/" class="text-dark" target="_blank"><strong>Deployment, </strong></a>
							<a href="https://github.com/uss-hopper/assessment-1-GinoVillalpando" class="text-dark" target="_blank"><strong>GitHub Repository </strong></a>
						</li>
					</ul>
				</div>
				<div class="tab-pane fade mx-auto body-text-size" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
					<a href="https://deepdivecoding.com/fullstack/" class="text-black" target="_blank"><strong>Fullstack Bootcamp at CNM Ingenuity (October 2019 – December 2019)</strong></a>
					<p class="body-text-size">This cohort consisted of 2 months to create a web application in collaboration with a group of other
						cohort classmates using languages such as PHP, mySQL, JSX, HTML, JavaScript, CSS, and skills like Object Oriented Programming. </p>
					<p class="body-text-size">We also had to create our own personal website during this 2-month period with on-going assignments and assessments to prove our skills.</p>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- horizontal nav pills with objective, skills/languages, project links to projects - MOBILE -->
<section class="d-lg-none bg-light text-dark">
	<ul class="nav nav-pills padding-horizontal" id="pills-tab" role="tablist">
		<li class="nav-item ml-auto">
			<a class="nav-link active bg-dark-gradient px-2 mx-1 text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><h6>Objective</h6></a>
		</li>
		<li class="nav-item">
			<a class="nav-link px-2 bg-dark-gradient text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><h6>Skills/Languages</h6></a>
		</li>
		<li class="nav-item mr-auto">
			<a class="nav-link px-2 mx-1 bg-dark-gradient text-white" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><h6>Projects</h6></a>
		</li>
	</ul>
	<div class="tab-content my-4 mx-4" id="pills-tabContent">
		<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			<p>Solution-driven web developer excelling in highly collaborative or solo work environment, finding solutions
				to challenges and focuses on client satisfaction.</p>
			<p>Proven experience with HTML, CSS, JavaScript, JQuery, PHP, mySQL, Bootstrap, REST, React, and JSX.</p>
			<p>Experienced in building product for desktop, and mobile app users, meeting the highest quality standards
				for web design, user experience, best practices, usability and meeting deadlines.</p>
			<p>Responding to challenges by designing, developing solutions and building web applications aligned to customer’s services.</p>
			Translating solutions into code and working across many different APIs, third-party integrations and databases.
		</div>
		<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
			<div class="container-fluid">
				<div class="row mx-auto d-block">
					<div class ="col-xs-6">
						<ul>
							<li>HTML</li>
							<li>CSS</li>
							<li>PHP</li>
							<li>mySQL</li>
							<li>jQuery</li>
						</ul>
					</div>
					<div class ="col-xs-6 mx-auto d-block">
						<ul>
							<li>JavaScript</li>
							<li>Bootstrap</li>
							<li>REST APIs</li>
							<li>React APIs</li>
							<li>JSX</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><ul class="body-text-size">
				<li class="mb-3">Community CookBook (using PHP, mySQL, JSX, HTML, JavaScript, CSS, Object Oriented Programming)<br/>
					<a href="https://bootcamp-coders.cnm.edu/~gvillalpando/community-cookbook/" class="text-dark" target="_blank"><strong>Deployment, </strong></a>
					<a href="https://github.com/TheDeepDiveDawgs/community-cookbook" class="text-dark d-inline-block mx-auto" target="_blank"><strong>GitHub Repository </strong></a>
				</li>
				<li class="mb-3">Personal Webpage Project (using PHP, HTML, CSS, Bootstrap, jQuery)<br/>
					<a href="https://bootcamp-coders.cnm.edu/~gvillalpando/The-Gino-Files/public_html/front-end/" class="text-dark" target="_blank"><strong>Deployment, </strong></a>
					<a href="https://github.com/GinoVillalpando/The-Gino-files" class="text-dark d-inline-block mx-auto" target="_blank"><strong>GitHub Repository </strong></a>
				</li>
				<li class="mb-3">Deep Dive Coding Assessment (using PHP, mySQL, Object Oriented Programming)<br/>
					<a href="https://bootcamp-coders.cnm.edu/~gvillalpando/assessment-1-GinoVillalpando/" class="text-dark d-xs-inline-block mx-auto" target="_blank"><strong>Deployment, </strong></a>
					<a href="https://github.com/uss-hopper/assessment-1-GinoVillalpando" class="text-dark d-inline-block mx-auto" target="_blank"><strong>GitHub Repository </strong></a>
				</li>
			</ul>
		</div>
	</div>


<!-- drop-downs with further information on some of my core skills-->

	<div class="accordion d-lg-none" id="accordionExample">
		<div class="card bg-dark text-white">
			<button class="btn text-white p-4 body-text-size" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					Deep Dive Coding Graduate
			</button>
		</div>
	</div>
		<div id="collapseOne" class="collapse active" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-body bg-secondary text-white" id="headingOne">
				<strong>CNM Ingenuity (October 2019 – December 2019)</strong>
				<p class="body-text-size">This cohort consisted of 2 months to create a web application in collaboration with a group of other
					cohort classmates using languages such as PHP, mySQL, JSX, HTML, JavaScript, CSS, and skills like Object Oriented Programming. </p>
				<p class="body-text-size">We also had to create our own personal website during this 2-month period with on-going assignments and assessments to prove our skills.</p>
			</div>
		</div>
	<div class="card bg-dark text-white d-lg-none">
		<button class="btn text-white collapsed p-4 body-text-size" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				Collapsible Group Item #2
		</button>
		<div id="collapseTwo" class="collapse m-0 bg-secondary" aria-labelledby="headingTwo" data-parent="#accordionExample">
			<div class="card-body text-white" id="headingTwo">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
				moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
				Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
				shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
				proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
				aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
</section>

<!--headers for video and contact form-->
<div class="row container-fluid mx-auto bg-dark padding-video-contact">
	<div class="col-lg-7 bg-dark">
		<header><h3 class="text-white text-center mb-0 mt-1 display-4">My Creative Side</h3></header>
	</div>
	<div class="col-lg-5 bg-dark">
		<header><h3 class="text-white d-none d-lg-block text-center mb-0 mt-1 display-4">Contact Me</h3></header>
	</div>
</div>

<!-- embedded youtube video showcasing my creative skills-->
<section class=" container-fluid d-block mx-auto mb-auto px-2 bg-dark">
	<div class="container-fluid text-white">
		<div class="row justify-content-around">
			<div class="col-lg-7 mx-auto d-inline-block">
				<div class="embed-responsive embed-responsive-16by9 my-3">
					<iframe src="https://www.youtube.com/embed/c8rv23u_8Es?rel=0&amp;autoplay=1&mute=1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>

		<!-- contact form for The Gino Files-->
		<div class="col-lg-5 p-3 mx-auto mb-5 text-right">
			<header><h3 class="text-white d-lg-none text-center mb-0 mt-1 display-4">Contact Me</h3></header>
			<form id="gino-contact-form" action="../php/index.php" method="post">
				<div class="form-group">
					<a id="contactMe"></a>
					<label for="name">Name <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label for="email">Email <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
					</div>
				</div>
				<div class="form-group">
					<label for="message">Message <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-comment" aria-hidden="true"></i>
						</div>
						<textarea class="form-control" rows="5" id="message" name="message" placeholder="Send me a message if you're looking to hire or collaborate on a project! (2000 characters max)"></textarea>
					</div>
				</div>

				<!-- reCAPTCHA with send and reset buttons-->
				<div class="row justify-content-end">
					<div class="g-recaptcha mx-3" data-sitekey="6LexKsIUAAAAABMZKziTTiDVrw12OXFG-z2mMguO"></div>
				</div>
				<div class="row justify-content-end">
					<button class="btn btn-light m-3 px-4 text-black" type="submit" data-toggle="modal" data-target="#popUpModal"><i class="fa fa-paper-plane"></i> Send</button>
					<button class="btn btn-secondary m-3 px-4" type="reset"><i class="fa fa-ban"></i> Reset</button>
				</div>

				<!-- Modal displaying whether or not the email was sent -->
				<div class="modal fade" id="popUpModal" tabindex="-1" role="dialog" aria-labelledby="output-area" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content bg-dark-gradient">
							<div class="modal-header">
								<p class="modal-title" id="output-area"> </p>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								Thank you for contacting me, I will email you back soon!
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
<!--				<div class="row container-fluid">-->
<!--					<div class="col-xs-12 my-auto ml-auto d-inline-block pb-5">-->
<!--						<div id="output-area"></div>-->
<!--					</div>-->
<!--				</div>-->
			</form>
		</div>
	</div>
</div>
</section>

<!-- footer for pwp -->
<section class="container-fluid fixed-bottom shadow bg-footer mb-0 py-1">
	<blockquote class="text-center mb-0">
		<footer>
				<div class="row mx-auto">
					<div class="d-none d-lg-block my-auto mx-auto">
						<h4 class="text-white">Connect With Me</h4>
					</div>
					<div class="col-3 col-lg-2 mx-auto">
						<a href="mailto:ginovillalpando@outlook.com" target="_blank">
						<img src="imagesIndex/icon-email.png" alt="Nav bar Icon">
							<h6 class="text-white">Email</h6></a>
					</div>
					<div class="col-3 col-lg-2 mx-auto">
						<a href="https://twitter.com/GinoVillalpando" target="_blank">
						<img src="imagesIndex/icon-twitter.png" alt="Nav bar Icon">
							<h6 class="text-white">Follow</h6></a>
					</div>
					<div class="col-3 col-lg-2 mx-auto">
						<a href="https://github.com/GinoVillalpando" target="_blank">
							<img src="imagesIndex/icon-github.png" alt="Nav bar Icon">
							<h6 class="text-white">GitHub</h6>
						</a>
					</div>
					<div class="col-3 col-lg-2 mx-auto">
						<a href="https://www.linkedin.com/in/gino-villalpando/" target="_blank">
						<img src="imagesIndex/icon-linkedin.png" alt="Nav bar Icon">
						<h6 class="text-white">Linkedin</h6></a>
					</div>
				</div>
		</footer>
	</blockquote>
</section>



</body>
</html>