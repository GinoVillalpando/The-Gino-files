<!DOCTYPE html>
<html lang="en">

<!-- meta tags and bootstrap stylesheet with jQueries scripts-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>The Gino Files</title>

	<!-- bootstrap and css stylesheets-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />

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

	<!-- Your JavaScript Form Validator -->
	<script src="../javascript/form-validate.js"></script>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- my style sheet-->
	<link rel="stylesheet" type="text/css" href="stylesheetIndex.css">


</head>

<!-- body of The-Gino-Files contents -->
<body>

<!-- nav bar with icon image, a header with name and an icon for the menu that shows on small screens -->
<div class="container-fluid p-0 text-white">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">
			<img src="imagesIndex/navbarIcon.png" width="64" height="64" class="d-inline-block align-top mr-3" alt="Nav bar Icon" />
			<h5 class="d-inline-block text-center mr-3 display-4">Gino</h5> <h5 class="d-lg-none d-inline-block text-center display-4">V.</h5> <h5 class="d-none d-lg-inline-block text-center display-4">Villalpando</h5></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- nav items aligned to the right and is shown in the menu after pressing -->
		<div class="collapse navbar-collapse text-right" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link mx-4" href="#professionalBackground">Background<hr/> <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link mx-4" href="#">Features<hr/></a>
				</li>
				<li class="nav-item">
					<a class="nav-link mx-4" href="#">Pricing<hr/></a>
				</li>
				<li class="nav-item">
					<a class="nav-link mx-4" href="#" tabindex="-1" aria-disabled="true">Disabled<hr/></a>
				</li>
			</ul>
		</div>
	</nav>
</div>

<!-- jumbotron with background image, title, more information and learn more button-->
<a id="landingPage"></a>
<section>
	<div class="jumbotron-fluid py-5 px-5 intro-background bg-dark mx-auto d-block text-white">
		<h1 class="display-4">Visionary Developer Of The Future.</h1>
		<p class="lead">Compassionate learner of programming with a genuine interest in technological advances.</p>
		<hr class="my-4" />
		<a class="btn btn-secondary text-white btn-lg" href="#professionalBackground" role="button">Learn more</a>
	</div>
</section>


<!-- vertical pill navs with professional background links and projects for fullscreen-->
<a id="professionalBackground"></a>
<section class="container-fluid d-none d-lg-block my-3">
	<div class="row mx-auto">
		<div class="col-4 my-3">
			<div class="nav flex-column nav-pills bg-dark" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link active bg-dark py-4 mx-1 text-white" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><h6>Home</h6></a>
				<a class="nav-link bg-dark py-4 mx-1 text-white" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><h6>Profile</h6></a>
				<a class="nav-link bg-dark py-4 mx-1 text-white" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><h6>Messages</h6></a>
				<a class="nav-link bg-dark py-4 mx-1 text-white" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><h6>Settings</h6></a>
			</div>
		</div>
		<div class="col-8 my-5 px-2 d-block">
			<div class="tab-content align-items-center" id="v-pills-tabContent">
				<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive
					technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the
					content itself (e.g. the visible text), or is included through alternative means, such as additional text
					hidden with the .sr-only class.</div>
				<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
				<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
				<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
			</div>
		</div>
	</div>
</section>


<!-- horizontal nav pills with the content of professional background and links to projects -->
<section class="d-lg-none my-3 text-right">
	<ul class="nav nav-pills d-inline-block mx-auto " id="pills-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active bg-dark px-4 my-2 text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><h6>Home</h6></a>
		</li>
		<li class="nav-item">
			<a class="nav-link px-4 bg-dark my-2 text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><h6>Profile</h6></a>
		</li>
		<li class="nav-item">
			<a class="nav-link px-4 bg-dark my-2 text-white" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><h6>Contact</h6></a>
		</li>
	</ul>
	<div class="tab-content my-4 mx-4" id="pills-tabContent">
		<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive
			technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the
			content itself (e.g. the visible text), or is included through alternative means, such as additional text
			hidden with the .sr-only class.</div>
		<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Lorem ipsum
			dolor sit amet, consectetur adipiscing elit. In posuere tristique tortor, cursus volutpat lorem semper sed.
			Cras rutrum hendrerit sem et cursus. Quisque venenatis, sapien a molestie ullamcorper, leo tellus dapibus tortor,
			ut gravida nunc dolor eget leo. In sodales ipsum et eros blandit dapibus. Vivamus sit amet auctor risus.
			Pellentesque dictum pharetra est, pulvinar ultricies augue sagittis ut. Vivamus vitae velit ut dui convallis euismod.
			Ut eu tellus et nunc molestie mattis. Pellentesque quam ante, imperdiet ac aliquet sit amet, vehicula ut turpis.
			Morbi sit amet nunc at augue imperdiet imperdiet non congue libero. Quisque venenatis sollicitudin velit ac dapibus.
			Phasellus volutpat, lacus in malesuada scelerisque, ex ligula sagittis dolor, id ullamcorper velit sem vitae metus.
			Suspendisse at mattis metus. Curabitur a mi vestibulum, sollicitudin odio sit amet, aliquet ligula.</div>
		<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Suspendisse
			dictum tempor vehicula. Vivamus ac magna id sapien vehicula hendrerit. Sed dapibus erat id lacus tempor faucibus
			non a lorem. Mauris nec facilisis dolor, sed euismod est. Suspendisse placerat diam ut eleifend tincidunt.
			Suspendisse vel felis ultrices, sollicitudin est interdum, auctor tortor. Quisque id tincidunt sapien, eget
			mattis eros. Quisque dui felis, porttitor vel condimentum ut, tincidunt sed enim.</div>
	</div>
</section>

<!-- drop-downs with further information on some of my core skills-->
<section>
	<div class="accordion d-lg-none" id="accordionExample">
		<div class="card bg-dark text-white">
			<div class="card-header" id="headingOne">
				<h2 class="mb-0">
					<button class="btn text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Collapsible Group Item #1
					</button>
				</h2>
			</div>
		</div>
		<div id="collapseOne" class="collapse active" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-body">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
				dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
				ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
				fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
				mollit anim id est laborum.
			</div>
		</div>
	</div>
	<div class="card bg-dark text-white d-lg-none">
		<div class="card-header" id="headingTwo">
			<h2 class="mb-0">
				<button class="btn text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					Collapsible Group Item #2
				</button>
			</h2>
		</div>
		<div id="collapseTwo" class="collapse m-0 bg-secondary" aria-labelledby="headingTwo" data-parent="#accordionExample">
			<div class="card-body">
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
<div class="row m-0 p-0">
	<div class="col-lg-7 bg-secondary">
		<header><h3 class="text-white text-center mb-0 mt-1 display-4">My Creative Side: Edit Done With Adobe</h3></header>
	</div>
	<div class="col-lg-5 bg-secondary d-none d-lg-block">
		<header><h3 class="text-white text-center px-0 mb-0 mt-1 display-4">Contact Me</h3></header>
	</div>
</div>

<!-- embedded youtube video showcasing my creative skills-->
<div class="container-fluid bg-dark text-white">
	<div class="row">
		<div class="col-lg-7 mx-auto d-inline-block">
			<div class="embed-responsive embed-responsive-16by9 my-3">
				<iframe src="https://www.youtube.com/embed/c8rv23u_8Es?rel=0&amp;autoplay=1&mute=1"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<!-- contact form for The Gino Files-->
		<div class="col-lg-5 bg-dark px-3 pb-0 mb-2 align-text-bottom">
			<header><h3 class="text-white px-0 text-center d-lg-none mb-0 mt-1 display-4">Contact Me</h3></header>
			<form class="text-right" id="gino-contact-form" action="../../php/index.php" method="post">
				<div class="form-group">
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
					<!-- reCAPTCHA -->
					<div class="g-recaptcha my-2" data-sitekey="6LexKsIUAAAAABMZKziTTiDVrw12OXFG-z2mMguO"></div>

					<button class="btn btn-secondary text-white" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
					<button class="btn btn-light" type="reset"><i class="fa fa-ban"></i> Reset</button>

					<!--empty area for form error/success output-->
					<div class="col-xs-12 d-block mx-auto mt-4">
						<div id="output-area"></div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- footer for webpage -->
<section class="container-fluid border border-secondary bg-light mb-0 px-0">
	<blockquote class="text-center mb-0">
		<footer class="mb-0 pb-0 pt-2 mt-2">
			<div class="row container-fluid pr-0">
				<div class="col-3 px-0">
					<img src="imagesIndex/envelope-icon.png" class="d-inline-block align-center" alt="Nav bar Icon" />
					<h4 class="text-dark">Email</h4>
				</div>
				<div class="col-3 px-0">
					<img src="imagesIndex/twitter-icon.png" class="d-inline-block align-center" alt="Nav bar Icon" />
					<h4 class="text-dark">Follow</h4>
				</div>
				<div class="col-3 px-0">
					<img src="imagesIndex/slack-icon.png" class="d-inline-block align-center" alt="Nav bar Icon" />
					<h4 class="text-dark">Slack</h4>
				</div>
				<div class="col-3 px-0">
					<img src="imagesIndex/linkedin-icon.png" class="d-inline-block align-center" alt="Nav bar Icon" />
					<h4 class="text-dark">Linkedin</h4>
				</div>
			</div>
		</footer>
	</blockquote>
</section>



</body>
</html>